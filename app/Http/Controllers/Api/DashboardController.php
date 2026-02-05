<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function admin()
    {
        return response()->json([
            'message' => 'Welcome Admin Dashboard',
            'access' => 'admin'
        ]);
    }

    public function user()
    {
        return response()->json([
            'message' => 'Welcome User Dashboard',
            'access' => 'user'
        ]);
    }
}
