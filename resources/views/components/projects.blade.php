<div class="row justify-content-around px-2 gap-3">
    <div class="col-12 d-flex flex-wrap justify-content-center py-3 mt-4 mb-2 rounded-2 bg-box-1 gap-2">
        <input class="form-control w-auto" type="text" placeholder="Pesquisar" wire:model="search" wire:keyup="filterProjects()">
        <select class="form-select w-auto" name="technology" wire:model="technology" wire:click="filterProjects()">
            <option value="" selected>Todos</option>
            <option value="Laravel">Laravel</option>
            <option value="Bootstrap">Bootstrap</option>
            <option value="Jogo">Jogo</option>
        </select>
    </div>

    @forelse ($projects as $project)
        @php $project = json_decode($project); @endphp

        <div class="col-auto py-3 rounded-2 bg-box-1 carrossel">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carousel-img">
                    @foreach ($project->images as $key => $image)
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/projects/'.$image) }}" class="d-block w-100 border border-1 border-dark" alt="Imagem {{ $key + 1 }} do projeto">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2 w-100">
                <h5 class="fw-bold">{{ $project->name }}</h5>
                <button class="btn bg-btn-2 fw-bold show-project" wire:click="showProject({{ json_encode($project) }})">Ver Mais</button>
            </div>
        </div>
    @empty
        <div class="col-12 alert alert-danger">
            <h5 class="text-center">Nenhum projeto encontrado!</h5>
        </div>
    @endforelse
</div>
