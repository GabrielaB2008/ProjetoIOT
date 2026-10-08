<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function store(){
        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status ? true:false
        ]);

        session()->flash('success', 'Sensor Cadastrado');
        return redirect()->route('sensor.index');

    }

    public function render()
    {
        return view('livewire.sensores.sensor-create');
    }
}
