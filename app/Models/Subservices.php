<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;

class Subservices extends Model
{
    protected $table = 'subservices';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'img',
        'service',
        'description',
        'id_service'
    ];

    public function Services()
    {
        return $this->belongsTo(Services::class, 'ID');
    }

    public function content_pages()
    {
        return $this->hasMany(ContentPages::class, 'id_subservices');
    }

    public function website_feacture()
    {
        return $this->hasMany(WebsiteFeacture::class, 'id_subservices');
    }

    public function content_writing()
    {
        return $this->hasMany(ContentWriting::class, 'id_subservices');
    }

    public function hostandsecurity()
    {
        return $this->hasMany(HostAndSecurity::class, 'id_subservices');
    }
}
