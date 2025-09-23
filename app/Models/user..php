<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user. extends Model
{
    use HasFactory;

    protected $tabel = 'user';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(UserModel::class,'kelas_id');
    }
}
