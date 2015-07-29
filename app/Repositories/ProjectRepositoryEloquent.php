<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Auth;
use App\Entities\Project;

/**
 * Class ProjectRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    protected $rules = [
        'name' => 'min:3|required',
    ];
    
    
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
    
    public function create(array $attributes) {
        $attributes['created_by'] = Auth::user()->id;
        $attributes['updated_by'] = Auth::user()->id;
        return parent::create($attributes);
    }
    
    public function update(array $attributes, $id) {
        $attributes['updated_by'] = Auth::user()->id;
        return parent::update($attributes, $id);
    }
    
  }