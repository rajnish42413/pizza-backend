<?php

namespace App;
use App\PizzaImage;
use App\PizzaTopping;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';

    public function image()
    {
        return $this->hasOne(PizzaImage::class);
    }
    public function media()
    {
        return $this->hasMany(PizzaImage::class);
    }

    public function toppings()
    {
      return $this->belongsToMany(Topping::class,'pizza_default_toppings','pizza_id','topping_id');
    }


}
