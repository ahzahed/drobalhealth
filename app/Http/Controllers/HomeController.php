<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use App\VisitorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $UserIP = VisitorModel::get_ip();
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        $getbrowser = VisitorModel::get_browsers();
        $getdevice = VisitorModel::get_device();
        $getos = VisitorModel::get_os();

        $ip_address = VisitorModel::where('ip_address', $UserIP)->first();

        if (!$ip_address) {
            VisitorModel::insert(['ip_address' => $UserIP, 'visit_time' => $timeDate, 'getbrowser' => $getbrowser, 'getdevice' => $getdevice, 'getos' => $getos]);
        }
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2 || Auth::user()->user_type == 0) {
            return view('admin');
        } else {
            $blogs = Blog::paginate(6);
            $users = User::where('user_type', '=', '2')->get();
            return view('home', compact('blogs', 'users'));
        }
    }
}
