<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'name',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function versions()
    {
        return $this->hasMany(Version::class);
    }
}
