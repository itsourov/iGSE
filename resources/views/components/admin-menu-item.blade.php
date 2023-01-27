@if ($hasChild)
    <li class="relative px-6 py-3">
        @if (request()->routeIs($commonRoute))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
        @endif

        <button
            class="{{ request()->routeIs($commonRoute) ? 'text-gray-800  dark:text-gray-100 ' : '' }}inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            @click="togglePagesMenu" aria-haspopup="true">



            <span class="inline-flex items-center">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                    </path>
                </svg>
                <span class="ml-4">{{ $title }}</span>
            </span>
            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <ul x-show="{{ request()->routeIs($commonRoute) ? '!' : '' }}isPagesMenuOpen" x-transition style="display: none"
            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
            aria-label="submenu">

            @foreach ($subItems as $subItem)
                <li
                    class="{{ request()->routeIs($subItem['routeName']) ? 'text-gray-800  dark:text-gray-100 ' : '' }}px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="w-full" href="{{ route($subItem['routeName']) }}">{{ $subItem['title'] }}</a>
                </li>
            @endforeach


        </ul>

    </li>
@else
    <li class="relative px-6 py-3">
        @if (request()->routeIs($routeName))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
        @endif
        <a class="{{ request()->routeIs($routeName) ? 'text-gray-800  dark:text-gray-100 ' : '' }}inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 "
            href="{{ route($routeName) }}">
            {{ $slot }}
            <span class="ml-4">{{ $title }}</span>
        </a>
    </li>
@endif
