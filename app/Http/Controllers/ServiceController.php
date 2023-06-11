<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        //
        return ServiceResource::collection(Service::all()->paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param StoreServiceRequest $request
     * @return ServiceResource
     */
    public function store(StoreServiceRequest $request): ServiceResource
    {
        //
        $service = Service::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "enabled" => $request->input('enabled'),
            "dev_url" => $request->input('devUrl'),
            "prod_url" => $request->input('prodUrl'),
            "dev_port" => $request->input('devPort'),
            "prod_port" => $request->input('prodPort')
        ]);

        return new ServiceResource($service);
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @return ServiceResource
     */
    public function show(Service $service): ServiceResource
    {
        //
        return new ServiceResource($service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateServiceRequest $request
     * @param Service $service
     * @return ServiceResource
     */
    public function update(UpdateServiceRequest $request, Service $service): ServiceResource
    {
        //
        $service->update(
            [
                "name" => $request->input('name'),
                "description" => $request->input('description'),
                "enabled" => $request->input('enabled'),
                "dev_url" => $request->input('devUrl'),
                "prod_url" => $request->input('prodUrl'),
                "dev_port" => $request->input('devPort'),
                "prod_port" => $request->input('prodPort'),
            ]
        );
        return new ServiceResource($service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return Response
     */
    public function destroy(Service $service): Response
    {
        //
        $service->delete();
        return response("service deleted", 201);
    }
}
