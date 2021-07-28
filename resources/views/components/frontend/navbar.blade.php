<div>
    <nav
        class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 navbar-expand-lg"
    >
        <div
        class="container flex flex-wrap items-center justify-between px-4 mx-auto"
        >
        <div
            class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start"
        >
            <a
            class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed text-white uppercase whitespace-nowrap"
            href="{{ route('index') }}"
            >Notus JS</a
            ><button
            class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
            >
            <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div
            class="items-center flex-grow hidden bg-white lg:flex lg:bg-opacity-0 lg:shadow-none"
            id="example-collapse-navbar"
        >
            <ul class="flex flex-col mr-auto list-none lg:flex-row">
            <li class="flex items-center">
                <a
                class="flex items-center px-3 py-4 text-xs font-bold uppercase lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 lg:py-2"
                href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-landing"
                ><i
                    class="mr-2 text-lg lg:text-blueGray-200 text-blueGray-400 far fa-file-alt leading-lg"
                ></i>
                Docs</a
                >
            </li>
            </ul>
            <ul
            class="flex flex-col items-center list-none lg:flex-row lg:ml-auto"
            >
            <li class="relative inline-block">
                <a
                class="flex items-center px-3 py-4 text-xs font-bold uppercase lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 lg:py-2"
                href="javascript:void(0);"
                onclick="openDropdown(event,'demo-pages-dropdown')"
                >
                Demo Pages
                </a>
                <div
                class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                id="demo-pages-dropdown"
                >
                <span
                    class="block w-full px-4 pt-2 pb-0 text-sm font-bold bg-transparent whitespace-nowrap text-blueGray-400"
                >
                    Admin Layout
                </span>
                <a
                    href="{{ route('admin.index') }}"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >
                    Dashboard
                </a>
                <a
                    href="{{ route('admin.settings') }}"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >
                    Settings
                </a>
                <a
                    href="{{ route('admin.tables') }}"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >
                    Tables
                </a>
                <a
                    href="{{ route('admin.maps') }}"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >
                    Maps
                </a>
                <div
                    class="h-0 mx-4 my-2 border border-solid border-blueGray-100"
                ></div>

                <span
                    class="block w-full px-4 pt-2 pb-0 text-sm font-bold bg-transparent whitespace-nowrap text-blueGray-400"
                >
                    No Layout
                </span>
                <a
                    href="{{ route('index') }}"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >
                    Landing
                </a>
                <a
                    href="{{ route('profile') }}"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >
                    Profile
                </a>
                </div>
            </li>
            <li class="flex items-center">
                <a
                class="flex items-center px-3 py-4 text-xs font-bold uppercase lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 lg:py-2"
                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F"
                target="_blank"
                ><i
                    class="text-lg lg:text-blueGray-200 text-blueGray-400 fab fa-facebook leading-lg"
                ></i
                ><span class="inline-block ml-2 lg:hidden">Share</span></a
                >
            </li>
            <li class="flex items-center">
                <a
                class="flex items-center px-3 py-4 text-xs font-bold uppercase lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 lg:py-2"
                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                target="_blank"
                ><i
                    class="text-lg lg:text-blueGray-200 text-blueGray-400 fab fa-twitter leading-lg"
                ></i
                ><span class="inline-block ml-2 lg:hidden">Tweet</span></a
                >
            </li>
            <li class="flex items-center">
                <a
                class="flex items-center px-3 py-4 text-xs font-bold uppercase lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 lg:py-2"
                href="https://github.com/creativetimofficial/notus-js?ref=njs-landing"
                target="_blank"
                ><i
                    class="text-lg lg:text-blueGray-200 text-blueGray-400 fab fa-github leading-lg"
                ></i
                ><span class="inline-block ml-2 lg:hidden">Star</span></a
                >
            </li>
            <li class="flex items-center">
                <button
                class="px-4 py-2 mb-3 ml-3 text-xs font-bold uppercase transition-all duration-150 ease-linear bg-white rounded shadow outline-none text-blueGray-700 active:bg-blueGray-50 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                type="button"
                >
                <i class="fas fa-arrow-alt-circle-down"></i> Download
                </button>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</div>
