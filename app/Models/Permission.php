<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
                                          /*                     */
                                       /* permission security table */
                                          /*                     */
    protected $table ='permissions';



                                         /*                        */
                                      /* Permission Fill able Columns */
                                         /*                        */
    protected $fillable =
        [
            'name',
            'slug'

        ];
                                                /*             */
                                             /* role relationship */
                                                /*             */
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

                                                 /*             */
                                              /* User relationship */
                                                 /*             */
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
