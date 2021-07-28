<x-admin-layout>
    <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-8/12">
            <div
            class="relative flex flex-col w-full min-w-0 mb-6 break-words border-0 rounded-lg shadow-lg bg-blueGray-100"
            >
            <div class="px-6 py-6 mb-0 bg-white rounded-t">
                <div class="flex justify-between text-center">
                <h6 class="text-xl font-bold text-blueGray-700">
                    My account
                </h6>
                <button
                    class="px-4 py-2 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none"
                    type="button"
                >
                    Settings
                </button>
                </div>
            </div>
            <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
                <form>
                <h6
                    class="mt-3 mb-6 text-sm font-bold uppercase text-blueGray-400"
                >
                    User Information
                </h6>
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-6/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        Username
                        </label>
                        <input
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="lucky.jesse"
                        />
                    </div>
                    </div>
                    <div class="w-full px-4 lg:w-6/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        Email address
                        </label>
                        <input
                        type="email"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="jesse@example.com"
                        />
                    </div>
                    </div>
                    <div class="w-full px-4 lg:w-6/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        First Name
                        </label>
                        <input
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="Lucky"
                        />
                    </div>
                    </div>
                    <div class="w-full px-4 lg:w-6/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        Last Name
                        </label>
                        <input
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="Jesse"
                        />
                    </div>
                    </div>
                </div>

                <hr class="mt-6 border-b-1 border-blueGray-300" />

                <h6
                    class="mt-3 mb-6 text-sm font-bold uppercase text-blueGray-400"
                >
                    Contact Information
                </h6>
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-12/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        Address
                        </label>
                        <input
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                        />
                    </div>
                    </div>
                    <div class="w-full px-4 lg:w-4/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        City
                        </label>
                        <input
                        type="email"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="New York"
                        />
                    </div>
                    </div>
                    <div class="w-full px-4 lg:w-4/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        Country
                        </label>
                        <input
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="United States"
                        />
                    </div>
                    </div>
                    <div class="w-full px-4 lg:w-4/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        Postal Code
                        </label>
                        <input
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        value="Postal Code"
                        />
                    </div>
                    </div>
                </div>

                <hr class="mt-6 border-b-1 border-blueGray-300" />

                <h6
                    class="mt-3 mb-6 text-sm font-bold uppercase text-blueGray-400"
                >
                    About Me
                </h6>
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-12/12">
                    <div class="relative w-full mb-3">
                        <label
                        class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                        htmlFor="grid-password"
                        >
                        About me
                        </label>
                        <textarea
                        type="text"
                        class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                        rows="4"
                        >
                            A beautiful UI Kit and Admin for JavaScript & Tailwind CSS. It is Free
                            and Open Source.
                            </textarea
                        >
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        <div class="w-full px-4 lg:w-4/12">
            <div
            class="relative flex flex-col w-full min-w-0 mt-16 mb-6 break-words bg-white rounded-lg shadow-xl"
            >
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                <div class="flex justify-center w-full px-4">
                    <div class="relative">
                    <img
                        alt="..."
                        src="{{ asset('theme/assets/img/team-2-800x800.jpg') }}"
                        class="absolute h-auto -m-16 -ml-20 align-middle border-none rounded-full shadow-xl lg:-ml-16 max-w-150-px"
                    />
                    </div>
                </div>
                <div class="w-full px-4 mt-20 text-center">
                    <div class="flex justify-center py-4 pt-8 lg:pt-4">
                    <div class="p-3 mr-4 text-center">
                        <span
                        class="block text-xl font-bold tracking-wide uppercase text-blueGray-600"
                        >
                        22
                        </span>
                        <span class="text-sm text-blueGray-400">Friends</span>
                    </div>
                    <div class="p-3 mr-4 text-center">
                        <span
                        class="block text-xl font-bold tracking-wide uppercase text-blueGray-600"
                        >
                        10
                        </span>
                        <span class="text-sm text-blueGray-400">Photos</span>
                    </div>
                    <div class="p-3 text-center lg:mr-4">
                        <span
                        class="block text-xl font-bold tracking-wide uppercase text-blueGray-600"
                        >
                        89
                        </span>
                        <span class="text-sm text-blueGray-400"
                        >Comments</span
                        >
                    </div>
                    </div>
                </div>
                </div>
                <div class="mt-12 text-center">
                <h3
                    class="mb-2 text-xl font-semibold leading-normal text-blueGray-700"
                >
                    Jenna Stones
                </h3>
                <div
                    class="mt-0 mb-2 text-sm font-bold leading-normal uppercase text-blueGray-400"
                >
                    <i
                    class="mr-2 text-lg fas fa-map-marker-alt text-blueGray-400"
                    ></i>
                    Los Angeles, California
                </div>
                <div class="mt-10 mb-2 text-blueGray-600">
                    <i
                    class="mr-2 text-lg fas fa-briefcase text-blueGray-400"
                    ></i>
                    Solution Manager - Creative Tim Officer
                </div>
                <div class="mb-2 text-blueGray-600">
                    <i
                    class="mr-2 text-lg fas fa-university text-blueGray-400"
                    ></i>
                    University of Computer Science
                </div>
                </div>
                <div
                class="py-10 mt-10 text-center border-t border-blueGray-200"
                >
                <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4 lg:w-9/12">
                    <p
                        class="mb-4 text-lg leading-relaxed text-blueGray-700"
                    >
                        An artist of considerable range, Jenna the name taken
                        by Melbourne-raised, Brooklyn-based Nick Murphy
                        writes, performs and records all of his own music,
                        giving it a warm, intimate feel with a solid groove
                        structure. An artist of considerable range.
                    </p>
                    <a
                        href="javascript:void(0);"
                        class="font-normal text-pink-500"
                    >
                        Show more
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-admin-layout>
