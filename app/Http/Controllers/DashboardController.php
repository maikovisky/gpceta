<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function index() 
	{	
		$data['tasks'] = [
        	[
            	'id' => 1,
            	'name' => 'VANT',
                'progress' => '87',
                'color' => 'danger',
                'start_at' => '',
                'finish_preview_at' => ''
            ]
		];
		return view('dashboard')->with($data);
	}
}
