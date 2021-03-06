<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \Illuminate\Support\Str;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'body'];

    protected $appends = ['date', 'excerpt'];

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->create_at)->translatedFormat('d F Y');
    }

    public function getExcerptAttribute()
    {
        return Str::words($this->body, 17);
    }
}
