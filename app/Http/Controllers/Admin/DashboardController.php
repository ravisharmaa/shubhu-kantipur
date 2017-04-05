<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 01:08 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminBaseController;


class DashboardController extends AdminBaseController
{
    protected $base_route = 'admin.dashboard';
    protected $view_path  = 'backend.dashboard.index';
    protected $title      = 'Melungtse | Dashboard';

    public function __invoke()
    {
        return view (parent::loadDefaultVars($this->view_path));
    }


}