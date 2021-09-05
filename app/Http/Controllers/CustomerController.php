<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = Customer::paginate(3);
        return CustomerResource::collection($customer);
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
        $customer = new Customer();
        $customer->full_name = $request->full_name;
        $customer->address = $request->address;
        $customer->co_latitude = $request->co_latitude;
        $customer->co_longitude = $request->co_longitude;
        $customer->contact_no = $request->contact_no;

        if($customer->save())
        {
            return new CustomerResource($customer);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $customer = Customer::findorFail($id);
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $customer = Customer::findorFail($id);
        $customer->full_name = $request->full_name;
        $customer->address = $request->address;
        $customer->co_latitude = $request->co_latitude;
        $customer->co_longitude = $request->co_longitude;
        $customer->contact_no = $request->contact_no;
        if($customer->save())
        {
            return new CustomerResource($customer);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer = Customer::findorFail($id);
        if($customer->delete()){
            return new CustomerResource($customer);
        }
    }
}
