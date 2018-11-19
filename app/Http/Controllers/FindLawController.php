<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class FindLawController extends Controller
{
    public function FindLaw(){
        return view( 'find_law' );
    }
}
?>