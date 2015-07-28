<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\User;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() 
    {	
        $projects = Project::all();
        $users = User::all();
        return view('dashboard',  compact(array('projects', 'users')));
    }
}
