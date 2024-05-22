<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{

    use HasFactory,SoftDeletes;
    protected $table= 'car_models';

    public function getBrand(){
        return $this-> belongsTo(CarBrand::class,'brad_id','id');
    }

}
