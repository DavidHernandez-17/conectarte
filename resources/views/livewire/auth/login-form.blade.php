<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <x-branding.logo-with-text />

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
    @endif

    <form wire:submit.prevent="login" class="space-y-4">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input id="email" wire:model.defer="email" autocomplete="username"
          x-data
          x-init="$nextTick(() => $el.focus())"
          class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input id="password" type="password" wire:model.defer="password" autocomplete="current-password"
          class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm text-gray-600">
          <input type="checkbox" wire:model="remember" class="mr-2 rounded border-gray-300 focus:ring-primary">
          Recordarme
        </label>

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-sm text-primary hover:underline">¿Olvidaste tu contraseña?</a>
        @endif
      </div>

      <div class="pt-2 flex items-center justify-between gap-2">
        <a href="{{ route('register') }}"
          class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-gray-300 hover:bg-gray-500 hover:text-white rounded-md">
          <span>Registrarme</span>
        </a>
        <button type="submit"
          class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-primary text-white rounded-md"
          wire:loading.attr="disabled"
          wire:target="login">
          <span>Iniciar sesión</span>
          <x-wireui:icon name="arrow-path" class="animate-spin h-4 w-4" wire:loading wire:target="login" />
        </button>
      </div>
    </form>
  </div>
</div>