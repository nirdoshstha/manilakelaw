<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ourservices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index(){
        $service = Ourservices::where('status','0')->get();
        return view('backend.services.index')->with('service',$service);
    }

    public function create(){
        return view('backend.services.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'         =>'required|max:191',
            'icon'          =>'required|max:191',
            'description'   =>'required|max:600',

        ]);
        $service = new Ourservices();
        $service->title = $request->input('title');
        $service->subtitle = $request->input('subtitle');
        $service->icon = $request->input('icon');
        $service->description = $request->input('description');
        $service->slug = $request->input('slug');
        $service->order = $request->input('order');
        $service->save();
        return redirect('dashboard/our-services')->with('status','You have successfully stored data..');
    }

    public function edit($id){
        $services = Ourservices::find($id);
        return view('backend.services.edit')->with('services',$services);
    }

    public function update(Request $request, $id){
        $services = Ourservices::find($id);
        $services->title = $request->input('title');
        $services->subtitle = $request->input('subtitle');
        $services->icon = $request->input('icon');
        $services->description = $request->input('description');
        $services->slug = $request->input('slug');
        $services->order = $request->input('order');
        $services->update();
        return redirect('/dashboard/our-services')->with('status','You have successfully updated data..');
    }


    public function destroy($id){
        $services = Ourservices::find($id);
        $services->delete();
        return redirect()->back()->with('status','You have successfully deleted data..');

    }
}
