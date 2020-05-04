<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(2);
        
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'paternal_name'=>'required',
            'maternal_name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'credit_card_number'=>'required',
        ]);
        $customer = new Customer([
            'name' => $request->get('name'),
            'paternal_name' => $request->get('paternal_name'),
            'maternal_name' => $request->get('maternal_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'credit_card_number' => $request->get('credit_card_number')
        ]);
        $customer->save();

        return redirect('/customers')->with('success', 'Cliente guardado!');
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
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));
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
        $request->validate([
            'name'=>'required',
            'paternal_name'=>'required',
            'maternal_name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'credit_card_number'=>'required',
        ]);
        $customer = Customer::find($id);
        $customer->name =  $request->get('name');
        $customer->paternal_name = $request->get('paternal_name');
        $customer->maternal_name = $request->get('maternal_name');
        $customer->email = $request->get('email');
        $customer->phone_number = $request->get('phone_number');
        $customer->credit_card_number = $request->get('credit_card_number');
        $customer->save();

        return redirect('/customers')->with('success', 'Cliente actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer deleted!');
    }
}
