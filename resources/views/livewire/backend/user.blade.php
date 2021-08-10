<div>
    <div class="px-4 py-3 mb-0 border-0 rounded-t">
        <div class="flex flex-wrap items-center">
            <div class="relative flex-1 flex-grow w-full max-w-full px-4">
                <h3 class="text-lg font-semibold text-blueGray-700 cairo_font">
                    @lang('site.users_Table')
                </h3>
            </div>

            {{-- Button Add user --}}
            <div class="flex items-center justify-end py-4 text-right cairo_font">
                <x-jet-button wire:click="showCreateModel">
                    <i class="pr-1 fa fa-plus" aria-hidden="true"></i>@lang('site.add_user')
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
                        @lang('site.name')
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('site.email')
                    </th>
                    <th class="px-6 py-3 font-semibold text-center uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('site.role')
                    </th>
                    <th class="px-6 py-3 font-semibold text-right uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('site.image')
                    </th>
                    <th class="px-6 py-3 font-semibold text-center uppercase align-middle border border-l-0 border-r-0 border-solid text-dm whitespace-nowrap bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        @lang('site.action')
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
                                <i class="pr-1 fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;@lang('site.edit')
                            </x-jet-button>

                            <x-jet-danger-button wire:click="showDeleteModal({{ $user->id }})">
                                <i class="pr-1 fa fa-trash"></i>&nbsp;@lang('site.delete')
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
                {{ $modalId ? __('site.edit_user') : __('site.add_user') }}
            </x-slot>

            {{-- content --}}

            <x-slot name="content">

                {{-- name --}}

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('site.name') }}"></x-jet-label>
                    <x-jet-input type="text" id="name" wire:model.debounce.500ms="name" class="block w-full mt-1"></x-jet-input>
                    @error('name')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                {{-- email --}}

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('site.email') }}"></x-jet-label>
                    <x-jet-input type="text" id="email" wire:model.debounce.500ms="email" class="block w-full mt-1"></x-jet-input>
                    @error('email')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                {{-- password --}}

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('site.password') }}"></x-jet-label>
                    <x-jet-input type="password" name="password" wire:model.debounce.500ms="password" class="block w-full mt-1" autocomplete="new-password"></x-jet-input>
                    @error('password')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                <!-- Confirm Password -->

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('site.password_confirmation') }}"></x-jet-label>
                    <x-jet-input type="password" id="password_confirmation" wire:model.debounce.500ms="password_confirmation" class="block w-full mt-1" name="password_confirmation"></x-jet-input>
                    @error('password_confirmation')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                <!-- Select Option Role type -->

                <div class="mt-4">
                    <x-label for="role_id" value="{{ __('site.role') }}" />
                    <select name="role_id" id="role_id" wire:model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option hidden>@lang('site.role_type')</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')<span class="text-sm font-extrabold text-red-600">{{ $message }}</span>@enderror
                </div>

                {{-- image --}}

                <div class="mt-4">
                    <x-jet-label for="image" value="{{ __('site.image') }}"></x-jet-label>

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

                <hr class="mt-6">

                {{-- permissions --}}

                <div class="mt-6">
                    <x-jet-label class="mb-4" for="image" value="{{ __('site.permissions') }} :"></x-jet-label>

                    @php
                        $models = ['users','profile'];
                    @endphp

                    <div class="flex flex-wrap" id="wrapper-for-text-blueGray">
                        <div class="w-full">
                            <ul class="flex flex-row flex-wrap pt-3 pb-4 mb-0 list-none">
                                @foreach ($models as $index=>$model)
                                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center {{ $index == 0 ? 'active' : '' }}">
                                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal {{ $index == 0 ? 'bg-blueGray-700 text-white' : 'text-blueGray-700 bg-white' }}" data-tab-toggle="text-tab-{{ $model }}-blueGray" onclick="changeAtiveTab(event,'wrapper-for-text-blueGray','blueGray','text-tab-{{ $model }}-blueGray')">
                                            @lang('site.' . $model)
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg">
                                <div class="flex-auto px-4 py-2">
                                    <div class="tab-content tab-space">
                                        @foreach ($models as $index=>$model)
                                            <div class="{{ $index == 0 ? 'block' : 'hidden' }}" data-tab-content="true" id="text-tab-{{ $model }}-blueGray">
                                                @foreach ($permissions as $permission)
                                                    <label class="inline-flex items-center mt-3" :key="{{ $permission->id }}">
                                                        <x-jet-checkbox
                                                            type="checkbox"
                                                            name="user_permissions.{{ $permission->id }}"
                                                            wire:model="user_permissions.{{ $permission->id }}"
                                                            value="{{ $permission->id }}"
                                                            class="w-5 h-5 mr-3 text-gray-600 form-checkbox"/>
                                                        <span class="mr-1 text-gray-700">{{ $permission->display_name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </x-slot>

            {{-- footer --}}

            <x-slot name="footer">
                @if ($modalId)
                    <x-jet-button class="ml-2" wire:click="update">@lang('site.edit')</x-jet-button>
                @else
                    <x-jet-button class="ml-2" wire:click="store">@lang('site.add')</x-jet-button>
                @endif

                <x-jet-secondary-button wire:click="$toggle('modalFormVisible')">@lang('site.cancel')</x-jet-secondary-button>
            </x-slot>

        </x-jet-dialog-modal>

        {{-- Dialog modal ( delete ) --}}

        <x-jet-dialog-modal class="cairo_font" dir="rtl" wire:model="confirmUserDeletion">

            {{-- title modal --}}

            <x-slot name="title">
                @lang('site.delete_user')
            </x-slot>

            {{-- content modal --}}

            <x-slot name="content">

                @lang('site.confirm_delete')

            </x-slot>

            {{-- footer modal --}}

            <x-slot name="footer">
                <x-jet-danger-button class="ml-2" wire:click="destroy">@lang('site.delete')</x-jet-danger-button>

                <x-jet-secondary-button wire:click="$toggle('confirmUserDeletion')">@lang('site.cancel')</x-jet-secondary-button>
            </x-slot>

        </x-jet-dialog-modal>
    </div>

</div>

@push('script')
    <script type="text/javascript">
        function changeAtiveTab(event,wrapperID,color,tabID){
            let tabsWrapper = document.getElementById(wrapperID);
            let tabsAnchors = tabsWrapper.querySelectorAll("[data-tab-toggle]");
            let tabsContent = tabsWrapper.querySelectorAll("[data-tab-content]");

            for(let i = 0; i < tabsAnchors.length; i++) {
                if(tabsAnchors[i].getAttribute("data-tab-toggle") === tabID){
                    tabsAnchors[i].classList.remove("text-" + color + "-700");
                    tabsAnchors[i].classList.remove("bg-white");
                    tabsAnchors[i].classList.add("text-white");
                    tabsAnchors[i].classList.add("bg-" + color + "-700");
                    tabsContent[i].classList.remove("hidden");
                    tabsContent[i].classList.add("block");
                } else {
                    tabsAnchors[i].classList.add("text-" + color + "-700");
                    tabsAnchors[i].classList.add("bg-white");
                    tabsAnchors[i].classList.remove("text-white");
                    tabsAnchors[i].classList.remove("bg-" + color + "-700");
                    tabsContent[i].classList.add("hidden");
                    tabsContent[i].classList.remove("block");
                }
            }
        }
    </script>
@endpush
