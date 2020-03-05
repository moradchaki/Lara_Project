<?php

namespace App\Http\Controllers;

use App\Delivery;
use Auth;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('delivery.liste',[
            'deliveries' => Delivery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery.create');
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

            'titre' => 'bail|min:4|required|max:100',
            'slug' => 'required',

        ]);

        $delivery = new Delivery();

        $delivery->titre = $request->input('titre');
        $delivery->slug = $request->input('slug');


        $delivery->save();

        return redirect('deliveries');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::find($id);

        return view('delivery.edit',['delivery'=> $delivery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $delivery = Delivery::findOrfail($id);

        $delivery->titre = $request->input('titre');
        $delivery->slug = $request->input('slug');


        $delivery->save();

        return redirect('deliveries');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $delivery = Delivery::find($id);

        $delivery->delete();

        return redirect('deliveries');


    }
}
