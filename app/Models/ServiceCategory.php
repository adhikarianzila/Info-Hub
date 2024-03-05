<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $table = 'serviceCategory';
    protected $primaryKey ='serviceID' ;
    protected $fillable =['serviceName','IsActive','CreatedAt','ModifiedAt'];
}
