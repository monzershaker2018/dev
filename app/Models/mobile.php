<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class mobile extends Model
{
    use HasFactory;
    protected $guarded  = [];

    public function Categories()
    {
        return $this->belongsTo(App\Models\category::class);
    }


}
