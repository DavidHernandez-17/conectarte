<div class="bg-gray-200">
  <div class="mx-2 py-2 space-y-2">
    @foreach ($posts as $post)
      <livewire:wall.post :post="$post" :key="$post['id']" />
    @endforeach
  </div>
</div>