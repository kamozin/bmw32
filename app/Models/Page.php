<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected  $tabla='pages';
    protected $fillable = [
        'title', 'url', 'title_meta', 'keywords', 'description', 'text', 'parent_id', 'block_id', 'display_page'
    ];
}
