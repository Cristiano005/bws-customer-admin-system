<div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="customerModalLabel">Add Customer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/customers" method="POST" id="createCustomerForm">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome*</label>
                        <input type="text" class="form-control" name="name" value="Cris Silva" placeholder="Nome" id="name"
                            maxlength="150" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CPF*</label>
                        <input type="text" class="form-control" name="cpf" value="11188899915" placeholder="CPF" id="cpf" 
                            maxlength="11" pattern="\d{11}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Data*</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="Data de nascimento" id="birthday_date" required>
                    </div>
                    <label for="income" class="form-label">Renda familiar</label>
                    <input type="number" class="form-control" name="income" value="300" placeholder="Renda Familiar" id="income"  min="0"
                        step="0.01" placeholder="0,00">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="createCustomerForm">Add Customer</button>
            </div>
        </div>
    </div>
</div>
