<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> --}}
        <meta name="theme-color" content="#000000" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <!-- Custom font cairo -->
        <link rel="stylesheet" href="{{ asset('css/font-cairo.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
        <link rel="stylesheet" href="{{ asset('theme/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"/>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased text-blueGray-700">
        <noscript>You need to enable JavaScript to run this app.</noscript>

        <div id="root">
            <x-backend.sidebar/>

            <div class="relative md:ml-64 bg-blueGray-50">
                <x-backend.navbar/>
                <!-- Page Content -->
                <main>
                    <!-- Header -->
                    <div class="relative pt-12 pb-32 bg-pink-800 md:pt-32">
                        <div class="w-full px-4 mx-auto md:px-10">
                            <div>
                                <!-- Card stats -->
                                <div class="flex flex-wrap">
                                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                                            <div class="flex-auto p-4">
                                                <div class="flex flex-wrap">
                                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                                        <h5
                                                        class="text-xs font-bold uppercase text-blueGray-400"
                                                        >
                                                        Traffic
                                                        </h5>
                                                        <span class="text-xl font-semibold text-blueGray-700">
                                                        350,897
                                                        </span>
                                                    </div>
                                                    <div class="relative flex-initial w-auto pl-4">
                                                        <div
                                                        class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg"
                                                        >
                                                        <i class="far fa-chart-bar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-sm text-blueGray-400">
                                                <span class="mr-2 text-emerald-500">
                                                    <i class="fas fa-arrow-up"></i> 3.48%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    Since last month
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                                            <div class="flex-auto p-4">
                                                <div class="flex flex-wrap">
                                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                                        <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                                        New users
                                                        </h5>
                                                        <span class="text-xl font-semibold text-blueGray-700">
                                                        2,356
                                                        </span>
                                                    </div>
                                                    <div class="relative flex-initial w-auto pl-4">
                                                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-orange-500 rounded-full shadow-lg">
                                                        <i class="fas fa-chart-pie"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-sm text-blueGray-400">
                                                <span class="mr-2 text-red-500">
                                                    <i class="fas fa-arrow-down"></i> 3.48%
                                                </span>
                                                <span class="whitespace-nowrap"> Since last week </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                                            <div class="flex-auto p-4">
                                                <div class="flex flex-wrap">
                                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                                        <h5
                                                        class="text-xs font-bold uppercase text-blueGray-400"
                                                        >
                                                        Sales
                                                        </h5>
                                                        <span class="text-xl font-semibold text-blueGray-700">
                                                        924
                                                        </span>
                                                    </div>
                                                    <div class="relative flex-initial w-auto pl-4">
                                                        <div
                                                        class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-pink-500 rounded-full shadow-lg"
                                                        >
                                                        <i class="fas fa-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-sm text-blueGray-400">
                                                <span class="mr-2 text-orange-500">
                                                    <i class="fas fa-arrow-down"></i> 1.10%
                                                </span>
                                                <span class="whitespace-nowrap"> Since yesterday </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                                            <div class="flex-auto p-4">
                                                <div class="flex flex-wrap">
                                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                                        <h5
                                                        class="text-xs font-bold uppercase text-blueGray-400"
                                                        >
                                                        Performance
                                                        </h5>
                                                        <span class="text-xl font-semibold text-blueGray-700">
                                                        49,65%
                                                        </span>
                                                    </div>
                                                    <div class="relative flex-initial w-auto pl-4">
                                                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white rounded-full shadow-lg bg-lightBlue-500">
                                                        <i class="fas fa-percent"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-sm text-blueGray-400">
                                                <span class="mr-2 text-emerald-500">
                                                    <i class="fas fa-arrow-up"></i> 12%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    Since last month
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 mx-auto -m-24 md:px-10">
                        {{ $slot }}
                        <x-backend.footer/>
                    </div>
                </main>
            </div>
        </div>

        @livewireScripts
        @stack('script')
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script type="text/javascript">
            /* Make dynamic date appear */
            (function () {
                if (document.getElementById("get-current-year")) {
                    document.getElementById(
                    "get-current-year"
                    ).innerHTML = new Date().getFullYear();
                }
            })();
            /* Sidebar - Side navigation menu on mobile/responsive mode */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("bg-white");
                document.getElementById(collapseID).classList.toggle("m-2");
                document.getElementById(collapseID).classList.toggle("py-3");
                document.getElementById(collapseID).classList.toggle("px-6");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target;
                while (element.nodeName !== "A") {
                    element = element.parentNode;
                }
                Popper.createPopper(element, document.getElementById(dropdownID), {
                    placement: "bottom-start",
                });
                document.getElementById(dropdownID).classList.toggle("hidden");
                document.getElementById(dropdownID).classList.toggle("block");
            }
        </script>
    </body>
</html>
