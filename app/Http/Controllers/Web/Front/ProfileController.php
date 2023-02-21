<?php

namespace App\Http\Controllers\Web\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\CityService;
use App\Services\UserService;
use Auth;

class ProfileController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index()
    {
        $categoryService = new CategoryService();
        $categories = $categoryService->mainCategories();
        return view('frontend.web.profile' , compact(['categories']));
    }

    public function addresses(){
        $categoryService = new CategoryService();
        $cityService = new CityService();
        $categories = $categoryService->mainCategories();
        $states = $cityService->getStates();
        return view('frontend.web.profile.address' , compact(['categories' , 'states']));
    }

    public function deleteAddress($user_id, Request $request)
    {
        $user = Auth::user();
        $position = $request->position;
        $address = json_decode($user->addresses, true);
        unset($address[$position]);
        if ($this->userService->updateAddress($user_id, json_encode($address)))
            return response()->json(['status' => 200, 'message' => 'آدرس با موفقیت حذف شد.']);
        return response()->json(['status' => 201, 'message' => 'خطا در حذف آدرس !']);
    }

    public function addAddress(Request $request)
    {
        if ($this->userService->addAddress(Auth::user(), $request))
            return response()->json(['status' => 200, 'message' => 'آدرس با موفقیت ثبت شد.']);
        return response()->json(['status' => 201, 'message' => 'خطا در حذف آدرس !']);
    }

    public function updateAddress(Request $request)
    {
        $data = [
            'title' => $request->title,
            'city_id' => $request->city_id,
            'city' => trim($request->city),
            'state_id' => $request->state_id,
            'state' => trim($request->state),
            'postalCode' => $request->postalCode,
            'address' => $request->address,
            'isSelect' => 0,
        ];

        $address = json_decode(Auth::user()->addresses, true);
        $address[$request->position] = $data;
        // if ($this->userService->updateAddress(Auth::id(), json_encode($address)))
        //     return redirect(route('user.addresses', $user_id))->with('status', ['status' => 200, 'message' => 'آدرس با موفقیت ویرایش شد.']);
        // return redirect(route('user.addresses', $user_id))->with('status', ['status' => 201, 'message' => 'خطا در ویرایش آدرس !']);
    }
}
