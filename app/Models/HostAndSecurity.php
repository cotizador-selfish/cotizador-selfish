<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostAndSecurity extends Model
{
    protected $table = 'hostandsecurity';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'img',
        'title',
        'description',
        'price',
        'sub_img',
        'sub_title',
        'sub_description',
        'banner',
        'discount_hs',
        'id_subservices'
    ];
}
