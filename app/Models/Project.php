<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $primarykey = 'id';
    protected $fillable = ['project_title', 'project_type', 'number_of_panel'];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->status_id = 2;
        });
    }

    public function getStatus()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
}
