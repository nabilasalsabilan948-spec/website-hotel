<?php

namespace App\Livewire\Hotels;

use App\Models\hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

use function Laravel\Prompts\search;

class HotelList extends Component
{
    use WithPagination;
    #[Title('Hotels')]

    public $search;

    public function render()
    {
        return view('livewire.hotels.hotel-list', [
            'hotels' => hotel::where('address','LIKE','%'.$this->search.'%')->paginate(10)
        ]);
    }

    public function delete($id){
        $hotel = hotel::find($id);
        $hotel->delete();
        return $this->redirect('/hotels',navigate:true);
    }

    public function updatingSearch(){
        $this->gotpPage(1);
    }
}
