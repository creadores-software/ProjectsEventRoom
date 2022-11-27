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
        'version_id',
        'name',
        'description',
        'url',
    ];

    public function version()
    {
        return $this->belongsTo(Version::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class)
            ->using(KeywordPresentation::class);
    }
}
