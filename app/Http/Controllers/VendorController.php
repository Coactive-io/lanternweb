<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

use App\Http\Requests;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $this->validate($request, [
            'business_name' => 'required|max:255',
            'business_address' => 'required|max:1000',
            'business_desc' => 'required|max:500',
            'contact_name' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|max:255|email',

        ]);

        $vendor = new Vendor();
        $bName = $request->input('business_name');
        $bAddress = $request->input('business_address');
        $bDesc = $request->input('business_desc');
        $cName = $request->input('contact_name');
        $cPhone = $request->input('contact_phone');
        $cEmail = $request->input('contact_email');


        $vendor->business_name = $bName;
        $vendor->business_address = $bAddress;
        $vendor->business_desc = $bDesc;
        $vendor->contact_name = $cName;
        $vendor->contact_phone = $cPhone;
        $vendor->contact_email = $cEmail;

        $vendor->save();

        return redirect('/')->with('status', 'Application Submitted');
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
    }
}
