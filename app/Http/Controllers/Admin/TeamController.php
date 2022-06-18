<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ourteam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function index(){
        $team=Ourteam::all();
        return view('backend.team.index')->with('team',$team);
    }

    public function create(){
        return view('backend.team.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'          =>'required|max:191',
            'image'         =>'required|image|mimes:png,jpg,jpeg|max:500',
            'designation'   =>'required|max:191',
        ]);
        $team = new Ourteam();
        $team->name = $request->input('name');
        $team->designation = $request->input('designation');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/team',$filename);
            $team->image = $filename;
        }
        $team->facebook = $request->input('facebook');
        $team->twitter = $request->input('twitter');
        $team->youtube = $request->input('youtube');
        $team->instagram = $request->input('instagram');

        $team->save();
        return redirect('dashboard/team')->with('status','You have successfully saved data..');

    }

    public function edit($id){
        $team = Ourteam::find($id);
        return view('backend.team.edit')->with('team',$team);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'          =>'required|max:191',
            'designation'   =>'required|max:191',
        ]);
        $team = Ourteam::find($id);
        $team->name = $request->input('name');
        $team->designation = $request->input('designation');
        if($request->hasFile('image')){
            $path = 'uploads/team/'.$team->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('uploads/team',$filename);
            $team->image = $filename;
        }
        $team->facebook = $request->input('facebook');
        $team->twitter = $request->input('twitter');
        $team->youtube = $request->input('youtube');
        $team->instagram = $request->input('instagram');
        $team->status = $request->input('status')==true?'1':'0';
        $team->update();
        return redirect('dashboard/team')->with('status','You have successfully updated data..');

    }

    public function destroy($id){

        $team = Ourteam::find($id);
        $path = 'uploads/team/'.$team->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $team->delete();
        return redirect()->back()->with('status','You have successfully deleted data..');
    }
}
