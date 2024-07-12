<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\MyLocation;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use App\DataTables\MyLocationDataTable;

class MyLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MyLocationDataTable $dataTable)
    {
        return $dataTable->render('my_locations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MyLocation $myLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyLocation $myLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyLocation $myLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyLocation $myLocation)
    {
        //
    }
}
