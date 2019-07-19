<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch= Branch::all();
        return view('branch.index',compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $branch = new Branch();
      $branch->branch_name=request('branch_name');
     $branch->location=request('location');
 $branch->save();
      //Branc h::create(request(['branch_name','location']));
      return redirect('/branch');
    }

    /**
     *
     */

    public function show(Branch $branch)
      {
        return view('branch.show',compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
      return view('branch.edit',compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Branch $branch)
    {
        $branch->update(request(['branch_name','location']));
        $branch->save();
        return redirect('/branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect('/branch');
    }
}
