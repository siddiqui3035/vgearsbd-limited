<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmindashboardController extends Controller
{
    public function index()
    {
        // $data['usersCount'] = User::where('role', 0)->where('status', 0)->count();
        $userStat =  User::query()
            ->selectRaw('count(*) as totalUsers')
            ->selectRaw("count(case when role = 'user' then 0 end) as userCount")
            ->selectRaw("count(case when status = 'active' then 0 end) as activeUserCount")
            ->first();
        $data['usersCount'] = $userStat?->userCount;
        $data['percentUser'] =  $userStat?->totalUsers === 0 ? 0 : ($userStat?->userCount  / $userStat?->totalUsers) * 100;

        $data['brandsCount'] =  Brand::where('status', 0)->count();

        $data['categoryCount'] = Category::where('parent_id', null)->where('status', 0)->count();
        $data['blogCount'] = Blog::where('status', 0)->count();
        $data['blogs'] = Blog::where('status', 0)->limit(3)->get();
        // dd($data['blogs']);

        $data['messages'] = ContactUs::where('status', 0)->limit(6)->latest()->get();


        return view('admin.index',$data);
    }


}
