<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('search')) {
            $customers = Customer::where('name', 'ILIKE', "%{$request->input('search')}%")->paginate(5);
        } else {
            $customers = Customer::paginate(5);
        }

        return view('customers', [
            'customers' => $customers,
        ]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'cpf' => 'required|digits:11',
            'birth_date' => 'required|date',
            'income' => 'nullable|numeric|min:0',
        ]);

        if (Customer::create($validated)) {
            return redirect()->back()->with('success', 'Cliente criado com sucesso!');
        }
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', [
            'customer' => $customer,
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'cpf' => 'required|digits:11',
            'birth_date' => 'required|date',
            'income' => 'nullable|numeric|min:0',
        ]);

        if ($customer->update($validated)) {
            return redirect()->back()->with('success', 'Cliente criado com sucesso!');
        }
    }

    public function destroy(Customer $customer)
    {
        if ($customer->delete()) return redirect()->back()->with('success', 'Cliente deletado com sucesso!');
    }
}
