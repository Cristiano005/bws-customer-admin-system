@extends('template')

@section('content')
    <section class="container mx-auto">
        <div class="row gap-4">
            <header class="d-flex justify-content-between align-items-center flex-wrap col-12">
                <h3>Clientes</h3>
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
@endsection
