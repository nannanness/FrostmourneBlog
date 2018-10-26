<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/26
 * Time: 15:22
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UsersController {

    public function create(){

        return view("users.create");
    }

    public function show(User $user) {
        $url = $this->gravatar("140",$user);
        return view('users.show', compact('user',"url"));
    }

    public function gravatar($size = '140',$us) {
        $email = DB::table('users')->where("id","=","$us")->value('email');
        $hash = md5(strtolower(trim($email)));
        return "http://s.gravatar.com/avatar/$hash?s=$size";
    }
}