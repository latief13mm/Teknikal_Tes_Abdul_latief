<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_no',
        'document_subject',
        'status',
        'remark',
        'create_by',
        'create_at',
        'update_by',
        'update_at'
    ];
}
