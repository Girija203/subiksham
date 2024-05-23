<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable=[
     
       'category_id',
        'name',
        'image',
        'status',  
    ];

    public function imageCategory()
    {
        return $this->belongsTo(ImageCategory::class, 'category_id');
    }
}
