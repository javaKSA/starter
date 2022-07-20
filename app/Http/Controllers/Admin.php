<?php

namespace App\Http\Controllers;

/*
 *  * هذا ملف الكنترولير وفيه يتم وضع جميع اللوجيك
 */

class Admin extends Controller
{
    public function __construct()
    {
        //$this -> middleware('auth')->except('delete');
    }

    public function index()
    {

        $data = [];
        return view('welcome', compact('data'));

    }

    public function assign()
    {
        return 'Assign student';
    }

    public function delete()
    {
        return 'delete student ';
    }

}
