<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessFile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request, User $user)
    {
        $data = $request->all();
        User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => $data['password'],
            'picture'   => 'teste.jpg'
        ]);
        $request->file('picture')->store('pictures');
        return redirect()->back()->with('success', 'Usuário Cadastrado com sucesso');
    }

    public function write()
    {
        return view('mensagens');
    }

    public function writeMessage(Request $request)
    {
        $data = $request->except('_token');


        ProcessFile::dispatch($data);
        

        return redirect()->back();
    }
}
