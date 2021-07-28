<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        if (auth()->user()->hasRole('admin|super_admin')) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->intended(config('fortify.home'));
        }
    }

}
