<?php

namespace App\Livewire\Ambientes;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public $search='';

     public function delete($id){
        $ambiente = Ambiente::find($id);

        if($ambiente != null){
            $ambiente->delete();
            session()->flash('success', 'Ambiente Excluído');
        }

     }

     public function status($id){
        $ambiente = Ambiente::find($id);
        $ambiente->status = !$ambiente->status;
        $ambiente->save();
     }

    public function render()
    {
        $ambientes = Ambiente::where('nome', 'like', '%'.$this->search.'%')->get();
        return view('livewire.ambientes.ambiente-index', compact('ambientes'));
    }
}
