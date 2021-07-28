<div>
    <nav class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent md:flex-row md:flex-nowrap md:justify-start">
        <div
        class="flex flex-wrap items-center justify-between w-full px-4 mx-autp md:flex-nowrap md:px-10"
        >
        <a
            class="hidden text-sm font-semibold text-white uppercase lg:inline-block"
            href="{{ route('admin.index') }}">Dashboard</a
        >
        <form
            class="flex-row flex-wrap items-center hidden mr-3 md:flex lg:ml-auto"
        >
            <div class="relative flex flex-wrap items-stretch w-full">
            <span
                class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center bg-transparent rounded text-blueGray-300"
                ><i class="fas fa-search"></i
            ></span>
            <input
                type="text"
                placeholder="Search here..."
                class="relative w-full px-3 py-3 pl-10 text-sm bg-white border-0 rounded shadow outline-none placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
            />
            </div>
        </form>
        <ul
            class="flex-col items-center hidden list-none md:flex-row md:flex"
        >
            <a
            class="block text-blueGray-500"
            href="javascript:void(0);"
            onclick="openDropdown(event,'user-dropdown')"
            >
            <div class="flex items-center">
                <span class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-blueGray-200">

                    <img
                        alt="..."
                        class="w-full align-middle border-none rounded-full shadow-lg"
                        src="{{ asset('/theme/assets/img/team-1-800x800.jpg') }}"/>
                </span>
            </div>
            </a>
            <div
            class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
            id="user-dropdown"
            >
            <a
                href="javascript:void(0);"
                class="block w-full px-4 py-2 text-sm font-normal text-pink-600 bg-transparent whitespace-nowrap"
                >Welcome : {{ auth()->user()->name }}</a
            >
            <div
                class="h-0 my-2 border border-solid border-blueGray-100"
            ></div>
            <a
                href="{{ route('admin.index')}}"
                class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >Another action</a
            ><a
                href="{{ route('admin.index')}}"
                class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                >Something else here</a
            >
            <div
                class="h-0 my-2 border border-solid border-blueGray-100"
            ></div>
            <a
                href="{{ route('logout')}}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Logout</a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" id="logout-form" class="hidden">
                    @csrf
                </form>
            </div>
        </ul>
        </div>
    </nav>
</div>
