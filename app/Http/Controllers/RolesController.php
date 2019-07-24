<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role=Role::all();
        $permission=Permission::all();
        return view('role.index',compact('role'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=Role::all();;
        return view('role.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Role $role)
    {
        //

          //$shift = new Shift();
        $role->name=request('name');
        //$permission->name=(request('permission_create'));
        if(request('create')){
          $role->givePermissionTo('create');
        }
        if(request('read')){
          $role->givePermissionTo('read');
        }
        if(request('update')){
          $role->givePermissionTo('update');
        }
        if(request('delete')){
          $role->givePermissionTo('delete');
        }
        $role->save();
        //$permission->save();
        return redirect('/role');
          }
        public function edit(Role $role)
        {
               return view('role.edit',compact('role'));
        }
        public function update(Role $role)
        {
            $role->update(request(['name']));
            if(request('create')){
              $role->givePermissionTo('create');
            }
            if(!request('create')){
            $role->revokePermissionTo('create');
          }
            if(request('read')){
              $role->givePermissionTo('read');
            }
            if(!request('read')){
            $role->revokePermissionTo('read');
          }
            if(request('update')){
              $role->givePermissionTo('update');
            }
            if(!request('update')){
            $role->revokePermissionTo('update');
          }
            if(request('delete')){
              $role->givePermissionTo('delete');
            }
            if(!request('delete')){
            $role->revokePermissionTo('delete');
          }
            $role->save();
            return redirect('/role');
        }
        public function destroy(Role $role)
        {
          $role->delete();
          $permission->delete();
          return redirect('/role');
        }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  //  public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  //  public function update(Request $request, $id)
    {
        //
    }

    // * Remove the specified resource from storage.
     /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response*/
