<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

 class Permissions extends BaseController{
public function error_page(){
    return view("admin/pages/verify/permissions-error");
}

 }