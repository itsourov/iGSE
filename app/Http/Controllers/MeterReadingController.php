<?php

namespace App\Http\Controllers;

use App\Models\CurrentPrice;
use App\Models\MeterReading;
use App\Rules\OldShouldBeGreater;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MeterReadingController extends Controller
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
        return view('addMeterReadings', [
            'readings' => MeterReading::where('user_id', auth()->id())->latest('date')->get(),
            'rate' => CurrentPrice::latest()->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(MeterReading::where('user_id', auth()->id())->latest()->first()->electricity_day);
        $formFields = request()->validate([

            'date' => ['required', 'date', Rule::unique('meter_readings', 'date')->where('user_id', auth()->id())],


            'electricity_night' => ['required', 'numeric', new OldShouldBeGreater()],
            'gas' => ['required', 'numeric', new OldShouldBeGreater()],

            'electricity_day' => ['required', 'numeric', new OldShouldBeGreater()],

        ]);
        $formFields['user_id'] = auth()->id();

        $newReading =  MeterReading::create($formFields);

        return redirect(route('meaterReadings.add') . '/#reading_' . $newReading->id)->with('message', 'Reading submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeterReading  $meterReading
     * @return \Illuminate\Http\Response
     */
    public function show(MeterReading $meterReading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeterReading  $meterReading
     * @return \Illuminate\Http\Response
     */
    public function edit(MeterReading $meterReading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MeterReading  $meterReading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeterReading $meterReading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeterReading  $meterReading
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeterReading $meterReading)
    {
        //
    }
}