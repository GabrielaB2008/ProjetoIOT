<div class="container">
<h2 class="mt-0">Adicionar Ambiente</h2>
<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='store'>
  
  <div class="col-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" wire:model='nome'>
  </div>

  <div class="col-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea type="text" class="form-control" id="descricao" wire:model='descricao' rows="3"></textarea>
  </div>

  <div class="col-md-12"> 
  <label for="status" class="form-label">Status</label>
  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" wire:model='status' role="switch" id="switchCheckChecked" checked>
</div>
</div>
  
  <div class="col-12 mt-4">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
</div>
