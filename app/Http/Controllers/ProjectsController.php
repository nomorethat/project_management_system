<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProjectsController extends Controller
{
    public function getAllUsers(){
        $users = App\Project::all();
        return view('projects', compact('users'));
    }

   public function showUserInfo($id){
        $user = App\Project::find($id);
        return view('user_info', compact('user'));
    }
}
