<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllExample extends Controller
{
    public function begin() {
        $users=[['id' => '3409', 'name' => 'Ivan Javier Pardo Toloza'],['id' => '1930', 'name' => 'Juan Jose Pardo Paipa']];
        return view('app.example',['users' => $users]);
    }
}
