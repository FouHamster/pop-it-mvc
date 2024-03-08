<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Staff
{
    public $timestamps = false;
    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'gender',
        'dateOfBirth',
        'postID',
        'residenceAddress',
        'divisionID',
        'staffCompositionID'
    ];

    protected $primaryKey = 'staffID';

}