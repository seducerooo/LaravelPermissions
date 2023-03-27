<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public const Is_User = 1;
    public const Is_Admin = 2;
    public const Is_Editor = 4;
    public const Is_Support = 5;
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
