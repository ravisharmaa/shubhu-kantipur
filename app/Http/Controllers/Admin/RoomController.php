<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 01:08 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminBaseController;


class RoomController extends AdminBaseController
{
    protected $base_route = 'admin.room';
    protected $view_path  = 'backend.room';
    protected $title      = 'Rooms Management';

    public function index()
    {
        return view(parent::loadDefaultVars($this->view_path.'.index'));
    }

    public function create()
    {

    }


}