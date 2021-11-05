<?php

namespace App\Http\Controllers;

use App\Support\View;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\Exercise;

class ExerciseController
{
    public function take(View $view): Response
    {
        $title = '';
        $color = 'purple';
        $exercises =Exercise::all();
        return $view('main.take',compact('title','color','exercises'));
    }

    public function create(View $view): Response
    {
        $title = 'New exercise';
        $color = 'yellow';
        return $view('main.create',compact('title','color'));
    }
    public function manage(View $view): Response
    {
        $title = '';
        $color = 'green';
        return $view('main.manage',compact('title','color'));
    }
}
