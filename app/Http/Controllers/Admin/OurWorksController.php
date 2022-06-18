<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ourworks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OurWorksController extends Controller
{
    public function index(){
        $works= Ourworks::all();
        return view('backend.works.index')->with('works',$works);
    }

    public function create(){
        return view('backend.works.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'         =>'required|max:191',
            'description'   =>'required|max:600',
            'image'         =>'required|image|mimes:png,jpg,jpeg|max:500',
        ]);

        $works = new Ourworks();
        $works->title = $request->input('title');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/works',$filename);
            $works->image = $filename;
        }
        $works->description = $request->input('description');
        $works->save();
        return redirect('/dashboard/our-works')->with('status','You have successfully Stored data..');

    }

    public function edit($id){
        $works = Ourworks::find($id);
        return view('backend.works.edit')->with('works',$works);
    }

    public function update(Request $request, $id){

        $request->validate([
            'title'         =>'required|max:191',
            'description'   =>'required|max:600',
            // 'image'         =>'required|image|mimes:png,jpg,jpeg|max:500',
        ]);

        $works = Ourworks::find($id);
        $works->title = $request->input('title');
        if($request->hasFile('image'))
        {
            $path = 'uploads/works/'.$works->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/works',$filename);
            $works->image = $filename;
        }
        $works->description = $request->input('description');
        $works->status = $request->input('status')==true ? '1' : '0';
        $works->update();
        return redirect('/dashboard/our-works')->with('status','You have successfully updated data..');
    }

    public function destroy($id){
        $works = Ourworks::find($id);
        $path = 'uploads/works/'.$works->image;
            if(File::exists($path)){
                File::delete($path);
            }
        $works->delete();

        return redirect()->back()->with('status','You have successfully deleted data..');
    }
}
