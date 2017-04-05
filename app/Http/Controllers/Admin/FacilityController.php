<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 01:08 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Model\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class FacilityController extends AdminBaseController
{
    protected $base_route = 'admin.facility';
    protected $view_path  = 'backend.facility';
    protected $scope      = "Manage Facilities";
    protected $title      = 'Facility Management';

    public function index()
    {
        $facility = Facility::select('id','facility_title','status')->get();
        return view(parent::loadDefaultVars($this->view_path.'.index'), compact('facility'));
    }

    public function create()
    {
        return view (parent::loadDefaultVars($this->view_path.'.create'));
    }

    public function store(Request $request)
    {
        Facility::create([
                'facility_title'   =>  $request->get('facility_title'),
                'rank'             =>  $request->get('rank'),
                'status'           =>  $request->get('status'),
            ]);
        return redirect()->route($this->base_route.'.index');

    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view ($this->loadDefaultVars($this->view_path.'.edit'), compact('facility'));
    }

    public function changeStatus( Request $request)
    {
        $id      = $request->get('id');
        $facility = Facility::findorFail($id);

        if($facility->status ==1 )
            $facility->status = 0;
        else
            $facility->status = 1;
        $facility->save();

        return response()->json(json_encode([
            'success'=>true,
            'status'=>$facility->status,
        ]));
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);
        $facility->facility_title       =   $request->get('facility_title');
        $facility->status               =   $request->get('status');
        $facility->rank                 =   $request->get('rank');
        $facility->save();

    }
    public function delete($id)
    {
        $facility = Facility::findOrFail($id);
        $facility->delete();
        return redirect()->route($this->base_route.'.index');
    }



}