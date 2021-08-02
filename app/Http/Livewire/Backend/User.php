<?php

namespace App\Http\Livewire\Backend;

use App\Models\User as ModelsUser;
use App\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class User extends Component
{
    use WithPagination, WithFileUploads;

    public $modalFormVisible = false;
    public $modalId;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $image;
    public $user_image;
    public $user_image_name;
    public $role_id;
    public $confirmUserDeletion = false;

    public function showCreateModel()
    {
        $this->modalFormReset();
        $this->modalFormVisible = true;
    }

    public function rules()
    {
        return [
            'name'              => ['required'],
            'email'             => ['required','email', Rule::unique('users', 'email')->ignore($this->modalId)],
            'password'          => ['required','string','confirmed','min:8'],
            'user_image'        => [Rule::requiredIf(!$this->modalId), 'max:1024'],
            'role_id'           => ['required']
        ];
    }

    public function modelData()
    {
        $data = [
            'name'              => $this->name,
            'email'             => $this->email,
            'email_verified_at' => Carbon::now(),
            'remember_token'    => Str::random(10),
            'password'          => Hash::make($this->password),
        ];

        if ($this->user_image != ''){
            $data['profile_photo_path'] = $this->user_image_name;
        }

        return $data;
    }

    public function modalFormReset()
    {
        $this->modalId = null;
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->image = null;
        $this->user_image = null;
        $this->user_image_name = null;
        $this->role_id = null;
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if ($this->user_image != '') {
            $this->user_image_name = md5($this->user_image . microtime()).'.'.$this->user_image->extension();
            $this->user_image->storeAs('/', $this->user_image_name, 'uploads');
        }

        $user = ModelsUser::create($this->modelData());
        $user->attachRole($this->role_id);

        $this->modalFormReset();
        $this->modalFormVisible = false;

        $this->alert('success', 'تم اضافة المستستخدم بنجاح', [
            'position'  =>  'center',
            'timer'  =>  3000,
            'toast'  =>  true,
            'text'  =>  null,
            'showCancelButton'  =>  false,
            'showConfirmButton'  =>  false
        ]);

    }

    public function loadModalData()
    {
        $data = ModelsUser::find($this->modalId);
        $this->name = $data->name;
        $this->email = $data->email;
        $this->role_id = $data->roles[0]->id;
        $this->image = $data->profile_photo_path;
    }

    public function showUpdateModal($id)
    {
        $this->modalFormReset();
        $this->modalFormVisible = true;
        $this->modalId = $id;
        $this->loadModalData();
        $this->resetValidation();
    }

    public function update()
    {
        $this->validate();
        $user = ModelsUser::where('id', $this->modalId)->first();
        if ($this->user_image != '') {
            if ($user->profile_photo_path != '') {
                if (File::exists('assets/profiles/' . $user->profile_photo_path)) {
                    unlink('assets/profiles/' . $user->profile_photo_path);
                }
            }
            $this->user_image_name = md5($this->user_image . microtime()).'.'.$this->user_image->extension();
            $this->user_image->storeAs('/', $this->user_image_name, 'uploads');
        }

        $user->update($this->modelData());

        $user->roles()->sync($this->role_id);

        $this->modalFormVisible = false;
        $this->modalFormReset();

        $this->alert('success', 'User updated successful!', [
            'position'  =>  'center',
            'timer'  =>  3000,
            'toast'  =>  true,
            'text'  =>  null,
            'showCancelButton'  =>  false,
            'showConfirmButton'  =>  false
        ]);

    }

    public function showDeleteModal($id)
    {
        $this->confirmUserDeletion = true;
        $this->modalId = $id;
    }

    public function destroy()
    {
        $user = ModelsUser::where('id', $this->modalId)->first();
        if ($user->profile_photo_path != '') {
            if (File::exists('assets/profiles/' . $user->profile_photo_path)) {
                unlink('assets/profiles/' . $user->profile_photo_path);
            }
        }

        $user->delete();
        $this->confirmUserDeletion = false;
        $this->resetPage();
        $this->alert('success', 'User deleted successful!', [
            'position'  =>  'center',
            'timer'  =>  3000,
            'toast'  =>  true,
            'text'  =>  null,
            'showCancelButton'  =>  false,
            'showConfirmButton'  =>  false
        ]);

    }

    public function all_users()
    {
        return ModelsUser::orderByDesc('name')->paginate(50);
    }

    public function all_roles()
    {
        return Role::all();
    }

    public function render()
    {
        return view('livewire.backend.user', [
            'users' => $this->all_users(),
            'roles' => $this->all_roles(),
        ]);
    }
}
