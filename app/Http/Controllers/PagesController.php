<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function publicPage() {
        return view("pages.public");
    }

    public function userPage() {
        $uid = auth()->user()->id;
        $context['user'] = User::where('id', $uid)->first();

        return view("pages.user", $context);
    }

    public function moderatorPage() {
        return view("pages.moderator");
    }

    public function adminPage() {
        return view("pages.admin");
    }
    
}
