<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterHome extends Component
{
    public $website_name;
    public function render()
    {
        return view('livewire.register-home');
    }


    public function submit()
    {

        return redirect('register-company?website_name='. $this->website_name);
    }
}
