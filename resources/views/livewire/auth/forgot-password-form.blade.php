<x-authentication-card>
  <x-slot name="logo">
    <img src="{{ asset('assets/branding/conectarte-logo.png') }}" alt="Logo" class="w-32 h-auto">
  </x-slot>

  <div class="mb-4 text-sm text-gray-600">
    {{ __('¿Olvidaste tu contraseña? No hay problema. Solo indícanos tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña y podrás elegir una nueva.') }}
  </div>

  @if (session()->has('status'))
  <div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
  </div>
  @endif

  <x-validation-errors class="mb-4" />

  <form wire:submit.prevent="sendResetLink" class="space-y-4">
    <input
      id="email"
      type="email"
      wire:model.defer="email"
      class="rounded w-full border-gray-300 focus:ring-primary"
      placeholder="example@dominio.com"
      autofocus
      autocomplete="username"
    >

    <div class="flex items-center justify-end mt-4">
      <button
        type="submit"
        class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-primary text-white rounded-md"
        wire:loading.attr="disabled">
        <span>Enviar enlace</span>
        <x-icon name="arrow-path" class="animate-spin h-4 w-4" wire:loading />
      </button>
    </div>
  </form>
</x-authentication-card>