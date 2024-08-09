<?php

namespace App\Livewire;

use Livewire\Component;

class App extends Component
{
  public function click()
  {
    dump('clicked');
  }
  public function render()
  {
    return view('livewire.app');
  }
}
