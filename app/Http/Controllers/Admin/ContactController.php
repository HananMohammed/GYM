<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Front\Mails;

class ContactController extends Controller
{
    public function index(){

        $data = Mails::all();

         return view('admin.mails.index', compact('data'));
    }
}
