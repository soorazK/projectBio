<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
  public function index()
  {
      //
      $devices=Device::all();
      return view('device.index',compact('devices'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('device.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Device $device)
  {
      //
    /*  $request->validate([
            'shift_name'=>'required',
            'start_time'=>'required',
            'end_time'=>'required'
        ]);*/
        $device = new Device();
        $device->Device_id=request('device_id');
        $device->status=request('status');
   $device->save();
        //Branc h::create(request(['branch_name','location']));
        return redirect('/device');
      }
      public function edit(Device $device)
      {
             return view('device.edit',compact('device'));
      }
      public function update(Device $device)
      {
          $device->update(request(['device_id']));
          $device->save();
          return redirect('/device');
      }
      public function destroy(Device $device)
      {
        $device->delete();
        return redirect('/device');
      }
}
