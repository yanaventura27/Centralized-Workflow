<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index()
    {
    	$users = [
			'0'=> [
				'first_name' => 'Gillian',
				'last_name' => 'Ventura',
				'department' => 'Admin'
				],
			'1'=> [
				'first_name' => 'Yanny',
				'last_name' => 'Vee',
				'department' => 'Development'
				]
	];
	return view('admin.users.index',compact('users'));
    }
    public function create(){
    	return view('admin.users.create');
    }
    public function store(Request $request){
    	return $request->all();

    }
}

