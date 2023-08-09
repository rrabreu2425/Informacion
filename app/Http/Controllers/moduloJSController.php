<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process as FacadesProcess;
use Illuminate\Support\Facades\Process;
//use Symfony\Component\Process\Exception\ProcessFailedException;
//use Symfony\Component\Process\Process;

class moduloJSController extends Controller{
    public function printName(){
        $scriptfile='D:\Proyectos\Node\Hola Mundo Node\index.js';
        $result = Process::run('D:\Proyectos\Node\PruebaNode\laravel.js');
        //echo $process->getOutput();
        //echo $scriptfile;
        
        // executes after the command finishes
       // if (!$process->isSuccessful()) {
           // throw new ProcessFailedException($process);
       // }
        
       // echo $process->getOutput();


    //return "Hola mundo";
}
}