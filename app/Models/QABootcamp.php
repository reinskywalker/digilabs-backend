<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class QABootcamp extends Model
{
    use HasFactory;

    protected $table = 'qa_bootcamps'; 
    protected $keyType = 'string';
    public $incrementing = false; 

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone_number',
        'has_whatsapp',
        'experience',
        'expectation',
        'province',
        'regency',
        'district',
        'village',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
