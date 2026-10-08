<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 mt-0">Sensores Cadastrados</h2>
        <div class="d-flex gap-2">
            <a class="btn btn-secondary" style="background-color:rgb(133, 72, 194)"
                href="{{ route('sensor.create') }}">Novo Sensor</a>
        </div>
    </div>
    <div class="mt-5">
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ambiente</th>
                    <th scope="col">Código</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sensores as $s)
                    <tr>
                        <th scope="row">{{ $s->id }}</th>
                        <td>{{ $s->ambiente->nome }}</td>
                        <td>{{ $s->codigo }}</td>
                        <td>{{ $s->tipo }}</td>
                        <td>{{ $s->descricao }}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="status-{{ $s->id }}" wire:click="status({{ $s->id }})"
                                    @checked($s->status)>
                                <span class="badge bg-{{ $s->status ? 'success' : 'danger' }}">
                                    {{ $s->status ? 'ATIVO' : 'INATIVO' }}
                                </span>
                            </div>
                        </td>

                        <td>
                            <a href="{{ route('sensor.edit', ['id' => $s->id]) }}"
                                class="btn btn-sm btn-info">Editar</a>

                            <button wire:click='delete({{ $s->id }})'
                                class="btn btn-sm btn-danger">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
