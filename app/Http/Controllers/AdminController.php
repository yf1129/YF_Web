<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->objUser = new Admin();
    }
    public function getUserList(){
        return $this->objUser->getInfo();
    }
}
