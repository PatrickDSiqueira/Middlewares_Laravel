<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
    public function index(){
        return'<h3>Lista de usuários</h3>'.
            '<ul>'.
            '<li>João</li>'.
            '<li>Maria</li>'.
            '<li>José</li>'.
            '<li>PEdro</li>'.
            '<li>Abraão</li>'.
            '</ul>';
    }
}
