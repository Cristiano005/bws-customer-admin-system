<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $selectedPeriod = $request->input('period') ?? 'month';
        $currentDate = Carbon::now();

        if ($selectedPeriod === 'month') {
            $currentMonth = $currentDate->month;
            $customers = Customer::whereMonth('created_at', $currentMonth)->get();
        } else if($selectedPeriod === 'week') {
            $startOfWeek = (clone $currentDate)->startOfWeek();
            $endOfWeek = (clone $currentDate)->endOfWeek();
            $customers = Customer::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();
        } else {
            $customers = Customer::whereDate('created_at', $currentDate)->get();
        }

        $incomeAverage = $customers->avg('income');
        $class = $customers->map(function ($customer) {
            if ($customer->income <= 980) return 'A';
            if ($customer->income <= 2500) return 'B';
            return 'C';
        })->countBy();

        $incomeAverage = Customer::avg('income');
        $customersCount = Customer::where('birth_date', '<=', Carbon::now()->subYears(18))->where('income', '>', $incomeAverage)->count();

        return view('home', [
            'highIncomeAdults' => $customersCount,
            'classes' => $class,
        ]);
    }
}
