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
        return view('role.index',compact('role'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('role.create');
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
          Role::create(request('role_name'))->save();
          Permission::create(request('create','read','update','delete'))->save();
          //Branch::create(request(['branch_name','location']));
          return redirect('/role');
        }
        public function edit(Role $role)
        {
               return view('role.edit',compact('role'));
        }
        public function update(Role $role)
        {
            $role->update(request(['shift_name','start_time','end_time']));
            $shift->save();
            return redirect('/role');
        }
        public function destroy(Role $role)
        {
          $shift->delete();
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
