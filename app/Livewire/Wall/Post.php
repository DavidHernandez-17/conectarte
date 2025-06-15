<?php

namespace App\Livewire\Wall;

use Livewire\Component;

class Post extends Component
{
  public $post;

  public function render()
  {
    return view('livewire.wall.post');
  }
}
