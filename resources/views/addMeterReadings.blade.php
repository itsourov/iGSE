<x-app pageTitle="Add meter reading">
    <div class="container mx-auto px-2">
        <div
            class=" p-6 mt-10 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
            <form class="space-y-4 md:space-y-6" action="{{ route('meaterReadings.add') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div>
                        <label for="date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date" id="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('date') }}">
                        @error('date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <label for="electricity_day"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Electricity Reading in kWh (Day)</label>
                        <input type="number" step="any" name="electricity_day" id="electricity_day"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="x.xx" value="{{ old('electricity_day') }}">
                        @error('electricity_day')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="electricity_night"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Electricity Reading in kWh (Night)</label>
                        <input type="number" step="any" name="electricity_night" id="electricity_night"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="x.xx" value="{{ old('electricity_night') }}">
                        @error('electricity_night')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="gas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Gas (Reading) in kWh</label>
                        <input type="number" step="any" name="gas" id="gas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="x.xx" value="{{ old('gas') }}">
                        @error('gas')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>












                </div>

                <button type="submit"
                    class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>

            </form>
        </div>

        <div class="mt-10">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Electricity Reading in kWh (Day)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Electricity Reading in kWh (Night)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gas (Reading) in kWh
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bill
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($readings as $reading)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
                                id="reading_{{ $reading->id }}">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reading->date }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $reading->electricity_day }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $reading->electricity_night }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $reading->gas }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($loop->last)
                                        No bill
                                    @else
                                        Bill here
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app>
