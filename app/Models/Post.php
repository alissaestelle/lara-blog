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

    function tag()
    {
        return $this->belongsTo(Tag::class, 'tagID');
    }

    /*

    This method specifies which attribute should be used to find a matching Post.
    A URL param isn't needed for this method as long as the object attribute matches the one configuration in the method below.

    function getRouteKeyName()
    {
        return 'url'
    }

    */
}