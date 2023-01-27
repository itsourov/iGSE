<x-app pageTitle="Profile">
    <div class="container mx-auto mt-10">
        @if (!$user->hasVerifiedEmail())
            @include('inc.email-confirmation-alert')
        @endif

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rounded shadow text-gray-500 dark:text-gray-400">

                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Name
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>

                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Address
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->address }}
                        </td>

                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Customer ID
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>

                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            property
                            type
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->property_type }}
                        </td>

                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Number of
                            bedrooms
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->bedroom_count }}
                        </td>

                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            EVC
                            code
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->evc->evc }}
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</x-app>
