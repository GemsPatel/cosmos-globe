<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMs extends Model
{
    use HasFactory;

    public function author(){
        return $this->hasOne( User::class, 'id', 'user_id' );
    }
}
