<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public $search='';

     public function delete($id){
        $sensor = Sensor::find($id);

        if($sensor != null){
            $sensor->delete();
            session()->flash('success', 'Sensor Excluído');
        }

     }

     public function status($id){
        $sensor = Sensor::find($id);
        $sensor->status = !$sensor->status;
        $sensor->save();
     }

    public function render()
    {
        $sensores = Sensor::where('codigo', 'like', '%'.$this->search.'%')->get();
        return view('livewire.sensores.sensor-index', compact('sensores'));
    }
}
