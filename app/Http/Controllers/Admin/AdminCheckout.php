<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class AdminCheckout extends Controller
{
    public function update(Request $request,Checkout $checkout)
    {
        $checkout->is_paid = 1;
        $checkout->save();
        $request->session()->flash('success',"Kelas dengan Nama user : {$checkout->User->name}, yang mengambil kelas belajar {$checkout->Camp->title} telah terkonfirmasi!");
        return redirect(route('admin.dashboard'));
    }
}
