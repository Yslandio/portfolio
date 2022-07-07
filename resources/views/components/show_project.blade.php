<div class="row py-4">
    <div class="col-auto py-3 rounded-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($show_project['images'] as $key => $image)
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
            <h3 class="fw-bold">{{ $show_project['name'] }}</h3>
            <div class="d-flex flex-wrap justify-content-between gap-2">
                <a class="btn bg-btn-1 fw-bold" href="{{ url($show_project['github']) }}" target="_blank">GitHub</a>
                <a class="btn bg-btn-2 fw-bold" href="{{ url($show_project['replit']) }}" target="_blank">Acessar</a>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row py-4">
    <div>
        <h3 class="fw-bold mb-2">Descrição</h3>
        <h4 style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;
            {{ $show_project['description'] }}
        </h4>
    </div>
</div>
