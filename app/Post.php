<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends \TCG\Voyager\Models\Post
{
  public function scopeNewestFirst($query)
  {
    return $query->orderBy('created_at', 'desc');
  }

  public function url()
  {
    $year = $this->created_at->year;
    $month = $this->created_at->format('m');
    return url("/{$year}/{$month}/{$this->slug}");
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'author_id', 'id');
  }
}
