<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/26
 * Time: 15:22
 */

namespace App\Http\Controllers;


class UsersController {

    public function create(){

        return view("users.create");
    }

}