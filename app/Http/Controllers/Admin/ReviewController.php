<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    public function index(){
        $review = Review::all();
        return view('backend.review.index')->with('review',$review);
    }

    public function create(){
        return view('backend.review.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'          =>'required|max:191',
            'designation'   =>'required|max:191',
            'image'         =>'required|image|mimes:png,jpg,jpeg|max:500',
            'description'   =>'required|max:600',
        ]);

        $review = new Review();
        $review->name = $request->input('name');
        $review->designation = $request->input('designation');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/review',$filename);
            $review->image = $filename;
        }
        $review->description = $request->input('description');
        $review->save();
        return redirect('/dashboard/review')->with('status','You have successfully stored data..');


    }

    public function edit($id){
        $review=Review::find($id);
        return view('backend.review.edit')->with('review',$review);
    }

    public function update(Request $request, $id){
        $review = Review::find($id);
        $review->name = $request->input('name');
        $review->designation = $request->input('designation');
        if($request->hasFile('image')){

            $path = 'uploads/review/'.$review->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/review',$filename);
            $review->image = $filename;
        }
        $review->description = $request->input('description');
        $review->status = $request->input('status')==true ? '1' : '0';
        $review->update();
        return redirect('dashboard/review')->with('status','You have successfully updated data..');

    }
 
    public function destroy($id){
        $review = Review::find($id);

        $path = 'uploads/review/'.$review->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $review->delete();
        return redirect()->back()->with('status','You have successfully deleted data..');
    }

}
