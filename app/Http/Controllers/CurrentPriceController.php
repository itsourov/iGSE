<?php

namespace App\Http\Controllers;

use App\Models\CurrentPrice;
use Illuminate\Http\Request;

class CurrentPriceController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrentPrice  $currentPrice
     * @return \Illuminate\Http\Response
     */
    public function show(CurrentPrice $currentPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrentPrice  $currentPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrentPrice $currentPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CurrentPrice  $currentPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $formFields = request()->validate([
            'electricity_day' => ['required', 'numeric'],
            'electricity_night' => ['required', 'numeric'],
            'gas' => ['required', 'numeric'],
            'standing_charge' => ['required', 'numeric'],

        ]);

        CurrentPrice::latest()->first()
            ? CurrentPrice::latest()->first()->update($formFields)
            : CurrentPrice::create($formFields);
        return redirect(route('admin.setprice'))->with('message', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrentPrice  $currentPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrentPrice $currentPrice)
    {
        //
    }
}