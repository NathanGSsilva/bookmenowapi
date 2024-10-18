@extends('layouts.site')


@section('conteudo')
    <section id="secaoCategorias">
        <div class="secao-titulo">
            <div class="titulo">
                <h2>Categorias</h2>
                <a href="#">Ver mais ></a>
            </div>
            <p>Encontre Profissionais na Categoria Desejada</p>
        </div>

        <div class="lista-card-categorias owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('img/categoria-carro.jpg') }}" alt="carro">
                <span>Mecânico</span>
            </div>
            <div class="item">
                <img src="{{ asset('img/categoria-carro.jpg') }}" alt="carro">
                <span>Mecânico</span>
            </div>
            <div class="item">
                <img src="{{ asset('img/categoria-carro.jpg') }}" alt="carro">
                <span>Mecânico</span>
            </div>
            <div class="item">
                <img src="{{ asset('img/categoria-carro.jpg') }}" alt="carro">
                <span>Mecânico</span>
            </div>
            <div class="item">
                <img src="{{ asset('img/categoria-carro.jpg') }}" alt="carro">
                <span>Mecânico</span>
            </div>
            <div class="item">
                <img src="{{ asset('img/categoria-carro.jpg') }}" alt="carro">
                <span>Mecânico</span>
            </div>
        </div>

    </section>

    <section id="secaoServicos">
        <div class="secao-titulo">
            <div class="titulo">
                <h2>Serviços Populares</h2>
                <a href="#">Ver mais ></a>
            </div>
            <p>Descubra nossos serviços mais populares</p>
        </div>

        <div class="lista-card-servicos">

            @foreach ($servicos as $servico)
                <!-- Inicio Card Serviços -->
                <div class="card-servicos">
                    <div class="card-foto">
                        <img src="{{ asset('img/categoria-informatica.jpg') }}" alt="Informatica">

                        <div class="card-foto-legenda">
                            <div class="card-foto-preco">
                                R$ {{ number_format($servico->valor, 2, ',') }}
                            </div>
                            <div class="card-foto-categoria">
                                Informática
                            </div>
                        </div>

                    </div>


                    <div class="card-descricao">

                        <div class="card-titulo">
                            <h3>{{ $servico->titulo }}</h3>
                        </div>

                        <div class="card-avaliacao">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            (5)
                        </div>


                        <div class="card-descricao-legenda">
                            <div class="card-descricao-telefone">
                                <i class="fa-solid fa-phone"></i>
                                {{ $servico->telefone }}
                            </div>
                            <div class="card-descricao.localizacao">
                                {{ $servico->cidade }}
                                <i class="fa-solid fa-location-dot"></i>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Fim Card Serviços -->
            @endforeach

    </section>
@endsection
