<?php

namespace App\Livewire\Ambientes;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function store(){
        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status ? true:false
        ]);

        session()->flash('success', 'Ambiente Cadastrado');
        return redirect()->route('ambiente.index');

    }

    public function render()
    {
        return view('livewire.ambientes.ambiente-create');
    }
}
