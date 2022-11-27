<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class KeywordPresentation extends Pivot
{
    // https://laravel.com/docs/9.x/eloquent#events
    // retrieved, creating, created, updating, 
    // updated, saving, saved, deleting, deleted, 
    // trashed, forceDeleted, restoring, restored, 
    // and replicating.

    protected static function booted()
    {
        parent::boot();

        static::created(function ($item) {
            Keyword::find($item->keyword_id)->increment('count');
        });

        static::deleted(function ($item) {
            Keyword::find($item->keyword_id)->decrement('count');
        });

        // static::creating(function ($item) {
        //     dd($item);
        // });
        // static::created(function ($item) {
        //     dd($item);
        // });
        // static::updating(function ($item) {
        //     dd($item);
        // });
        // static::updated(function ($item) {
        //     dd($item);
        // });
        // static::deleted(function ($item) {
        //     dd($item);
        // });
    }
}
