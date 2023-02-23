<?php

namespace Newindianic\ArticleData\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use HasFactory, Notifiable;
    protected $casts = [
        'article_published_date' => 'datetime:m-d-Y',
    ];
}
