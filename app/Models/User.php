<?php

namespace App\Models;

use Auth;
use App\Models\Profile;
use Illuminate\Foundation\Auth\User as Authenticatable;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;

class User extends Authenticatable
{
    use SyncableGraphNodeTrait;
    
    protected static $graph_node_date_time_to_string_format = 'c'; # ISO 8601 date
    protected static $graph_node_fillable_fields = ['firstname', 'lastname','email', 'password','facebook_user_id',];

    protected static $graph_node_field_aliases = [
        'id' => 'facebook_user_id',
        'first_name' => 'firstname',
        'last_name' => 'lastname',
        'email' => 'email',

    ];

    protected $table ='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'firstname', 'lastname','email', 'password','facebook_user_id',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

      public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }
}
