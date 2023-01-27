<x-app pageTitle="Home">
    <div class="container mx-auto">
        <div
            class="text-gray-900 dark:text-gray-100 mx-auto w-full max-w-full format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

            <div class="flex p-4 mt-5 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    The navigation menu is just for testing version so you can see how many pages are up and working
                </div>
            </div>
            <div class="flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">For now, this feature is implimented:</span>
                    <ul class="mt-1.5 ml-4 list-disc list-inside">
                        <li>You can register as a new customer (with validation)</li>
                        <li>You can login (with validation)</li>
                        <li>You cn verify email and use "forgot password" system </li>
                        <li>Register and log in page are only for non logged-in users. logged in user cant access it
                        </li>
                        <li>Profile page is only for customer(logged-in). non logged-in user or admin or any other user
                            role can't
                            access that page</li>
                    </ul>
                </div>
            </div>

            <div class="flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">For now, this Admin feature is implimented:</span>
                    <span class="font-medium">Default Admin credentials: Username: <span class="text-red-500">
                            gse@shangrila.gov.un</span>
                        Password:<span class="text-red-500"> gse@energy</span></span>
                    <ul class="mt-1.5 ml-4 list-disc list-inside">
                        <li>You can change the current price for many things</li>
                        <li>Valid evc codes are: <span class="text-red-500">
                                XTX2GZAD</span>, <span class="text-red-500">
                                NDA7SY2V</span>, <span class="text-red-500">
                                RVA7DZ2D</span>, <span class="text-red-500">
                                DM8LEESR</span>. These are valid by default. but when a user uses one , that one becomes
                            unavailable</li>

                    </ul>
                </div>
            </div>

        </div>
    </div>

</x-app>
