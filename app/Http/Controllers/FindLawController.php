<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class FindLawController extends Controller
{
    public function FindLaw(){
        $db = DB::table('users')->where(['type'=>1])->orderByDesc('praise')->limit(5)->get();
        $data = json_decode(json_encode($db),true);
        return view( 'find_law' ,['data'=>$data]);
    }
}
?>