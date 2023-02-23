<?php

namespace App\Http\Controllers\Web\Front;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\CityService;
use App\Services\FavoriteService;
use App\Services\OrderService;
use App\Services\ShopProductService;
use App\Services\UserService;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $categoryService = new CategoryService();
        $categories = $categoryService->mainCategories();
        return view('frontend.web.profile', compact(['categories']));
    }

    public function addresses()
    {
        $categoryService = new CategoryService();
        $cityService = new CityService();
        $categories = $categoryService->mainCategories();
        $states = $cityService->getStates();
        return view('frontend.web.profile.address', compact(['categories', 'states']));
    }

    public function orders()
    {
        $orderService = new OrderService();
        $categoryService = new CategoryService();
        $categories = $categoryService->mainCategories();
        $orders = $orderService->getUserOrders(Auth::id());
        return view('frontend.web.profile.orders', compact(['categories', 'orders']));
    }

    public function favorites()
    {
        $categoryService = new CategoryService();
        $favoritesService = new FavoriteService();
        $categories = $categoryService->mainCategories();
        $products = $favoritesService->getUserFavorites(Auth::id());
        return view('frontend.web.profile.favorites', compact(['categories']));
    }

    public function deleteAddress(Request $request)
    {
        $user = Auth::user();
        $position = $request->position;
        $address = json_decode($user->addresses, true);
        unset($address[$position]);
        if ($this->userService->updateAddress($user->id, json_encode($address))) {
            return response()->json(['status' => 200, 'message' => 'آدرس با موفقیت حذف شد.']);
        }

        return response()->json(['status' => 201, 'message' => 'خطا در حذف آدرس !']);
    }

    public function addAddress(Request $request)
    {
        if ($this->userService->addAddress(Auth::user(), $request)) {
            return redirect(route('profile.addresses'))->with('status', ['status' => 200, 'message' => 'آدرس با موفقیت ثبت شد.']);
        }

        return redirect(route('profile.addresses'))->with('status', ['status' => 201, 'message' => 'خطا در ثبت آدرس !']);
    }

    public function updateAddress(Request $request)
    {
        if ($this->userService->updateUserAddress(Auth::user(), $request)) {
            return redirect(route('profile.addresses'))->with('status', ['status' => 200, 'message' => 'آدرس با موفقیت ویرایش شد.']);
        }

        return redirect(route('profile.addresses'))->with('status', ['status' => 201, 'message' => 'خطا در ویرایش آدرس !']);
    }

    public function updateAvatar(Request $request)
    {
        if ($request->has('picture')) {
            $image = $request->file('picture');
            $image_path = public_path("image\users\\");
            $image_name = Auth::id() . '_' . time() . ".png";
            if (file_exists($image_path . Auth::user()->pic)) {
                unlink($image_path . Auth::user()->pic);
            }

            if ($image->move($image_path, $image_name)) {
                if ($this->userService->updateAvatar(Auth::id(), $image_name)) {
                    return redirect()->back()->with('status', ['status' => 200, 'message' => 'تصویر با موفقیت بارگذاری شد.']);
                } else {
                    return redirect()->back()->with('status', ['status' => 201, 'message' => 'خطا در ویرایش تصویر !']);
                }
            } else {
                return redirect()->back()->with('status', ['status' => 202, 'message' => 'خطا در بارگذاری تصویر !']);
            }
        } else {
            return redirect()->back()->with('status', ['status' => 203, 'message' => 'تصویری برای بارگذاری فرستاده نشده.']);
        }

    }
}
