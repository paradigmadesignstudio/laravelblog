<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $noticias = [
            0 => array( 0 => 'Atentado na delegacia', 1 => 'policiais foram atingidos por tiros', 2 => 'img/foto1.jpg'),
            1 => array( 0 => 'Briga no Trasito', 1 => 'depois de fechado no transito, motorista vai para a briga', 2 => 'img/foto2.jpg'),
            2 => array( 0 => 'Escola invadida', 1 => 'Escola é invadida por alunos', 2 => 'img/foto2.jpg'),
        ];
        return view('blog.index', compact('noticias'));
    }

    public function noticias(){

        $titulo = [
            0 => array( 0 => 'Atentado na delegacia', 1 => 'policiais foram atingidos por tiros'),
            1 => array( 0 => 'Briga no Trasito', 1 => 'depois de fechado no transito, motorista vai para a briga'),
            2 => array( 0 => 'Escola invadida', 1 => 'Escola é invadida por alunos'),
        ];

        ksort($titulo);


        return view('blog.noticias', compact('titulo'));
    }

    public function contato(){
        return view('blog.contato');
    }
}
