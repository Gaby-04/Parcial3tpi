<?php

namespace App\Http\Controllers;

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
        $respuesta = json_decode(Customer::Usuarioscustomer(), true);
        return response()->json($respuesta);
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
    ////PARA CREAR UN NUEVO CUSTOMER///////
        $UserCustomer = json_decode(Customer::Usuarioscustomer() ,true);
        $newCustomer =array(
            "nombre"=>$request->nombre,
            "apellido"=>$request->apellido,
            "edad"=>$request->edad,
            "telefono"=>$request->telefono,
            "email"=>$request->email,
        
            
        );
        array_push($UserCustomer, $newCustomer);
        $data = json_encode($UserCustomer);
        file_put_contents('../database.json',$data);
        return redirect()->route("index.customers");
    }

    public function nuevo (){
        return view('Customernuevo');
    }



    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function showUser($id)
    {
        //
        $respuesta = json_decode(Customer::Usuarioscustomer(), true);
        return response()->json($respuesta[$id]);
    }



    public function ShowUserfriends($id)
    {
        //
        $respuesta = json_decode(Customer::Usuarioscustomer(), true);
        return response()->json($respuesta[$id]);
        return response()->json($respuesta['friends'][$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}









