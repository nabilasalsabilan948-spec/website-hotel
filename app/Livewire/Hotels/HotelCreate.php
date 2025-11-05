<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelCreate extends Component
{
    #[Title('Create Hotel')]


    #[Validate('required',message:'field nama harus di isi')]
    #[Validate('min:3',message:'field nama harus di isi dengan 3 karakter')]
    public $name;
    #[Validate('required')]
    public $phone;
    #[Validate('email')]
    public $email;
    #[Validate('required')]
    public $address;
    #[Validate('required|numeric')]
    public $stars;
    #[Validate('required')]
    public $check_in_time;
    #[Validate('required')]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }
    public function create(){
        $this->validate();
        Hotel::create($this->all());
        
        return $this->redirect('/hotels',navigate:true);
    }
}
