<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $guarded = ['id'];

    // Since migration uses auto-increment id, disable UUID usage
    public $incrementing = true;
    protected $keyType = 'int';

    // Remove boot method for UUID generation

    public function getAllMK()
    {
        return $this->all();
    }

}
