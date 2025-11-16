@extends('template')

@section('content')
    <div class="container mx-auto">

        <div class="d-flex justify-content-end">
            <div class="btn-group">
                <button type="button" class="btn btn-dark">Período</button>
                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/?period=month') }}">Mês</a></li>
                    <li><a class="dropdown-item" href="{{ url('/?period=week') }}">Semana</a></li>
                    <li><a class="dropdown-item" href="{{ url('/?period=day') }}">Hoje</a></li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-center bg-light mt-3">

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card card-top-border-red"
                    style="border-top: 4px solid rgb(0, 0, 0);
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title text-muted">Acima da Renda Média</h5>
                        <p class="display-5 text-dark fw-bold"> {{ $highIncomeAdults }} </p>
                        <span class="badge bg-dark">Clientes +18 com renda acima da média</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card card-top-border-red"
                    style="border-top: 4px solid rgb(255, 42, 0);
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title text-muted">Clientes Classe A</h5>
                        <p class="display-5 text-dark fw-bold"> {{ $classes['A'] }} </p>
                        <span class="badge bg-danger">Renda ≤ R$980</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card card-top-border-red"
                    style="border-top: 4px solid rgb(255, 225, 0);
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title text-muted">Clientes Classe B</h5>
                        <p class="display-5 text-dark fw-bold"> {{ $classes['B'] }} </p>
                        <span class="badge bg-warning">Entre R$980.01 e R$2500</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card card-top-border-red"
                    style="border-top: 4px solid rgb(52, 130, 0);
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title text-muted">Clientes Classe C</h5>
                        <p class="display-5 text-dark fw-bold"> {{ $classes['C'] }} </p>
                        <span class="badge bg-success">Renda > R$2500</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-3">
            <div class="row gap-4">
                <header class="d-flex justify-content-between align-items-center flex-wrap col-12">
                    <form action="/" class="d-flex" role="search" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                            aria-label="Search" value="{{ request('search') }}" />
                    </form>
                    <div>
                        <a href="/customers/create" class="btn btn-success">
                            Adicionar
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                </header>
            </div>
            <div class="row gap-3 mt-4 mx-auto">
                <x-customer.card :customers="$customers" />
            </div>
            <div class="mt-3">
                @if (request()->query('search'))
                    {{ $customers->appends(['search' => request()->query('search')])->links() }}
                @else
                    {{ $customers->links() }}
                @endif
            </div>
        </section>

    </div>
@endsection
