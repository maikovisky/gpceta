<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UnitRepository;
use App\Entities\CompanyType;

/**
 * Class UnitRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CompanyTypeRepositoryEloquent extends BaseRepository implements CompanyTypeRepository
{
    
    /*
     * Specify validator rules
     * @var array
     */
    protected $rules = [ ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CompanyType::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
