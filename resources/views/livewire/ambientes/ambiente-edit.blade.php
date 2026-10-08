<div class="container">
<h2 class="mt-0">Editar Ambiente</h2>
<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='update'>
  
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
    <input type="text" class="form-control" id="status" wire:model='status'>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
</div>