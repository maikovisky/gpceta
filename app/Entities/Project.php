<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Project extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name', 'status', 'completed', 'description',
        'start_at', 'finish_preview_at', 'finish_at', 'created_by',
        'updated_by'];
    
    protected $attributes = [
        'status' => '1',
    ];
    
    protected $dates = [
        'start_at', 'finish_preview_at', 'finish_at'
    ];

    public function setStartAtAttribute($date) 
    {
        $this->attributes['start_at'] = Carbon::createFromFormat('d/m/Y', $date);
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    public function updated_by()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

}
