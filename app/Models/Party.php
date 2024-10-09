<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    //  Table Name
    protected $table = "parties";

    // Primary Key
    protected $primaryKey = "id";

    // Fillable columns
    protected $fillable = array("full_name", "phone_number", "address", "city");
}
