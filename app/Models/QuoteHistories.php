<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteHistories extends Model
{
    protected $table = 'quote_histories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'ip_address',
        'cookie',
        'id_service'
    ];

    public function services()
    {
        return $this->belongsTo(Services::class, 'id_service,ID');
    }
}
