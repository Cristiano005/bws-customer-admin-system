@extends('template')

@section('content')
    <section class="container mx-auto">
        <div class="row gap-4">
            <header class="d-flex justify-content-between align-items-center flex-wrap col-12">
                <h3>Customers</h3>
                <div class="d-flex align-items-center gap-3">
                    <button type="button" class="btn btn-outline-success">
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
            {{ $customers->links() }}
        </div>
    </section>
@endsection
