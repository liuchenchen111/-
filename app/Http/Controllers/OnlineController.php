<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class OnlineController extends Controller
{
    public function student(){
        return view( 'online' );
    }
}
?>