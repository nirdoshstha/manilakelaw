<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::all();
        return view('backend.slider.index')->with('slider',$slider);
    }

    public function create(){
        return view('backend.slider.create');
    }

    public function store(Request $request){

        $slider = new Slider();

        $slider->title = $request->input('title');
        $slider->subtitle = $request->input('subtitle');
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/header',$filename);
            $slider->image=$filename;
        }


        // $slider->image1 = $request->file('image1')->store('slider');
        // $slider->image2 = $request->file('image2')->store('slider');
        $slider->url1 = $request->input('url1');
        $slider->url2 = $request->input('url2');
        $slider->save();
        return redirect('/dashboard/slider')->with('status','You have successfully saved data..');
    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('backend.slider.edit')->with('slider',$slider);
    }

    public function update(Request $request, $id){
        $slider = Slider::findOrFail($id);

        $slider->title = $request->input('title');
        $slider->subtitle = $request->input('subtitle');

        if($request->hasfile('image'))
        {
            $path ='uploads/header/'.$slider->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/header/',$filename);
            $slider->image=$filename;
        }
        $slider->url1 = $request->input('url1');
        $slider->url2 = $request->input('url2');
        $slider->status = $request->input('status')==true ? '1' : '0';
        $slider->update();
        return redirect('/dashboard/slider')->with('status','You have successfully updated data..');
    }

    public function destroy($id){
        $slider = Slider::findOrFail($id);
        $path ='uploads/header/'.$slider->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        $slider->delete();
        return redirect()->back()->with('status','You data is deleted ..');
    }
}
