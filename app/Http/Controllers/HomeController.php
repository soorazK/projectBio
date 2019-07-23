<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use app\User;
class HomeController extends Controller
{
    /**
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
      $role=Role::all();
        return view('home',compact('role'));
    }
    public function store(User $user){
      $user=auth()->user()->assignRole(request('role_select'));
    $permission=$user->getPermissionsViaRoles();
    auth()->user()->givePermissionTo($permission);
    $user->save();
      return view('welcome');
    }
}
