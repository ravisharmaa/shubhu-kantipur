<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 01:08 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Model\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class GalleryController extends AdminBaseController
{
    protected $base_route = 'admin.gallery';
    protected $view_path  = 'backend.gallery';
    protected $scope      = "Manage Your Gallery";
    protected $title      = 'Gallery Management';

    public function index()
    {
        $gallery = Gallery::select('id','name','image','status')->get();
        return view(parent::loadDefaultVars($this->view_path.'.index'), compact('gallery'));
    }

    public function create()
    {
        return view (parent::loadDefaultVars($this->view_path.'.create'));
    }

    public function store(Request $request)
    {
       $imageName = null;
       if($request->hasFile('image')){
           $image       =   $request->file('image');
           $imageName   =   $image->getClientOriginalName();
           $imageName   =   pathinfo($imageName, PATHINFO_FILENAME);
           $imageName   =   $imageName.'.'.$image->getClientOriginalExtension();
           $upload      =   $image->move(public_path().'/uploads/gallery/', $imageFile);
       }
            Gallery::create([
                'name'      =>  $request->get('name'),
                'image'     =>  $imageName,
                'status'    =>  $request->get('status'),
                'order'     =>  $request->get('order'),
            ]);

       return redirect()->route($this->base_route.'.index');

    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view ($this->loadDefaultVars($this->view_path.'.edit'), compact('gallery'));
    }

    public function changeStatus( Request $request)
    {
        $id      = $request->get('id');
        $gallery = Gallery::findorFail($id);
        if($gallery->status ==1 )
            $gallery->status = 0;
        else
            $gallery->status = 1;
        $gallery->save();
        return response()->json(json_encode([
            'success'=>true,
            'status'=>$gallery->status,
        ]));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->name      =   $request->get('name');
        $gallery->status    =   $request->get('status');
        $gallery->order     =   $request->get('order');
        $gallery->save();

    }
    public function delete($id)
    {
        $data = Gallery::findOrFail($id);
        File::delete(public_path().'/uploads/gallery/'. $data->image);
        $data->delete();
        return redirect()->route($this->base_route.'.index');
    }



}