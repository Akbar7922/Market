<?php

namespace App\Http\Controllers\Web\Front;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\LogService;
use App\Services\ShopProductService;
use Illuminate\Http\Request;
use Auth;

class ShopProductController extends Controller
{
    protected $shopProductService , $logService;

    public function __construct(ShopProductService $shopProductService ,
                                                      LogService $logService )
    {
        $this->shopProductService = $shopProductService;
        $this->logService = $logService;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {
        $categoryService = new CategoryService();
        $categories = $categoryService->mainCategories();
        $product = $this->shopProductService->findWithSlug($slug);
        $similarProducts = $this->shopProductService->similarProduct($product->product->category_id);
        $otherHaveBoughtProducts = $this->shopProductService->latestProducts();
        $logData = [
            'activity_id' => 5 ,
            'entity_id'  => $product->id ,
            'ip_address' => request()->ip() ,
            'platform' => 0 ,
            'user_id' => 0
        ];
        if(Auth::check())
            $logData['user_id'] = Auth::id();
        $this->logService->create($logData);
        return view('frontend.web.product', compact(['product',
            'similarProducts', 'otherHaveBoughtProducts', 'categories']));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function productsFromSerach(Request $request)
    {
        $products = $this->shopProductService->productsFromSearch(
            $request->category_id, $request->brand_id);
        return view('frontend.partial.product_item', compact(['products']));
    }
}
