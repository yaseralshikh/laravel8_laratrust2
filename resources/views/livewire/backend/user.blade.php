<div>
    <div class="px-4 py-3 mb-0 border-0 rounded-t">
        <div class="flex flex-wrap items-center">
            <div class="relative flex-1 flex-grow w-full max-w-full px-4">
                <h3 class="text-lg font-semibold text-blueGray-700 cairo_font">
                    @lang('messages.users_Table')
                </h3>
            </div>

            {{-- Button Add user --}}
            <div class="flex items-center justify-end py-4 text-right cairo_font">
                <x-jet-button wire:click="showCreateModel">
                    <i class="pr-1 fa fa-plus" aria-hidden="true"></i>@lang('messages.add_user')
                </x-jet-button>
            </div>
        </div>
    </div>

    {{-- Users Table --}}

    <div dir="rtl" class="block w-full overflow-x-auto">
        <!-- Projects table -->
        <table class="items-center w-full bg-transparent border-collapse cairo_font">
            <thead>
                <tr>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        #
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('messages.name')
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('messages.email')
                    </th>
                    <th class="px-6 py-3 font-semibold text-center uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('messages.role')
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('messages.image')
                    </th>
                    <th class="px-6 py-3 font-semibold text-center uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('messages.action')
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

    {{-- Pagination --}}

    <div class="p-4">
        {{ $users->links() }}
    </div>

    {{-- modal Form --}}

    <div dir="rtl" class="cairo_font">

        {{-- Dialog modal ( Add & Update ) --}}

        <x-jet-dialog-modal wire:model="modalFormVisible">

            {{-- title --}}

            <x-slot name="title">
                {{ $modalId ? __('messages.edit_user') : __('messages.add_user') }}
            </x-slot>

            {{-- content --}}

            <x-slot name="content">

                {{-- name --}}

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('messages.name') }}"></x-jet-label>
                    <x-jet-input type="text" id="name" wire:model.debounce.500ms="name" class="block w-full mt-1"></x-jet-input>
                    @error('name')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                {{-- email --}}

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('messages.email') }}"></x-jet-label>
                    <x-jet-input type="text" id="email" wire:model.debounce.500ms="email" class="block w-full mt-1"></x-jet-input>
                    @error('email')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                {{-- password --}}

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('messages.password') }}"></x-jet-label>
                    <x-jet-input type="password" name="password" wire:model.debounce.500ms="password" class="block w-full mt-1" autocomplete="new-password"></x-jet-input>
                    @error('password')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                <!-- Confirm Password -->

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('messages.password_confirmation') }}"></x-jet-label>
                    <x-jet-input type="password" id="password_confirmation" wire:model.debounce.500ms="password_confirmation" class="block w-full mt-1" name="password_confirmation"></x-jet-input>
                    @error('password_confirmation')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                <!-- Select Option Role type -->

                <div class="mt-4">
                    <x-label for="role_id" value="{{ __('messages.role') }}" />
                    <select name="role_id" id="role_id" wire:model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option hidden>@lang('messages.role_type')</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                {{-- image --}}

                <div class="mt-4">
                    <x-jet-label for="image" value="{{ __('messages.image') }}"></x-jet-label>

                    <div class="flex py-3">
                        @if ($image)
                            <div class="flex mx-1 mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center p-3 text-sm text-gray-500 border border-gray-300 rounded bg-gray-50">
                                    <img src="{{ asset('assets/profiles/' . $image) }}" width="200">
                                </span>
                            </div>
                        @endif

                        @if ($user_image)
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center p-3 text-sm text-gray-500 border border-gray-300 rounded bg-gray-50">
                                    <img src="{{ $user_image->temporaryUrl() }}" width="200">
                                </span>
                            </div>
                        @endif
                    </div>

                    <input type="file" wire:model="user_image" name="user_image" accept="image/*" class="flex-1 block w-full transition duration-150 ease-in-out rounded-none form-input rounded-r-md sm:text-sm sm:leading-5">
                    @error('user_image')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

            </x-slot>

            {{-- footer --}}

            <x-slot name="footer">
                @if ($modalId)
                    <x-jet-button class="ml-2" wire:click="update">@lang('messages.edit')</x-jet-button>
                @else
                    <x-jet-button class="ml-2" wire:click="store">@lang('messages.add')</x-jet-button>
                @endif

                <x-jet-secondary-button wire:click="$toggle('modalFormVisible')">@lang('messages.cancel')</x-jet-secondary-button>
            </x-slot>

        </x-jet-dialog-modal>

        {{-- Dialog modal ( delete ) --}}

        <x-jet-dialog-modal class="cairo_font" dir="rtl" wire:model="confirmUserDeletion">

            {{-- title modal --}}

            <x-slot name="title">
                @lang('messages.delete_user')
            </x-slot>

            {{-- content modal --}}

            <x-slot name="content">

                @lang('messages.confirm_delete')

            </x-slot>

            {{-- footer modal --}}

            <x-slot name="footer">
                <x-jet-danger-button class="ml-2" wire:click="destroy">@lang('messages.delete')</x-jet-danger-button>

                <x-jet-secondary-button wire:click="$toggle('confirmUserDeletion')">@lang('messages.cancel')</x-jet-secondary-button>
            </x-slot>

        </x-jet-dialog-modal>
    </div>

</div>
