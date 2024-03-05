<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function service()
    {
        // return view('home.servicepage');
        // $posts = ServiceCategory::all();
        $data =[];
        // $data['services'] = ServiceCategory::all();
        $data['services'] = ServiceCategory::select('serviceCategory.serviceID', 'serviceCategory.serviceName', 'serviceContent.content', 'serviceCategory.IsActive')
        ->join('serviceContent', 'serviceCategory.serviceID', '=', 'serviceContent.serviceID')->get();
        // dd($data);
        return view('home.servicepage', compact('data'));
    }
}
