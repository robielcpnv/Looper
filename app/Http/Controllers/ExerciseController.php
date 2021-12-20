<?php

namespace App\Http\Controllers;

use App\Support\View;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\Exercise;
use App\Models\Line;
use ReflectionException;

class ExerciseController extends Controller
{

    /**
     * @param View $view
     * @return Response
     */
    public function index(View $view): Response
    {
        $exercisesAnswering = Exercise::state(2);
        $this->displayStyle('', 'purple');
        return $view('exercises.take', compact('exercisesAnswering'));
    }

    /**
     * @param View $view
     * @param int $id exercise id
     * @return Response
     * @throws ReflectionException
     */
    public function show(View $view, int $id): Response
    {
        $lines = Line::all();
        $exercise = Exercise::find($id);
        $this->displayStyle($exercise->title, 'yellow');
        return $view('fields.create', compact('exercise', 'lines'));
    }

    /**
     * @param View $view
     * @return Response
     */
    public function create(View $view): Response
    {
        $last = array_key_last(Exercise::all()) + 2; //return last exercise id
        $this->displayStyle('New exercise', 'yellow');
        return $view('exercises.create', compact('last'));
    }

    /**
     * @param View $view
     * create new Exercise with Building state
     */
    public function store(View $view,): void
    {
        $exerciseId = Exercise::make(['title' => $_REQUEST['title'], 'states_id' => 1])->create();
        $this->redirect("/exercises/$exerciseId/fields");
    }

    /**
     * @param View $view
     * @return Response
     */
    public function edit(View $view): Response
    {
        $exercisesBuilding = Exercise::state(1);
        $exercisesAnswering = Exercise::state(2);
        $exercisesClosed = Exercise::state(3);
        $this->displayStyle('', 'green');
        return $view('exercises.manage', compact('exercisesBuilding', 'exercisesAnswering', 'exercisesClosed'));
    }

    /**
     * @param View $view
     * @param int $id exercise id
     * @throws ReflectionException
     */
    public function update(View $view, int $id): void
    {
        //if the fields is empty
        if (empty(Exercise::find($id)->fields())) {
            $this->redirect("/exercises/$id/fields"); // redirect to same page
        } else {
            Exercise::changeState($id);
            $this->redirect('/exercises');
        }
    }

    /**
     * @param View $view
     * @param int $id exercise id
     */
    public function destroy(View $view, int $id): void
    {
        Exercise::remove($id); //remove exercise with state_id 1 or 3
        $this->redirect('/exercises');
    }
}
