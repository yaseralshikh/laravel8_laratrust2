<x-admin-layout>
    <div class="flex flex-wrap mt-4">
        <div class="w-full px-4 mb-12">
            <div
            class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg"
            >
            <div class="px-4 py-3 mb-0 border-0 rounded-t">
                <div class="flex flex-wrap items-center">
                <div
                    class="relative flex-1 flex-grow w-full max-w-full px-4"
                >
                    <h3 class="text-lg font-semibold text-blueGray-700">
                    Card Tables
                    </h3>
                </div>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table
                class="items-center w-full bg-transparent border-collapse"
                >
                <thead>
                    <tr>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                    >
                        Project
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                    >
                        Budget
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                    >
                        Status
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                    >
                        Users
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                    >
                        Completion
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                    ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/bootstrap.jpg') }}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-blueGray-600">
                        Argon Design System
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $2,500 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 text-orange-500 fas fa-circle"></i>
                        pending
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg') }}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg') }}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg') }}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png') }}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">60%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs bg-red-200 rounded"
                            >
                            <div
                                style="width: 60%"
                                class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-light-1-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-light-1-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/angular.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-blueGray-600">
                        Angular Now UI Kit PRO
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $1,800 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 fas fa-circle text-emerald-500"></i>
                        completed
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">100%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs rounded bg-emerald-200"
                            >
                            <div
                                style="width: 100%"
                                class="flex flex-col justify-center text-center text-white shadow-none whitespace-nowrap bg-emerald-500"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-light-2-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-light-2-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/sketch.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-blueGray-600">
                        Black Dashboard Sketch
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $3,150 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 text-red-500 fas fa-circle"></i>
                        delayed
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">73%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs bg-red-200 rounded"
                            >
                            <div
                                style="width: 73%"
                                class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-light-3-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-light-3-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/react.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-blueGray-600">
                        React Material Dashboard
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $4,400 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 text-teal-500 fas fa-circle"></i> on
                        schedule
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">90%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs bg-teal-200 rounded"
                            >
                            <div
                                style="width: 90%"
                                class="flex flex-col justify-center text-center text-white bg-teal-500 shadow-none whitespace-nowrap"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-light-4-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-light-4-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/vue.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-blueGray-600">
                        React Material Dashboard
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $2,200 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 fas fa-circle text-emerald-500"></i>
                        completed
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">100%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs rounded bg-emerald-200"
                            >
                            <div
                                style="width: 100%"
                                class="flex flex-col justify-center text-center text-white shadow-none whitespace-nowrap bg-emerald-500"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-light-5-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-light-5-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-12">
            <div
            class="relative flex flex-col w-full min-w-0 mb-6 text-white break-words bg-pink-900 rounded shadow-lg"
            >
            <div class="px-4 py-3 mb-0 border-0 rounded-t">
                <div class="flex flex-wrap items-center">
                <div
                    class="relative flex-1 flex-grow w-full max-w-full px-4"
                >
                    <h3 class="text-lg font-semibold text-white">
                    Card Tables
                    </h3>
                </div>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table
                class="items-center w-full bg-transparent border-collapse"
                >
                <thead>
                    <tr>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left text-pink-300 uppercase align-middle bg-pink-800 border border-l-0 border-r-0 border-pink-700 border-solid whitespace-nowrap"
                    >
                        Project
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left text-pink-300 uppercase align-middle bg-pink-800 border border-l-0 border-r-0 border-pink-700 border-solid whitespace-nowrap"
                    >
                        Budget
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left text-pink-300 uppercase align-middle bg-pink-800 border border-l-0 border-r-0 border-pink-700 border-solid whitespace-nowrap"
                    >
                        Status
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left text-pink-300 uppercase align-middle bg-pink-800 border border-l-0 border-r-0 border-pink-700 border-solid whitespace-nowrap"
                    >
                        Users
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left text-pink-300 uppercase align-middle bg-pink-800 border border-l-0 border-r-0 border-pink-700 border-solid whitespace-nowrap"
                    >
                        Completion
                    </th>
                    <th
                        class="px-6 py-3 text-xs font-semibold text-left text-pink-300 uppercase align-middle bg-pink-800 border border-l-0 border-r-0 border-pink-700 border-solid whitespace-nowrap"
                    ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/bootstrap.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-white">
                        Argon Design System
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $2,500 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 text-orange-500 fas fa-circle"></i>
                        pending
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">60%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs bg-red-200 rounded"
                            >
                            <div
                                style="width: 60%"
                                class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-dark-1-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-dark-1-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/angular.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-white">
                        Angular Now UI Kit PRO
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $1,800 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 fas fa-circle text-emerald-500"></i>
                        completed
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">100%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs rounded bg-emerald-200"
                            >
                            <div
                                style="width: 100%"
                                class="flex flex-col justify-center text-center text-white shadow-none whitespace-nowrap bg-emerald-500"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-dark-2-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-dark-2-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/sketch.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-white">
                        Black Dashboard Sketch
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $3,150 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 text-red-500 fas fa-circle"></i>
                        delayed
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">73%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs bg-red-200 rounded"
                            >
                            <div
                                style="width: 73%"
                                class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-dark-3-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-dark-3-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/react.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-white">
                        React Material Dashboard
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $4,400 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 text-teal-500 fas fa-circle"></i> on
                        schedule
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">90%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs bg-teal-200 rounded"
                            >
                            <div
                                style="width: 90%"
                                class="flex flex-col justify-center text-center text-white bg-teal-500 shadow-none whitespace-nowrap"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-dark-4-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-dark-4-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th
                        class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <img
                        src="{{ asset('theme/assets/img/vue.jpg')}}"
                        class="w-12 h-12 bg-white border rounded-full"
                        alt="..."
                        />
                        <span class="ml-3 font-bold text-white">
                        React Material Dashboard
                        </span>
                    </th>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        $2,200 USD
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <i class="mr-2 fas fa-circle text-emerald-500"></i>
                        completed
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex">
                        <img
                            src="{{ asset('theme/assets/img/team-1-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-2-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-3-800x800.jpg')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        <img
                            src="{{ asset('theme/assets/img/team-4-470x470.png')}}"
                            alt="..."
                            class="w-10 h-10 -ml-4 border-2 rounded-full shadow border-blueGray-50"
                        />
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <div class="flex items-center">
                        <span class="mr-2">100%</span>
                        <div class="relative w-full">
                            <div
                            class="flex h-2 overflow-hidden text-xs rounded bg-emerald-200"
                            >
                            <div
                                style="width: 100%"
                                class="flex flex-col justify-center text-center text-white shadow-none whitespace-nowrap bg-emerald-500"
                            ></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td
                        class="p-4 px-6 text-xs text-right align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap"
                    >
                        <a
                        href="{{ route('admin.tables') }}"
                        class="block px-3 py-1 text-blueGray-500"
                        onclick="openDropdown(event,'table-dark-5-dropdown')"
                        >
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                        class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                        id="table-dark-5-dropdown"
                        >
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                        ><a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                        >
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                        <a
                            href="{{ route('admin.tables') }}"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                        >
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</x-admin-layout>



