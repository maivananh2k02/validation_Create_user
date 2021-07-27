<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function getSlide()
    {
        //
        $slides = Slide::all();
        $products = Product::paginate(12);
        return view('page.home', compact('slides', 'products'));

    }

    public function getProductType($type)
    {
        $productType = Product::where('id_type', $type)->get();
        $productType2 = Product::where('id_type', '<>', $type)->paginate(4);
        $productType3 = ProductType::all();
        $productType4 = ProductType::where('id', $type)->first();
        return view('page.productType', compact('productType', 'productType2', 'productType3', 'productType4'));
    }

    public function getDetail(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $product2 = Product::where('id_type', $product->id_type)->paginate(3);
        return view('page.detail', compact('product', 'product2'));
    }

    public function getLogin()
    {
        //
        return view('page.login');
    }


    public function getRigister()
    {
        //
        return view('page.rigister');
    }


    public function postRigister(Request $request)
    {
        //
        $this->validate($request,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'name' => 'required',
                'r_password' => 'required|same:password'
            ],
            [
                'email.required' => 'vui long nhap email',
                'email.email' => 'vui long nhap dung dinh dang email',
                'email.unique' => 'email da ton tai',
                'password.required' => 'vui long nhap email',
                'password.min' => 'it nhat 6 ki tu',
                'password.max' => 'password khong qua 20 ki tu',
                'name.required' => 'vui long nhap ten',
                'r_password.required' => 'vui long nhap lai vao r_password',
                'r_password.same' => 'mat khau k trung'
            ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('thanhCong', 'tao tai khoan thanh cong');
    }


    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required' => 'vui long nhap email',
                'email.email' => 'vui long nhap dung kieu email',
                'password.required' => 'vui long nhap password',
                'password.min' => 'it nhat la 6 ki tu',
                'password.max' => 'k qua 20 ki tu'
            ]
        );
        $auth = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($auth)) {
            return redirect()->route('page.home')->with('login', 'dang nhap thanh cong');
        } else {
            return redirect()->back()->with('login', 'dang nhap khong thanh cong');
        }
    }


    public function logOut()
    {
        Session::flush();
        return redirect()->route('page.home');
    }

    public function cart()
    {
        $cart = session()->get('cart');

        return view('page.cart', compact('cart'));
    }

    public function addToCart($id)
    {
        $carts = session()->get('cart');
        $product = Product::findOrFail($id);
        if (!$carts) {
            $carts = [
                $id => [
                    'name' => $product->name,
                    'price' => $product->unit_price,
                    'quantity' => 1,
                    'image' => $product->image
                ]
            ];
        }
        if (isset($carts[$id])) {
            $carts[$id]['quantity'] += 1;
            session()->put('cart', $carts);
            return redirect()->back();
        }
        $carts[$id] = [
            'name' => $product->name,
            'price' => $product->unit_price,
            'quantity' => 1,
            'image' => $product->image
        ];


        session()->put('cart', $carts);
        return redirect()->back();
//        dd($carts);
    }
}
