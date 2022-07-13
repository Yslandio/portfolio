<div class="row justify-content-around px-2 gap-3 py-4">
    <div class="col-12 d-flex flex-wrap justify-content-center py-3 mb-2 rounded-2 bg-box-1 gap-2">
        <input class="form-control w-auto" type="text" placeholder="Pesquisar" wire:model="search"
            wire:keyup="filterProjects()">
        <select class="form-select w-auto" name="technology" wire:model="technology" wire:click="filterProjects()">
            <option value="" selected>Todos</option>
            <option value="Laravel">Laravel</option>
            <option value="Bootstrap">Bootstrap</option>
            <option value="Jogo">Jogo</option>
        </select>
    </div>

    @forelse ($projects as $project)
        <div class="col-auto py-3 rounded-2 bg-box-1 project">
            <div class="project-img">
                <img src="{{ asset('assets/images/projects/' . $project['images'][0]) }}"
                    class="d-block w-100 border border-1 border-dark"
                    alt="Imagem do projeto {{ $project['name'] }}">
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2 w-100">
                <h5 class="fw-bold">{{ $project['name'] }}</h5>
                <button class="btn bg-btn-2 fw-bold show-project"
                    wire:click="showProject({{ json_encode($project) }})">Ver Mais</button>
            </div>
        </div>
    @empty
        <div class="col-12 alert alert-danger">
            <h5 class="text-center text-black">Nenhum projeto encontrado!</h5>
        </div>
    @endforelse
</div>
