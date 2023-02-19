<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'id', 'name', 'description', 'homepage', 'is_public', 'parent_id', 'author_id', 'identifier', 'status', 'has_shared_budget', 'created_on', 'updated_on', 'lft', 'rgt', 'inherit_members', 'default_version_id', 'default_assigned_to_id'
    ];
}
