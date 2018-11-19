<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class MyController extends Controller
{
    public function My(){
        return view( 'my' );
    }
}
?>