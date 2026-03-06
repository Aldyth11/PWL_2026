<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    // Mendefinisikan nama tabel yang digunakan
    protected $table = 'm_level';

    // Mendefinisikan primary key (karena Laravel defaultnya mencari 'id')
    protected $primaryKey = 'level_id';
}