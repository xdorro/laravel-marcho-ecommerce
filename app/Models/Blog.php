<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Blog extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use Cachable;

    protected $fillable = [
        'user_id', 'name', 'slug', 'image', 'description', 'body', 'status',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->whereNull('parent_id');
    }
}
