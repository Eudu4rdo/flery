<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Restaurants extends Model
{
    use HasFactory;
    protected $table = 'restaurantes';

    public static function getAll(): array{
        return DB::select('select * from restaurantes');
    }

    public static function getById(int $id): object{
        $restaurant= DB::select('select * from restaurantes where id= :id', ['id'=>$id]);
        //dd($restaurant);
        if (count($restaurant) > 0)
            return $restaurant[0];
        else   
            return null;
    }

}
