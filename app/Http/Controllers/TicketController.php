<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.booking-ticket');
    }

    public function booking()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return redirect('/booking-ticket/#sign-in-modal');
        }
    }
}
