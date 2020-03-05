<?php

namespace App\Http\Controllers;

use App\Partner;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PartnerController extends Controller
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
        return view('partner.liste',[
            'partners' => Partner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
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

            'title' => 'bail|min:4|required|max:100',
            'description' => 'required',
            'img' => 'required|max:2000|'

        ]);

        $partner = new Partner();

        $partner->title = $request->input('title');
        $partner->description = $request->input('description');         
        
        if($request->hasFile('img')){
            $img = $request->file('img');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(300, 300)->save( public_path('/images/imagess/' . $filename ) );
            $parter->img = $filename;
        }


        $partner->save();

        return redirect('partners');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('partner.edit',['partner'=> $partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $partner = Partner::findOrfail($id);

        $partner->title = $request->input('title');
        $partner->Description = $request->input('description');
        


        $partner->save();

        return redirect('partners');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $partner = Partner::find($id);

        $partner->delete();

        return redirect('partners');


    }
}
