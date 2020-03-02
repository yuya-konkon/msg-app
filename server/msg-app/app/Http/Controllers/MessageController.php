<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show($name, $msg)
    {
        $data = ['name' => $name, 'msg' => $msg];
        return view('message.show', $data);
    }
}