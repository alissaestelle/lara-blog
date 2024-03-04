<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /*

    protected $fillable = [
        'title',
        'url',
        'published',
        'excerpt',
        'body',
    ]

    */

    function author()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    function tag()
    {
        return $this->belongsTo(Tag::class, 'tagID');
    }

    /*

    This method specifies the attribute that should be used to find a Post instance.
    A URL param isn't needed for this method as long as the object attribute matches the one configuration in the method below.

    function getRouteKeyName()
    {
        return 'url';
    }

    */

}