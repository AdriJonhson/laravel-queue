<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessEmail;
use App\Mail\EmailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class EmailController extends Controller
{
    public function sendMail(Request $request)
    {

        $data = $request->except('_token');

        ProcessEmail::dispatch($data);

        //ProcessEmail::dispatch($data)->delay(now()->addMinutes(1));

        return redirect()->back()->with('success', 'E-Mail enviado com sucesso');

    }
}
