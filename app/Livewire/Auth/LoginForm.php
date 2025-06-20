<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
  public $email = 'admin@conectarte.co';
  public $password = '12345';
  public $remember = false;

  protected $rules = [
    'email' => 'required|email',
    'password' => 'required|min:5',
  ];

  protected $messages = [
    'email.required' => 'El correo electrónico es requerido.',
    'email.email' => 'El correo electrónico debe ser válido.',
    'password.required' => 'La contraseña es requerida.',
    'password.min' => 'La contraseña debe tener al menos 5 caracteres.',
  ];

  public function login()
  {
    $this->validate();
    $credentials = [
      'email' => $this->email,
      'password' => $this->password,
    ];

    if (Auth::attempt($credentials, $this->remember)) {
      session()->regenerate();
      return redirect()->intended(route('dashboard'));
    }

    $this->addError('password', 'Estas credenciales no coinciden con nuestros registros.');
  }

  public function render()
  {
    return view('livewire.auth.login-form');
  }
}
