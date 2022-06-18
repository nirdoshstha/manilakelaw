<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Cache\RedisTaggedCache;


class MenuController extends BackendBaseController

{

    protected $panel = 'Menu';
    protected $base_route = 'menu.';
    protected $view_path = 'backend.menu.';
    protected $img_path = 'uploads/menu/';

    public function __construct()
    {
        $this->model = new menu();
    }

    public function index(){
        $data = $this->model->get();
        return view($this->__loadDataToView($this->view_path.'index'),compact('data'));

    }

    public function create(){
        $parentid= $this->model->whereNull('parent_id')->orderBy('rank')->pluck('title','id');
        return view($this->__loadDataToView($this->view_path.'create'),compact('parentid'));
    }

    public function store(MenuRequest $request){

        try{
            if($request->hasFile('image_field')){
                $image_name =$this->uploadImage($request);
                $request->request->add(['image'=>$image_name]);
            }

            $request->request->add(['created_by'=> auth()->user()->id]);
            $this->model->create($request->all());
            session()->flash('success_message', $this->panel. ' Inserted Successfully');

        }
        catch(\Exception $e){
                 session()->flash('error_message', $this->panel. ' Inserted Fail');
        }
        return redirect()->route($this->base_route.'index');
    }

    public function view($id){
        $data = $this->model->findOrFail($id);
        // return view($this->view_path.'view',compact('data'));
        return view($this->__loadDataToView($this->view_path.'view'),compact('data'));
    }

    public function edit($id){

        $data = $this->model->findOrFail($id);

        return view($this->__loadDataToView($this->view_path.'edit'),compact('data'));
    }

    public function update(MenuRequest $request, $id){

        $data=$this->model->findOrFail($id);
        try{
            if($request->hasFile('image_field')){
                $this->deleteImage($data->image);
                $image_name =$this->uploadImage($request);
                $request->request->add(['image'=>$image_name]);
            }
            $request->request->add(['updated_by' => auth()->user()->id]);
            // $data['rows']   = $this->model->findOrFail($id);
            $data->update($request->all());
            session()->flash('success_message',$this->panel.' Update Successfully');
        }
        catch(\Exception $e){

            session()->flash('error_message','Something went wrong');
        }
        return redirect()->route($this->base_route.'index');
    }

    public function destroy($id){
        $data = $this->model::findOrFail($id);
        $this->deleteImage($data->image);

        // $path = 'uploads/about/'.$about->image;
        // if(File::exists($path)){
        //     File::delete($path);
        // }

        $data->delete();
        return redirect()->route($this->base_route.'index');
    }

}
