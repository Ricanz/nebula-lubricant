<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index(){
        $data = Subscribe::orderByDesc('id')->get();
        return view('admin.subscribe.index', compact('data'));
    }
}
