<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class RolesModel extends Model
{
    use HasFactory;
    protected $table = 'roles_models';
    protected $fillable = [
        'name'
    ];
    public function user(){
        return $this->hasOne('App\Models\User','roles_models_id','id');
    }
}
