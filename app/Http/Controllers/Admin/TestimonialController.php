<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TestimonialCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\TestimonialFormRequest;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = TestimonialCategory::all();
      return view('admin.testimonial.index',compact('testimonial'));
    }
    public function create()
    {
      return view('admin.testimonial.create');
    }
    public function store(TestimonialFormRequest $request)
    {
      $data = $request->validated();
      $testimonial = new TestimonialCategory;
      $testimonial->name = $data['name'];
      $testimonial->title = $data['title'];
      $testimonial->description = $data['description'];

      if($request->hasfile('image')){
        $file = $request->file('image');
        // $filename = time().'.'.$file->getClientOrginalExtension();
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/testimonial/',$filename);
        $testimonial->image = $filename;
      }

      $testimonial->navbar_status =$request->navbar_status == true ? '1':'0';
      $testimonial->status =$request->status == true ? '1':'0';
    //   $testimonial->created_by = Auth::user()->id;
      $testimonial->created_by = Auth::user()->name;
      $testimonial->save();
    //   dd($testimonial);
      return redirect('admin/testimonial')->with('message','Testimonial Added');

    }
}
