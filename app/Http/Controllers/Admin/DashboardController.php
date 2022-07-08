<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transactions;

class DashboardController extends Controller
{
    public function index(){
        $customer = User::count();
        $revenue = Transactions::sum('total_price');
        $transaction = Transactions::count();
        return view("pages.admin.dashboard",[
            'customer' => $customer,
            'revenue' => $revenue,
            'transaction' => $transaction
        ]);
    }
}
