<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/24
 * Time: 9:18
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StaticPagesController extends Controller {

    public function home() {
        return view("static_pages.home");
    }

    public function help() {
        return view("static_pages.help");
    }

    public function about() {
        return view("static_pages.about");
    }
}