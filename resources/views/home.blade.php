@extends('template')

@section('content')
    <section class="container mx-auto">
        <div class="row">
            <header class="col-12 mw-30">
                <h3>Customers</h3>
            </header>
        </div>
        <div class="row gap-3 mt-4 mx-auto">
            <x-customer.card :customers="$customers" />
        </div>
    </section>
@endsection
