<?php

namespace App\Models;
use App\Models\News;
use App\Models\Author;
use App\Models\authors_news;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authors_news extends Model
{
    use HasFactory;
    protected $table = "authors_news";
    protected $fillable = ['author_id','news_id'];
    
}
