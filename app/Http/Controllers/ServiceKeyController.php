<?php

namespace App\Http\Controllers;

use App\Http\Payloads\ServiceKeyBody;
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


    public static function generateKey(ServiceKeyBody $keyBody): void
    {
        //
        $serviceKey  = ServiceKey::create([
            "user_id" => $keyBody->getUserId(),
            "service_id" => $keyBody->getServiceId(),
            "key" => $keyBody->getKey()
        ]);

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
