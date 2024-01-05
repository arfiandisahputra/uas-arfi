<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $table = "tb_kos";

    protected $primaryKey = "kos_id";

    protected $guarded = [];
}
