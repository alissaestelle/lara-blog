<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

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
        return $this->belongsTo(User::class, 'userID');
    }

    function tag()
    {
        return $this->belongsTo(Tag::class, 'tagID');
    }

    function scopeFilter(Builder $query, $filters)
    {
        $key = array_keys($filters);
        extract($filters);

        switch ($key[0]) {
            case 'keyword':
                $query
                    ->where('title', 'LIKE', "%{$keyword}%")
                    ->orWhere('body', 'LIKE', "%{$keyword}%");
                break;
            case 'tag':
                $query->whereHas('tag', fn($q) => $q->where('url', $tag));
                break;
            default:
                break;
        }
    }

    /*
    getRouteKeyName() specifies the attribute that should be used to find a Post instance.
    A URL param isn't needed for this method as long as the object attribute matches the one configuration in the method below.
    */

    /*
    function getRouteKeyName()
    {
        return 'url';
    }
    */
}
