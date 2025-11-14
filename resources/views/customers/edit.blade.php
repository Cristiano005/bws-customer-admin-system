@extends('template')

@section('content')
    <div class="container">
        <header>
            <h2> Editar </h2>
        </header>
        <section class="mt-4">
            <form action="/customers/{{ $customer->id }}" method="POST" class="row gap-3">
                @csrf
                @method('PUT')
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Nome*</label>
                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}" placeholder="Nome"
                        id="name" maxlength="150" required>
                </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">CPF*</label>
                    <input type="text" class="form-control" name="cpf" value="{{ $customer->cpf }}" placeholder="CPF"
                        id="cpf" maxlength="11" pattern="\d{11}" required>
                </div>
                <div>
                    <label for="password" class="form-label">Data*</label>
                    <input type="date" class="form-control" name="birth_date" value="{{ $customer->birth_date }}" placeholder="Data de nascimento"
                        id="birthday_date" required>
                </div>
                <div>
                    <label for="income" class="form-label">Renda familiar</label>
                    <input type="number" class="form-control" name="income" value="{{ $customer->income }}" placeholder="Renda Familiar"
                        id="income" min="0" step="0.01" placeholder="0,00">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success col-auto">Add Customer</button>
                </div>
            </form>
        </section>
    </div>
@endsection
