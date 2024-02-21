<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteFeacture extends Model
{
    protected $table = 'website_feature';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'img',
        'title',
        'description',
        'price',
        'id_subservices'
    ];
}
