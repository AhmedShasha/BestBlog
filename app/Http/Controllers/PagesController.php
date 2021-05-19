<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        $title ='Hello index';
        // return view("pages.index",compact('title'));
        // return view("pages.index")->with('title',$title);
        return view("pages.index",compact('title'));
    }
    public function services() {
        $data =[
            'title' => 'the following service provided: ' ,
            'services' => ['programming','automation','web design']
        ];
        return view("pages.services")->with($data);
    }
    public function about() {
        return view("pages.about");
    }
}
