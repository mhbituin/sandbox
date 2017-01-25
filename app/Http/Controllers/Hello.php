<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function index() {

    	$data = [
    		'x' => 1,
    		'y' => 2
    	];

    	echo route('hello.index');
    	echo '<br>';

    	return view('hello.hello', $data);

    }

    public function param( $x ) {
    	return $x;
    }

    public function more() {
    	return 'More';
    }

    public function moreAndMore() {
    	return 'More and More';
    }

    public function login() {
    	return view('qrvox.login');
    }
}
