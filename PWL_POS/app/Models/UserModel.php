<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';        // Mendefinisikan nama tabel yang digunakan
    protected $primaryKey = 'user_id';  // Mendefinisikan primary key dari tabel tersebut

    protected $fillable = [
        'level_id',
        'nama',
        'username',
        'password'
    ]; // Mendefinisikan kolom-kolom yang dapat diisi secara massal

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id'); // Mendefinisikan relasi dengan model LevelModel
    }
}