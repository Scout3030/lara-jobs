<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'email' => 'required|unique:subscriptions,email|max:255',
        ]);

        Subscription::create($request->input());
        $message = __('Successfully subscribed');

        return back()->with(['message' => $message]);
    }
}
