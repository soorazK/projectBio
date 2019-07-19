<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function index()
  {
      //
      $apis=Api::all();
      return view('api.index',compact('apis'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('api.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Api $api)
  {
      //
    /*  $request->validate([
            'shift_name'=>'required',
            'start_time'=>'required',
            'end_time'=>'required'
        ]);*/
        $api = new Api();
        $api->API_key=request('api_key');
        $shift->save();
        //Branc h::create(request(['branch_name','location']));
        return redirect('/api');
      }
      public function edit(Api $api)
      {
             return view('api.edit',compact('api'));
      }
      public function update(Api $api)
      {
          $shift->update(request(['API_key']));
          $shift->save();
          return redirect('/api');
      }
      public function destroy(Api $api)
      {
        $shift->delete();
        return redirect('/api');
      }
}
