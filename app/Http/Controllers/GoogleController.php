<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Gmail;
use Google_Service_Tasks;

class GoogleController extends Controller
{
    public function calendar()
    {
        // TODO: Fetch Google Calendar events
        return view('calendar', ['events' => []]);
    }

    public function email()
    {
        // TODO: Fetch Gmail emails
        return view('email', ['emails' => []]);
    }

    public function todos()
    {
        // TODO: Fetch Google Tasks
        return view('todos', ['tasks' => []]);
    }
}
