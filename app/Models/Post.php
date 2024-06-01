<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Joins Author/Tag Tables to Post Obj
    protected $with = ['author', 'tag'];

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
        return $this->belongsTo(User::class, 'authorID');
    }

    function tag()
    {
        return $this->belongsTo(Tag::class, 'tagID');
    }

    function scopeFilter(Builder $query, $filters)
    {
        $author = false;
        $keyword = false;
        $tag = false;

        extract($filters);

        if ($author) {
            $query->whereHas('author', fn($q) => $q->where('url', $author));
        }

        if ($keyword) {
            $query->where(
                fn($q) => $q
                    ->where('title', 'LIKE', "%{$keyword}%")
                    ->orWhere('body', 'LIKE', "%{$keyword}%")
            );
        }

        if ($tag) {
            $query->whereHas('tag', fn($q) => $q->where('url', $tag));
        }
    }

    /*
    General Notes

    getRouteKeyName() specifies the attribute that should be used to find a Post instance.
    A URL param isn't needed for this method as long as the object attribute matches the one configuration in the method below.
   
    function getRouteKeyName()
    {
        return 'url';
    }
    */
}
