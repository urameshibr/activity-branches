<?php

namespace Urameshibr\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityBranch extends Model
{
    protected $table = 'activity_branches';
    protected $fillable = ['name'];
    public $timestamps = false;
    protected $relations = [];
}
