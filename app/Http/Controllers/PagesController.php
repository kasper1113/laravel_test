<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function getIndex() {
        $posts =Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages/welcome')->withPosts($posts);
    }
    public function getAbout() {

        $email = 'kaspervandewerken@gmail.com';
        return view('pages/about')->withEmail($email);
    }
    public function getContact() {
        return view('pages/contact');
    }
    public function getLogin() {
        return view('auth/login');
    }
    public function logout(Request $request) {
        return view('auth/login');
      }

}