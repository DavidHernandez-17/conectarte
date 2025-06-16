<div>
  <div class="max-w-4xl mx-auto p-4 space-y-6">
    <div class="flex items-center justify-between">
      <x-wireui:avatar md src="{{ $user['photo'] }}" alt="Foto perfil"
        class="w-24 h-24 rounded-full object-cover border-2 border-violet-500" />

      <div class="text-center">
        <div class="text-lg font-bold">{{ $user['posts_count'] }}</div>
        <div class="text-gray-500 text-sm">Publicaciones</div>
      </div>

      <div class="text-center">
        <div class="text-lg font-bold">{{ $user['contacts_count'] }}</div>
        <div class="text-gray-500 text-sm">Contactos</div>
      </div>

      <div class="text-center">
        <div class="text-lg font-bold">{{ $user['contacts_count'] }}</div>
        <div class="text-gray-500 text-sm">Contactos</div>
      </div>
    </div>

    <div class="space-y-1 text-left">
      <div class="text-xl font-semibold">{{ $user['name'] }}</div>
      <div class="text-gray-600 text-sm">{{ $user['presentation'] }}</div>
    </div>

    <div class="flex justify-left gap-2">
      <x-wireui:button gray sm label="Editar perfil" wire:click="goToUpdate" />
      <x-wireui:button gray sm label="Compartir perfil" />
    </div>

    <div x-data="{ tab: 'fotos' }" class="space-y-4">
      <div class="flex space-x-4 border-b">
        <button
          :class="tab === 'fotos' ? 'border-b-2 border-primary text-primary font-semibold' : 'text-gray-500'"
          class="pb-2"
          @click="tab = 'fotos'">
          Fotos
        </button>

        <button
          :class="tab === 'videos' ? 'border-b-2 border-primary text-primary font-semibold' : 'text-gray-500'"
          class="pb-2"
          @click="tab = 'videos'">
          Videos
        </button>
      </div>

      <div x-show="tab === 'fotos'" class="grid grid-cols-3 gap-1 overflow-y-auto max-h-[600px]">
        @foreach ($posts as $post)
          @if ($post['image'])
          <div>
            <img src="{{ $post['image'] }}" class="w-full h-auto rounded-md object-cover" alt="Post">
          </div>
          @endif
        @endforeach
      </div>

      <div x-show="tab === 'videos'" class="grid grid-cols-1 gap-2 overflow-y-auto max-h-[600px]">
        @foreach ($posts as $post)
          @if ($post['video'])
          <div>
            <video controls class="rounded-lg w-full h-auto">
              <source src="{{ $post['video'] }}" type="video/mp4">
              Tu navegador no soporta videos.
            </video>
          </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</div>