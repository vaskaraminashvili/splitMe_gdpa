<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Specialization extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];



    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
