<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subservices;

class Services extends Model
{
    protected $table = 'services';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'service',
        'img',
        'description',
        'price'
    ];

    public function subservices()
    {
        return $this->hasMany(Subservices::class, 'id_service');
    }

    public function quote_histories()
    {
        return $this->belongsTo(QuoteHistories::class, 'id_service');
    }
}
