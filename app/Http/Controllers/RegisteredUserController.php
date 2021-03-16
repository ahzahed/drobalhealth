<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Mail\InvoiceMail;
use App\Package;
use App\User;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Stripe\Invoice;

class RegisteredUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Edit Profile step by step

    public function update_user(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:25'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'speciality' => ['required'],
            'qualification' => ['required'],
            'description' => ['required'],
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['speciality'] = $request->speciality;
        $data['qualification'] = $request->qualification;
        $data['description'] = $request->description;


        $avatarUpload = request()->file('avatar');
        if ($avatarUpload) {
            $avatarName = time() . '.' . $avatarUpload->getClientOriginalExtension();
            $avatarPath = public_path('/backend/images/avatar/');
            $avatarUpload->move($avatarPath, $avatarName);
            $data['avatar'] = 'public/backend/images/avatar/' . $avatarName;
            $user = User::find($id);
            $avatar = $user->avatar;
            if ($avatar) {
                unlink($avatar);
            }
            $update = User::where('id', '=', $id)->update($data);
            session()->flash('success', 'Your profile successfully updated');
            return Redirect()->back();
        } else {
            $update = User::where('id', '=', $id)->update($data);
            session()->flash('success', 'Your profile successfully updated');
            return Redirect()->back();
        }
    }

    public function viewProfile()
    {
        $user = User::where('id', Auth::id())->first();
        return view('frontend.pages.logged_user_profile', compact('user'));
    }

    public function detailsProfile($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::where('id', '=', $id)->first();
        $priority = User::where('id', '=', $id)->first();
        $limit = User::where('id', Auth::id())->first();
        $value = ($priority->priority) + 1;
        $contact_limit = ($limit->contact_limit) - 1;
        User::where('id', $id)->update(['priority' => $value]);
        User::where('id', Auth::id())->update(['contact_limit' => $contact_limit]);
        return view('frontend.pages.details_profile', compact('user'));
    }
    // public function allMaleProfile()
    // {
    //     $maleFeatured = User::orderBy('priority', 'desc')->get();
    //     return view('frontend.pages.all_male_profile', compact('maleFeatured'));
    // }

    //For Admin panel
    function index()
    {
        $registeredUser = User::all();
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            return view('backend.registered_user.registered_user', compact('registeredUser'));
        }
        return Redirect()->route('home');
    }
    function active($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $changeValue = User::where('id', $id)->update(['status' => 1, 'user_type' => 2]);
            session()->flash('success', 'User successsfully activated');
            return back();
        }
        return Redirect()->route('home');
    }
    function deactive($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $changeValue = User::where('id', $id)->update(['status' => 0]);
            session()->flash('danger', 'User successsfully deactivated');
            return back();
        }
        return Redirect()->route('home');
    }
    public function pendingUser()
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $pendingUser = User::all();
            return view('backend.registered_user.pending_user', compact('pendingUser'));
        }
        return Redirect()->route('home');
    }

    function approveUser($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $changeValue = User::where('id', $id)->update(['pending' => 1, 'status' => 1, 'user_type' => 2]);
            session()->flash('success', 'User successsfully approved');
            return back();
        }
        return Redirect()->route('home');
    }

    public function registeredUserView($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $registeredUser = User::where('id', $id)->first();
            return view('backend.registered_user.view_user', compact('registeredUser'));
        }
        return Redirect()->route('home');
    }

    public function user_profile($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2 || Auth::user()->user_type == 0) {
            $registeredUser = User::where('id', $id)->first();
            return view('backend.registered_user.view_user', compact('registeredUser'));
        }
        return Redirect()->route('home');
    }

    public function registeredUserDelete($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $user = User::find($id);
            $avatar = $user->avatar;
            if ($avatar) {
                unlink($avatar);
            }
            $user->delete();
            session()->flash('danger', 'User successsfully deleted');
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }
    public function pendingUserDelete($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $user = User::find($id);
            $user->delete();
            session()->flash('danger', 'User successsfully deleted');
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }
}
