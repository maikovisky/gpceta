<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Redirect;
use Input;
use Session;
use Flash;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryEloquent;
use \Prettus\Validator\Exceptions\ValidatorException;

class UserController extends Controller
{
    /**
     * @var PostRepository
     */
    protected $repository;

    public function __construct(UserRepositoryEloquent $repository){
        $this->repository = $repository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->repository->all();
        return view("user.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("user.create");
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
  
            $user = $this->repository->create(Input::all() );

            if($request->isJson()) {
                return Response::json([
                    'message'=>'User created',
                    'data'   =>$user->toArray()
                ]);
            } 
            Redirect::to("user.index");
        } 
        catch (ValidatorException $e) {
            if($request->isJson()) {
                return Response::json([
                    'error'   =>true,
                    'message' =>$e->getMessageBag()
                ]);
            }
            Flash::error($e->getMessageBag());
            return back()->withInput();
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
        //
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
}
