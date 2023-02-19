<?php

namespace App\Http\Controllers;

use App\Services\AdvertisingService;
use App\Services\BrandService;
use App\Services\CategoryService;
use App\Services\ShopProductService;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{

    protected $productService , $categoryService;

    public function __construct(ShopProductService $productService)
    {
        $this->productService = $productService;
        $this->categoryService = new CategoryService();
    }

    public function index()
    {
        $advertisingService = new AdvertisingService();
        $brandService = new BrandService();
        $latestProducts = $this->productService->latestProducts();
        $bestSellingProducts = $this->productService->bestSellingProducts();
        $advertising = $advertisingService->activeAdvertising();
        $brands = $brandService->all();
        $categories = $this->categoryService->mainCategories();
        return view('frontend.web.index' , compact(['latestProducts' ,
            'bestSellingProducts','advertising' , 'brands','categories']));
    }

    public function redirectToLogin(){
        Session::put('previous_url' , url()->previous());
        return redirect(route('login'));
    }

    public function aboutUs(){
        $categories = $this->categoryService->mainCategories();
        return view('frontend.web.about_us' , compact(['categories']));
    }
}
