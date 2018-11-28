<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subscription as Subs;

class SubscriptionController extends Controller
{
    // Save Subscription
    public function subscribe(Request $req)
    {
        Subs::create([
            'email' => $req->input('email'),
        ]);
        return ['success' => true];
    }
}
