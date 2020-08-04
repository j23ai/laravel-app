<?php

namespace App\Http\Controllers;

use App\restorent;
use Illuminate\Http\Request;
use DB;
class RestorentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::select('select * from restorents');
        return view('welcome',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\restorent  $restorent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = DB::table('restorents')->where('id',$id)->first();

        return view('details',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\restorent  $restorent
     * @return \Illuminate\Http\Response
     */
    public function edit(restorent $restorent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\restorent  $restorent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restorent $restorent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\restorent  $restorent
     * @return \Illuminate\Http\Response
     */
    public function destroy(restorent $restorent)
    {
        //
    }
}
