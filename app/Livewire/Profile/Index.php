<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Index extends Component
{
  public $user = [
    'name' => 'Camila Rojas',
    'presentation' => 'Apasionada por la tecnología y el arte. ¡Conectemos!',
    'photo' => 'https://i.pravatar.cc/150?img=10',
    'posts_count' => 42,
    'contacts_count' => 120,
  ];

  public $posts = [];

  public function mount()
  {
    $this->posts = collect(range(1, 20))->map(function ($i) {
      $hasVideo = rand(0, 1);
      $video = $hasVideo ? 'https://www.w3schools.com/html/mov_bbb.mp4' : null;

      $hasImage = !$hasVideo || rand(0, 1);
      $image = $hasImage ? "https://picsum.photos/300/300?random=$i" : null;

      return [
        'id' => $i,
        'image' => $image,
        'video' => $video,
        'content' => "Post número $i con contenido interesante.",
        'created_at' => now()->subMinutes($i * 10)->diffForHumans(),
        'likes' => rand(10, 100),
        'views' => rand(50, 500),
      ];
    })->toArray();
  }


  public function goToUpdate()
  {
    return redirect()->route('profile.show');
  }

  public function render()
  {
    return view('livewire.profile.index', [
      'posts' => $this->posts,
      'user' => $this->user,
    ])->layout('layouts.app');
  }
}
