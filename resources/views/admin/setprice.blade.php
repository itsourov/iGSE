<x-admin-dash pageTitle="Set price">



    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Set price
    </h2>

    <section class="my-10">
        <div class="py-8 px-4 mx-auto max-w-3xl lg:py-16 bg-white dark:bg-gray-800 shadow rounded-lg">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update price</h2>
            <form action="{{ route('admin.setprice') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="electricity_day"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Electricity (Day) per
                            kWh</label>
                        <input type="number" step="any" name="electricity_day"
                            value="{{ old('electricity_day') ?? ($prices->electricity_day ?? 0) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="">

                        @error('electricity_day')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="w-full">
                        <label for="electricity_night"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Electricity (Night) per
                            kWh</label>
                        <input type="number" step="any" name="electricity_night"
                            value="{{ old('electricity_night') ?? ($prices->electricity_night ?? 0) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="">

                        @error('electricity_night')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="w-full">
                        <label for="gas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gas
                            per kWh</label>
                        <input type="number" step="any" name="gas"
                            value="{{ old('gas') ?? ($prices->gas ?? 0) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="">

                        @error('gas')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="standing_charge"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Standing charge per
                            day</label>
                        <input type="number" step="any" name="standing_charge"
                            value="{{ old('standing_charge') ?? ($prices->standing_charge ?? 0) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="">

                        @error('standing_charge')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>









                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Update
                </button>
            </form>
        </div>
    </section>



</x-admin-dash>
