<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function publicPage() {
        return view("pages.public");
    }
    public function userPage() {
        return view("pages.user");
    }
    public function moderatorPage() {
        return view("pages.moderator");
    }
    public function adminPage() {
        return view("pages.admin");
    }
    
}
