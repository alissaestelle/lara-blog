<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /*
    The attributes that are mass assignable.
    @var array<int, string>
    */

    protected $guarded = [];

    /*
    The attributes that should be hidden for serialization.
    @var array<int, string>
    */

    protected $hidden = ['password', 'remember_token'];

    /*
    The attributes that should be cast.
    @var array<string, string>
    */

    protected $casts = [
        'verified' => 'datetime',
        'password' => 'hashed',
    ];

    /* ACCESSOR x MUTATORS START */

    /*
    Note: 
    ↳ Accessor/mutator method names must match their corresponding column name in the database, except written in camel case instead of snake case.
    */

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($name) => ucwords($this->format($name)),
            set: fn($name) => ucwords($name)
        );
    }

    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn($url) => strtolower(str_replace(["'", ' '], ['', '-'], $this->format($url))),
            set: fn($url) => strtolower(str_replace(["'", ' '], ['', '-'], $this->format($url)))
        );
    }

    protected function username(): Attribute
    {
        return Attribute::make(
            get: fn($username) => strtolower($username),
            set: fn($username) => strtolower($username)
        );
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            get: fn($email) => strtolower($email),
            set: fn($email) => strtolower($email)
        );
    }

    /* ACCESSOR x MUTATORS END */

    /* RELATIONSHIPS START */

    function posts()
    {
        return $this->HasMany(Post::class, 'userID');
        // ↳ A user/author has many posts.
    }

    /* RELATIONSHIPS END */

    /* ADDITIONAL START */

    function format($data)
    {
        $name = strtr($data, [
            'Dr. ' => '',
            'Miss ' => '',
            'Mister ' => '',
            'Mr. ' => '',
            'Mrs. ' => '',
            'Ms. ' => '',
            'Prof. ' => '',
            '.' => '',
        ]);

        return $name;
    }

    /* ADDITIONAL END */
}
