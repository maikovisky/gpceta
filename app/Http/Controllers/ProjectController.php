<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Repositories\ProjectRepositoryEloquent;

use \Prettus\Validator\Exceptions\ValidatorException;

class ProjectController extends Controller
{
    
    /**
     * @var PostRepository
     */
    protected $repository;

    public function __construct(ProjectRepositoryEloquent $repository) {
        $this->repository = $repository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = $this->repository->all();
        return view('project.index', compact(array('projects')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
 
        try {
            $this->repository->validator();
            $project = $this->repository->create(Input::all());

            return Response::json([
                'message'=>'Post created',
                'data'   =>$project->toArray()
            ]);
        }
        catch (ValidatorException $e) 
        {
            return Response::json([
                'error'   =>true,
                'message' =>$e->getMessageBag()
            ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function getUser($id, $user_id) 
    {
        dd($user_id);
    }
    
    public function users($id)
    {
        dd($id);
    }
    
    public function resources($id)
    {
        $project = Project::find($id);
        return view('project.resources', compact('project'));
    }
}
