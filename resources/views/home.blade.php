@extends('template')

@section('content')
    <x-customer.add_modal />
    <section class="container mx-auto">
        <div class="row gap-4">
            <header class="d-flex justify-content-between align-items-center flex-wrap col-12">
                <h3>Customers</h3>
                <div class="d-flex align-items-center gap-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <form action="/" method="GET">
                            <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ request('search') }}">
                        </form>
                    </div>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#customerModal">
                        Add customer
                        <i class="bi bi-plus-circle"></i>
                    </button>
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
