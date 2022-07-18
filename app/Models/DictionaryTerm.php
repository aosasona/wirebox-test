<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DictionaryTerm extends Model
{

    use HasFactory;

    protected $table = 'dictionary_terms';


    protected $fillable = [
        'term',
        'description',
    ];


    // Get owner of dictionary term
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Add current user to dictionary term
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }

    public $timestamps = true;
}
