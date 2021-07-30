<div>
    <div class="px-4 py-3 mb-0 border-0 rounded-t">
        <div class="flex flex-wrap items-center">
            <div class="relative flex-1 flex-grow w-full max-w-full px-4">
                <h3 class="text-lg font-semibold text-blueGray-700">
                    Users Tables
                </h3>
            </div>
            <div class="flex items-center justify-end py-4 text-right">
                <x-jet-button wire:click="showCreateModel">
                    <i class="pr-1 fa fa-plus" aria-hidden="true"></i>{{ __('Create User') }}
                </x-jet-button>
            </div>
        </div>
    </div>

    <div dir="rtl" class="block w-full overflow-x-auto">
        <!-- Projects table -->
        <table class="items-center w-full bg-transparent border-collapse">
            <thead>
                <tr>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        #
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Name
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Email
                    </th>
                    <th class="px-6 py-3 font-semibold text-center uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Role
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Image
                    </th>
                    <th class="px-6 py-3 font-semibold text-center uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $index=>$user)
                    <tr>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                            {{ $index + 1 }}
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap cairo_font">
                            {{ $user->name }}
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                            {{ $user->email }}
                        </td>
                        <td class="p-4 px-6 text-xs text-center align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                            {{ $user->roles[0]->display_name }}
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                            <img src="{{ asset('assets/profiles/' . $user->profile_photo_path) }}" alt="{{ $user->name }} " width="50">
                        </td>
                        <td class="p-4 px-6 text-xs text-center align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap cairo_font">
                            <x-jet-button wire:click="showUpdateModal({{ $user->id }})">
                                <i class="pr-1 fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;@lang('messages.edit')
                            </x-jet-button>

                            <x-jet-danger-button wire:click="showDeleteModal({{ $user->id }})">
                                <i class="pr-1 fa fa-trash"></i>&nbsp;@lang('messages.delete')
                            </x-jet-danger-button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                            No post found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="p-4">
        {{ $users->links() }}
    </div>

</div>
