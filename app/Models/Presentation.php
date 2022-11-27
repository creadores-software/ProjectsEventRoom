<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'event_id',
        'name',
        'description',
        'url',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function owners()
    {
        return $this->belongsToMany(User::class);
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }
}
