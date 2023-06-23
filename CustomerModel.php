<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerModel extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table='_customers';  
    protected $primaryKey='customer_id';
    protected $fillable = [
        'name','email','password',
    ];

    public function getNameAttribute($value){
        // $this->attributes['name']= ucwords($value);
        return ucwords($value);
    }
}