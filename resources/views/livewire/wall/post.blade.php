<x-card class="shadow-xl">
  <div class="flex items-center gap-3 mb-3">
    <x-avatar src="{{ $post['user']['photo'] }}" size="md" />
    <div>
      <p class="font-semibold">{{ $post['user']['name'] }}</p>
      <p class="text-xs text-gray-500">{{ $post['created_at'] }}</p>
    </div>
  </div>

  <div class="mb-4 text-gray-800">
    {{ $post['content'] }}
  </div>

  @if ($post['image'])
  <img src="{{ $post['image'] }}" alt="Post image" class="rounded-md mb-3 w-full">
  @endif

  @if ($post['video'])
  <video controls class="rounded-md mb-3 w-full">
    <source src="{{ $post['video'] }}" type="video/mp4">
    Tu navegador no soporta videos.
  </video>
  @endif

  <div class="flex items-center justify-between text-sm text-gray-600">
    <div class="flex">
      <a href="#"
        class="inline-flex items-center gap-1 px-2 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition">
        <x-icon name="hand-thumb-up" class="w-4 h-4" />
        Me gusta
      </a>

      <a href="#"
        class="inline-flex items-center gap-1 px-2 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition">
        <x-icon name="arrow-top-right-on-square" class="w-4 h-4" />
        Contactar
      </a>
    </div>
    <x-badge outline primary class="p-2" label="{{ $post['views'] }} visualizaciones" />
  </div>
</x-card>