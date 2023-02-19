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
            'name',
            'email',
            'password',

        ];

                                             /*             */
                                          /* role relationship */
                                             /*             */
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
                                           /*                   */
                                        /* permission relationship */
                                           /*                   */
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
                                              /*             */
                                           /* post relationship */
                                              /*             */
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
