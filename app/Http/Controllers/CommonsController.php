<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class CommonsController extends Controller
{
    public function Commons(){
        return view( 'commons' );
    }
}
?>