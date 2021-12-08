<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_no',
        'nama_nasabah',
        'amount'
    ];

}
