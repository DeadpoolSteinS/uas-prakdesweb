<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskmodel extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TASK';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NAMA_TASK',
        'TEMPAT_PENGUMPULAN',
        'DEADLINE',
        'ID_KATEGORI',
        'ID_STATUS',
        'ID_NOTE',
        'ID_USER',
        'ID_GRUP'
    ];
}
