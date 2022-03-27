<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use App\Models\mobile;
class category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Mobiles()
    {
        return $this->hasMany(App\Models\mobile::class);
    }


}
