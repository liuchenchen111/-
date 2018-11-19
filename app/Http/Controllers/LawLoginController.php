<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class LawLoginController extends Controller
{
    public function LawLogin(){
        return view( 'law_login' );
    }
}
?>