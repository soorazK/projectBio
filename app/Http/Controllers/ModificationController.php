<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificationController extends Controller
{
  public function index()
  {
      //
      $modification=Modification::all();
      return view('modification.index',compact('modification'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('modification.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Modification $modification)
  {
      //
    /*  $request->validate([
            'shift_name'=>'required',
            'start_time'=>'required',
            'end_time'=>'required'
        ]);*/
        $modification = new Modification();
        $modification->table_name=request('table_name');
   $modification->save();
        //Branc h::create(request(['branch_name','location']));
        return redirect('/modification');
      }
      public function edit(Modification $modification)
      {
             return view('modification.edit',compact('modification'));
      }
      public function update(Modification $modification)
      {
          $modification->update(request(['table_name']));
          $modification->save();
          return redirect('/modification');
      }
      public function destroy(Modification $modification)
      {
        $modification->delete();
        return redirect('/modification');
      }
}
