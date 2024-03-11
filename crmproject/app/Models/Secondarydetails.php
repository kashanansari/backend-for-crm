<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondarydetails extends Model
{
    use HasFactory;
    protected $table='secondary_device';
    protected $fillable=[
        'client_id',
        'reg_no',
        'primary_device',
        'technical_id',
        'secondary_device',
        'reg_no',
        'customer_name'

    ];

}
