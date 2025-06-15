<?php

namespace App\Livewire\Wall;

use Livewire\Component;

class Index extends Component
{
  public $posts = [];

  public function mount()
  {
    $this->posts = [
      [
        'id' => 1,
        'user' => [
          'name' => 'Juan Pérez',
          'photo' => 'https://i.pravatar.cc/150?img=1'
        ],
        'content' => 'Increíble día para compartir con amigos 🌞',
        'image' => 'https://picsum.photos/600/400?random=1',
        'video' => null,
        'views' => 1234,
        'created_at' => now()->subMinutes(15)->diffForHumans(),
      ],
      [
        'id' => 2,
        'user' => [
          'name' => 'Laura Ocampo',
          'photo' => 'https://i.pravatar.cc/150?img=8'
        ],
        'content' => '¡Nuevo video del proyecto en el que estoy trabajando!',
        'image' => null,
        'video' => 'https://www.w3schools.com/html/mov_bbb.mp4',
        'views' => 847,
        'created_at' => now()->subHours(2)->diffForHumans(),
      ],
      [
        'id' => 3,
        'user' => [
          'name' => 'Camila Monzerrate',
          'photo' => 'https://i.pravatar.cc/150?img=5'
        ],
        'content' => '¡Nuevo video del proyecto en el que estuve trabajando! 😃✨✨',
        'image' => null,
        'video' => 'https://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_640x360.m4v',
        'views' => 2349,
        'created_at' => now()->subHours(3)->diffForHumans(),
      ],
    ];
  }

  public function render()
  {
    return view('livewire.wall.index');
  }
}
