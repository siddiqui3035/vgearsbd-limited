<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Cart;
use App\Models\User;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Address;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Category;
use App\Models\AboutVgear;
use App\Models\Order;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')
            ->where('status', 0)
            ->get();

        $data['teams'] = OurTeam::orderBy('created_at', 'desc')
            ->where('status', 0)
            ->get();

        $data['banners'] = Banner::orderBy('created_at', 'desc')
            ->where('status', 0)
            ->get();

        $data['brands'] = Brand::where('status', 0)->latest()->get();

        $data['products'] = Product::orderBy('created_at', 'desc')
            ->where('status', 0)
            ->get();

        return View('frontend.layouts.index', $data);
    }

    public function aboutUs()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')
            ->where('status', 0)
            ->get();

        $data['aboutOne'] = AboutVgear::where('serial', 1)->first();
        $data['aboutTwo'] = AboutVgear::where('serial', 2)->first();
        $data['aboutThree'] = AboutVgear::where('serial', 3)->first();
        $data['aboutFour'] = AboutVgear::where('serial', 4)->first();
        $data['aboutFive'] = AboutVgear::where('serial', 5)->first();

        return view('frontend.about', $data);
    }

    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function singleBlog(Blog $blog)
    {
        $data['recentBlogs'] = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        $data['blogs'] = Blog::get();
        $data['blog'] = $blog;

        return view('frontend.single-blog', $data);
    }

    public function myAccount()
    {
        $data['addresses'] = Address::all();
        $data['socialLinks'] = SocialLink::all();
        $data['orders'] = Order::where('user_id', auth()->id())->get();

        return view('frontend.my-account', $data);
    }

    public function ourBlogs(Blog $blog)
    {
        $data['recentBlogs'] = Blog::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $data['blogs'] = Blog::paginate(15);
        $data['blog'] = $blog;

        return view('frontend.blogs', $data);
    }

    public function searchBlog(Request $request, Blog $blog)
    {
        $data['recentBlogs'] = Blog::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $query = $request->input('search');
        $data['blog'] = $blog;

        if ($query) {
            $data['blogs'] = Blog::where('title', 'like', '%' . $query . '%')
                ->orWhere('category', 'like', '%' . $query . '%')
                ->get();

            return view('frontend.blog-search', $data);
        } else {
            Alert::success('Error', 'Unsupported operation!');
            return redirect()->back();
        }
    }

    public function singleProduct (Product $product) {
        $data['products'] = Product::where('status', 0)->get();
        $data['product'] = $product;

        return view('frontend.single-product', $data);
    }

    public function product() {
        $data['products'] = Product::where('status', 0)->get();
        return view('frontend.products', $data);
    }

    public function checkout(){
        $data['addresses'] = Address::where('user_id', auth()->user()->id)->first();
        $data['carts'] = Cart::with('product')->get();

        return view('frontend.checkout', $data);
    }

}
