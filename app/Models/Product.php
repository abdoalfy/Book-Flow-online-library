<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
class Product extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'user_id',
    ];
    use HasFactory;
    use SoftDeletes;
}
