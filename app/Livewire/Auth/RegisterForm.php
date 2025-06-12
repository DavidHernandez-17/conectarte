<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{
  public $name = '';
  public $email = '';
  public $password = '';
  public $confirmPassword = '';

  protected $rules = [
    'name' => 'required|min:5',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:5',
    'confirmPassword' => 'required|same:password',
  ];

  protected $messages = [
    'name.required' => 'El campo nombre es requerido.',
    'name.min' => 'El campo nombre debe ser al menos 5 carácteres.',
    'email.required' => 'El campo correo electrónico es requerido.',
    'email.email' => 'El campo correo electrónico debe ser válido.',
    'email.unique' => 'Este correo ya está registrado.',
    'password.required' => 'La contraseña es requerida.',
    'password.min' => 'La contraseña debe tener al menos 5 caracteres.',
    'confirmPassword.required' => 'Debes confirmar la contraseña.',
    'confirmPassword.same' => 'Las contraseñas no coinciden.',
  ];

  public function register()
  {
    $this->validate();

    $user = User::create([
      'name' => $this->name,
      'email' => $this->email,
      'password' => Hash::make($this->password),
    ]);

    Auth::login($user);

    return redirect()->route('dashboard');
  }

  public function render()
  {
    return view('livewire.auth.register-form');
  }
}
