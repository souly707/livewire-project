<?php

namespace App\Livewire\Admin\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    public function rules()
    {
        // return [
        //     'email' => 'required|string|email',
        //     'password' => 'required|string|min:6',
        //     'remember' => 'nullable',
        // ];
        return (new LoginRequest())->rules();
    }

    public function submit()
    {
        $this->validate();
        if (!Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        return to_route('admin.index');
    }
    public function render()
    {
        return view('admin.auth.admin-login-component');
    }
}
