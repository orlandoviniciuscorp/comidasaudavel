<?php
/**
 * Created by PhpStorm.
 * User: Orlando
 * Date: 16/08/2019
 * Time: 23:01
 */

namespace App\Http\Controllers;


class Home extends Controller
{

    private $repository;


    public function index()
    {
        return view('home.index');
    }
}