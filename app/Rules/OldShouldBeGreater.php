<?php

namespace App\Rules;

use App\Models\MeterReading;
use Illuminate\Contracts\Validation\Rule;

class OldShouldBeGreater implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        return ((MeterReading::where('user_id', auth()->id())->whereDate('date', '<', request('date') ?? date('Y-m-d'))->latest('date')->first()->$attribute ?? 0) <= $value) && ((MeterReading::where('user_id', auth()->id())->whereDate('date', '>', request('date'))->oldest('date')->first()->$attribute ?? 9999999999) >= $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Newer value should be greater than older value';
    }
}