<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class CommonsController extends Controller
{
    //法律常识
    public function Commons(){
        return view( 'commons' );
    }

    //法律常识详情页
    public function CommonsDetail(){
        return view( 'commons_detail' );
    }
}
?>