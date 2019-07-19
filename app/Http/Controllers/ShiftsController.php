<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Shift;
class ShiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shifts=Shift::all();
        return view('shift.index',compact('shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Shift $shift)
    {
        //
       request()->validate([
              'shift_name'=>'required',
              'start_time'=>'required',
              'end_time'=>'required'
          ]);
          //$shift = new Shift();
          $shift->shift_name=request('shift_name');
          $shift->start_time=request('start_time');
          $shift->end_time=request('end_time');
     $shift->save();
          //Branch::create(request(['branch_name','location']));
          return redirect('/shift');
        }
        public function edit(Shift $shift)
        {
               return view('shift.edit',compact('shift'));
        }
        public function update(Shift $shift)
        {
            $shift->update(request(['shift_name','start_time','end_time']));
            $shift->save();
            return redirect('/shift');
        }
        public function destroy(Shift $shift)
        {
          $shift->delete();
          return redirect('/shift');
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
