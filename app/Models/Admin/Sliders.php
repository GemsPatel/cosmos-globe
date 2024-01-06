<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    use HasFactory;

    public function category(){
        return $this->hasOne( Categories::class, 'id', 'category_id' );
    }

    public function sliderType(){
        return $this->hasOne( SliderTypes::class, 'id', 'slider_type_id' );
    }
}
