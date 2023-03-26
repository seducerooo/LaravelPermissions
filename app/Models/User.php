<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
                                        /*               */
                                     /* user security table */
                                        /*               */
    protected $table ='users';
                                        /*                  */
                                     /* User Fill able Columns */
                                        /*                  */
    protected $fillable =
        [
            'role_id',
            'name',
            'email',
            'password',

        ];

                                             /*             */
                                          /* role relationship */
                                             /*             */
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function hasRole(){

    }

                                              /*             */
                                           /* post relationship */
                                              /*             */
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
