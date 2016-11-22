<?php

namespace App\Http\Controllers;

use Log;
use Request;
use Input;
use Session;
use Redirect;

use App\Http\Controllers\Controller;
use App\Repositories\CompanyTypeRepositoryEloquent;
use Illuminate\Support\Facades\Lang;
use Prettus\Validator\Exceptions\ValidatorException;

class CompanyTypeController extends Controller
{
    protected $repository;
    protected $request;
    
    public function __construct(CompanyTypeRepositoryEloquent $repository)
    {
//        $this->middleware('auth');
//        $this->middleware('acl');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $companytype = $this->repository->all();
        
        if (Request::isJson()) {
            return $companytype;
        }
        
        return view("companytype.index", compact('companytype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $companytype = new \App\Entities\CompanyType();
        return view("companytype.edit", compact('companytype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $this->repository->validator();
            $this->repository->create(Input::all());
            Session::flash(
                'message',
                Lang::get(
                    'general.succefullcreate',
                    ['table'=> Lang::get('general.City')]
                )
            );
            return Redirect::to('companytype');
            
        } catch (ValidatorException $e) {
            return Redirect::back()->withInput()
                    ->with('errors', $e->getMessageBag());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $countries = Country::lists('name', 'id');
        $states = State::lists('name', 'id');
        $city = $this->repository->find($id);
        ;
        return view("companytype.edit", compact('companytype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->repository->validator();
            $this->repository->update(Input::all(), $id);
            Session::flash( 'message',
                            Lang::get( 'general.succefullupdate',
                                    ['table'=> Lang::get('general.CompanyType')]
            ));

            return Redirect::to('companytype');

        } catch (ValidatorException $e) {
            return Redirect::back()->withInput()
                    ->with('errors', $e->getMessageBag());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Log::info('Delete companytype: '.$id);

        if ($this->repository->find($id)) {
            $city = $this->repository->delete($id);
            Session::flash('message', Lang::get("general.deletedregister"));
        }

        return Redirect::to('companytype');
    }

}