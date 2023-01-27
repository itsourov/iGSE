@php
    $items = [
        [
            'name' => 'Home',
            'routeName' => 'home',
        ],
        [
            'name' => 'Register',
            'routeName' => 'register',
        ],
        [
            'name' => 'Login',
            'routeName' => 'login',
        ],
        [
            'name' => 'Profile',
            'routeName' => 'users.profile',
        ],
        [
            'name' => 'admin',
            'routeName' => 'admin.dashboard',
        ],
        // [
        //     'name' => 'projects',
        //     'routeName' => 'other',
        // ],
    ];
@endphp

<nav class="shadow  bg-white dark:bg-gray-800">
    <div class=" mx-auto container px-2 ">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" x-on:click="toggleMobileMenu()"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-800 dark:bg-gray-700 dark:text-gray-400 bg-gray-100   hover:text-gray-900 hover:dark:text-white focus:outline-none focus:ring-inset "
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg x-show="!mobileMenuExpanded" class=" h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg x-cloak x-show="mobileMenuExpanded" class=" h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{ route('home') }}">
                        <img class="block h-8 w-auto lg:hidden" src="/logo.svg" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block" src="/logo.svg" alt="Your Company">
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->


                        @foreach ($items as $item)
                            <a href="{{ route($item['routeName']) }}"
                                class="{{ request()->routeIs($item['routeName']) ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 hover:dark:bg-gray-700' }} px-3 py-2 rounded-md text-sm font-medium">
                                {{ $item['name'] }}</a>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- <button type="button" x-on:click="toggleCartPreview()"
                    class="rounded-lg flex items-center p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 hover:dark:text-white focus:outline-none  focus:bg-gray-100 focus:dark:bg-gray-700">
                    <span class="sr-only">Open Cart Preview</span>
                    <!-- Heroicon name: outline/bell -->
                    {{-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg> --}}

                {{-- <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                        x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                        </path>
                    </svg>
                    0
                </button>  --}}

                <button
                    class="rounded-lg flex items-center p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 hover:dark:text-white focus:outline-none  focus:bg-gray-100 focus:dark:bg-gray-700"
                    x-on:click="toggleTheme" aria-label="Toggle color mode">
                    <template x-if="!dark">

                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                            </path>
                        </svg>
                    </template>
                    <template x-if="dark">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template>
                </button>




                <!-- Profile dropdown -->
                <div class="relative ">
                    <div>
                        @auth


                            <button type="button" x-on:click="toggleProfileDropdown"
                                class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        @else
                            <button type="button" x-on:click="toggleProfileDropdown"
                                class="rounded-lg flex items-center p-1 text-gray-600 dark:text-gray-400 hover:text-gray-900 hover:dark:text-white focus:outline-none  focus:bg-gray-100 focus:dark:bg-gray-700">
                                <span class="sr-only">View notifications</span>



                                <svg fill="none" class="h-8 w-8 flex-shrink-0 " stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                    </path>
                                </svg>

                            </button>
                        @endauth
                    </div>

                    <div x-show="profileDropdownShow" x-cloak x-transition @click.away="profileDropdownShow = false"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white dark:bg-gray-700 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        @auth


                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-100 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white "
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-100 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white "
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <form action="{{ route('user.logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full text-start px-4 py-2 text-sm text-gray-700 dark:text-gray-100 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white "
                                    role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-100 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white "
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Login</a>
                            <a href="{{ route('register') }}"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-100 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white "
                                role="menuitem" tabindex="-1" id="user-menu-item-2">Sign Up</a>
                        @endauth
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-cloak x-show="mobileMenuExpanded" x-transition class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 bg-gray-100 dark:bg-gray-800">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

            @foreach ($items as $item)
                <a href="{{ route($item['routeName']) }}"
                    class="{{ request()->routeIs($item['routeName']) ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 hover:dark:bg-gray-700' }} block px-3 py-2 rounded-md text-base font-medium">{{ $item['name'] }}</a>
            @endforeach

        </div>
    </div>

</nav>
