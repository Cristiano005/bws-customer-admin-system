@extends('template')

@section('content')
    <div class="container">
        <header>
            <h2> Criar </h2>
        </header>
        <section class="mt-4">
            <form action="/customers/store" method="POST" class="row gap-3">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome*</label>
                    <input type="text" class="form-control" name="name" value="Cris Silva" placeholder="Nome"
                        id="name" maxlength="150" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">CPF*</label>
                    <input type="text" class="form-control" name="cpf" value="11188899915" placeholder="CPF"
                        id="cpf" maxlength="11" pattern="\d{11}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Data*</label>
                    <input type="date" class="form-control" name="birth_date" placeholder="Data de nascimento"
                        id="birthday_date" required>
                </div>
                <div>
                    <label for="income" class="form-label">Renda familiar</label>
                    <input type="number" class="form-control" name="income" value="300" placeholder="Renda Familiar"
                        id="income" min="0" step="0.01" placeholder="0,00">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" form="createCustomerForm">Add Customer</button>
                </div>
            </form>
        </section>
    </div>
@endsection
