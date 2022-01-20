<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeController extends Controller
{
    public function dashboard()
    {
        switch (FacadesAuth::User()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;
            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
