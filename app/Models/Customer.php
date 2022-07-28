<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    public static $valRules = [
        "title" => ["required", "min:2"],
        "firstName" => ["required", "min:3"],
        "lastName" => ["required", "min:3"],
        "age" => ["required", "numeric"],
        "address" => ["required", "min:3"],
        "sex" => ["required"],
        "phonenumber" => ["required", "numeric"],
        'image' => ['mimes:jpeg,png,jpg,gif,svg'],
    ];

    public function animals() {
        return $this->hasMany('App\Models\Animal','customer_id');
    }

    use HasFactory;
    use SoftDeletes;
    
    protected $dates = ["deleted_at"];

    protected $table = "customers";

    protected $fillable = ['title', 'firstName', 'lastName', 'age', 'address', 'sex', 'phonenumber', 'img_path', 'created_at', 'updated_at','deleted_at'];

    protected $primaryKey = "id";

    protected $guarded = ["id"];

}
