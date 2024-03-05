<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceContent extends Model
{
    protected $table = 'serviceContent';
    protected $primaryKey ='ContentID' ;
    protected $fillable =['serviceID','Content'];
}
