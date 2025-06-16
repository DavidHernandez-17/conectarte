<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <x-branding.logo-with-text />

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
    @endif

    <form wire:submit.prevent="register" class="space-y-4">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input id="name" wire:model.defer="name"
          x-data
          x-init="$nextTick(() => $el.focus())"
          class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input id="email" wire:model.defer="email"
          class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input id="password" type="password" wire:model.defer="password"
          class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
      </div>

      <div>
        <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirmar contraseña</label>
        <input id="confirmPassword" type="password" wire:model.defer="confirmPassword"
          class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
        @error('confirmPassword') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
      </div>

      <div class="flex items-center justify-end mt-4">
        <a href="{{ route('login') }}" class="text-sm text-primary hover:underline mr-2">¿Ya estás registrado?</a>
        <button type="submit"
          class="w-34 flex items-center justify-center gap-2 px-4 py-2 bg-primary text-white rounded-md"
          wire:loading.attr="disabled"
          wire:target="register">
          <span>Registrarme</span>
          <x-wireui:icon name="arrow-path" class="animate-spin h-4 w-4" wire:loading wire:target="register" />
        </button>
      </div>
    </form>
  </div>
</div>