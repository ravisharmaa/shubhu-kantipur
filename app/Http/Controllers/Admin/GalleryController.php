<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 01:08 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminBaseController;


class GalleryController extends AdminBaseController
{
    protected $base_route = 'admin.gallery';
    protected $view_path  = 'backend.gallery';
    protected $scope      = "Manage Your Gallery";

    public function index()
    {
        return view(parent::loadDefaultVars($this->view_path.'.index'));
    }

    public function create()
    {
        return view (parent::loadDefaultVars($this->view_path.'.create'));
    }

    public function save()
    {

    }



}