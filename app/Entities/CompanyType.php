<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CompanyType extends BaseModel implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;
    protected $fillable = ['name'];

}

