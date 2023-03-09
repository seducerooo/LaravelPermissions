<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
                                                       /*               */
                                                    /* role security table */
                                                       /*               */
    protected $table ='roles';



                                                       /*                  */
                                                    /* Role Fill able Columns */
                                                       /*                  */
    protected $fillable =
        [
            'name',
            'slug',
        ];

                                                       /*                   */
                                                    /* permission relationship */
                                                       /*                   */
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }


                                                          /*             */
                                                       /* User relationship */
                                                          /*             */
    public function users(){
        return $this->hasMany(User::class);
    }
}
