<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $name, $lastname;

    public function UpdateProfile(){
        //dd(auth()->user());
        User::where('id',auth()->user()->id)
        ->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            //'email' => $this->email,
            'phone_number' => $this->phone_number,
            'department' => $this->department
        ]);
    }

    public function mount(){
        $this->name = auth()->user()->name;
        $this->lastname = auth()->user()->lastname;
    }
    public function render()
    {
        
        return view('livewire.profile');
    }
}
