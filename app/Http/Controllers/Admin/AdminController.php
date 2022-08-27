<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Permissions\Permission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $customers = User::where([
            ['is_admin', '!=', true],
        ])->get();
        return view('admin.dashboard', [
            'customers' => $customers
        ]);
    }
}
