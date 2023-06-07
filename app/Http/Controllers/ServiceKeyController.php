<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceKeyRequest;
use App\Http\Requests\UpdateServiceKeyRequest;
use App\Models\ServiceKey;

class ServiceKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreServiceKeyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceKeyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceKey  $serviceKey
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceKey $serviceKey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceKey  $serviceKey
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceKey $serviceKey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceKeyRequest  $request
     * @param  \App\Models\ServiceKey  $serviceKey
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceKeyRequest $request, ServiceKey $serviceKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceKey  $serviceKey
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceKey $serviceKey)
    {
        //
    }
}
