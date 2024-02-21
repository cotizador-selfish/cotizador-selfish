<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPages extends Model
{
    protected $table = 'content_pages';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'pages',
        'prices',
        'id_subservices'
    ];
}
