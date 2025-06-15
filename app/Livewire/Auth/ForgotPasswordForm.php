<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPasswordForm extends Component
{
  public $email = '';

  protected $messages = [
    'email.required' => 'El correo electrónico es requerido.',
    'email.email' => 'El correo electrónico debe ser válido.',
    'email.exists' => 'Correo electrónico no encontrado.',
  ];

  public function sendResetLink()
  {
    $this->validate([
      'email' => 'required|email|exists:users,email',
    ]);

    $status = Password::sendResetLink(['email' => $this->email]);

    if ($status === Password::RESET_LINK_SENT) {
      session()->flash('status', __($status));
    } else {
      $this->addError('email', __($status));
    }
  }

  public function render()
  {
    return view('livewire.auth.forgot-password-form');
  }
}
