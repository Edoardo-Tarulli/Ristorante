<?php

namespace App\Http\Controllers;

class userController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
    }

}
