<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_passwords';
    
    public function PasswordsUser(){
        return $this->belongsTo(UserModel::class,'userId');
    }
}
