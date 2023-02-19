<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\ShopProduct;
use Carbon\Carbon;
use Illuminate\Database\QueryException;

class ShopProductService
{
    public function all()
    {
        return ShopProduct::where('isDel', 0)->paginate(15);
    }

    public function allProducts($limit)
    {
        return ShopProduct::query()->limit($limit)->paginate(20);
    }

    public function latestProducts()
    {
        return ShopProduct::query()->where('isDel', 0)
            ->orderByDesc('created_at')->get();
    }

    public function bestSellingProducts()
    {
        return ShopProduct::query()->where('isDel', 0)
            ->get();
    }

    public function create($data)
    {
        try {
            $data['barcode'] = '-';
            $shop_product = ShopProduct::create($data);
            $shop_product->update(['barcode' => $this->generateBarcode($shop_product->id)]);
            return true;
        } catch (QueryException $exception) {
            return $exception->getMessage();
        }
    }


    public function find($id)
    {
        return ShopProduct::findOrFail($id);
    }

    public function findWithSlug($slug)
    {
        return ShopProduct::where('slug', $slug)->with(['properties'])->first();
    }

    public function update($id, $data)
    {
        try {
            $shop_product = ShopProduct::findOrFail($id);
            $shop_product->fill($data);
            $shop_product->save();
            return true;
        } catch (QueryException $exception) {
            return false;
        }
    }

    public function decrement($id, $count)
    {
        try {
            ShopProduct::query()->where('id', $id)->decrement('count', $count);
            return true;
        } catch (QueryException $queryException) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            ShopProduct::where('id', $id)->update(['isDel' => 1]);
            return true;
        } catch (QueryException $exception) {
            return false;
        }
    }

    public function productsFromSearch($category_id, $brand_id)
    {
        $categoryProducts = Product::query()->select('id')
            ->where('category_id', $category_id)->get();
        return ShopProduct::where('brand_id', $brand_id)
            ->whereIn('product_id', $categoryProducts)->get();
    }

    private function generateBarcode($shop_product_id)
    {
        return 'SPD-' . $this->threeDigits($shop_product_id) . $this->date();
    }

    private function date()
    {
        $dateTime = str_replace(['-', ':', ' '], '', Carbon::now()->toDateTimeString());
        return substr($dateTime, 2, strlen($dateTime));
    }

    private function threeDigits($number)
    {
        if (strlen($number) > 3)
            return substr($number, strlen($number) - 3, strlen($number));
        return sprintf('%03u', $number);
    }

    public function similarProduct($category_id)
    {
        return ShopProduct::with(['product' => function ($query) use ($category_id) {
            $query->where('category_id', $category_id);
        }])->with('product')->get();
    }

    public function otherHaveBoughtProducts($product_id)
    {

    }

    public function getProductsOfCategory($category_id)
    {
        if ($category_id) {
            $categori_ids = Category::select('id')->where('id', $category_id)
                ->orWhere('parent_cat_id', $category_id)->get()->toArray();
            $productIds = Product::select('id')->whereIn('category_id', $categori_ids)->get()->toArray();
            return ShopProduct::whereIn('product_id', $productIds)->paginate(20);
        } else
            return ShopProduct::forPage(3)->paginate(20);
    }

    public function getSearchProducts($brands, $categories, $word, $exists, $special, $hasDiscount, $hasPicture)
    {
        $searchProducts = ShopProduct::select();
        if ($categories) {
            $category_ids = Category::select('id')->whereIn('id' , $categories)
                ->orWhereIn('parent_cat_id' , $categories)->get();
            $product_ids = Product::select('id')->whereIn('category_id', $category_ids)->get();
            $searchProducts = $searchProducts->whereIn('product_id' , $product_ids);
        } if ($brands)
            $searchProducts = $searchProducts->whereIn('brand_id', $brands);
        if ($word){
            $productIDS = Product::select('id')->where('name' , 'like' , '%'.$word.'%')->get();
            $searchProducts = $searchProducts->whereIn('product_id' , $productIDS);
        }

        return $searchProducts->paginate(20);

    }
}
