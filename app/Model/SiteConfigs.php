<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SiteConfigs extends Model
{
    protected $table = 'site_configs';
    protected $fillable = ['footer_desc','fb_link','g_plus','email','phone','website','twitter'];
}
