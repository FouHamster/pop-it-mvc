<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
    ];

    protected $primaryKey = 'roleID';

}