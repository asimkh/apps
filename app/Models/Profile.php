<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Model
{
    //


	use SyncableGraphNodeTrait;

	// protected static $graph_node_date_time_to_string_format = 'c'; # ISO 8601 date
    protected static $graph_node_fillable_fields = ['about','birthday', 'gender','home_town','location','timezone', 'photo',];


    protected static $graph_node_field_aliases = [
        
        'gender' => 'gender',
        'picture.url' => 'photo',
        'about'     => 'about',
        'birthday'     => 'birthday',
        'hometown.name' => 'home_town',
        'location.name'  => 'location',
        'timezone' => 'timezone',



    ];

	protected $table ='profiles';

	 protected $fillable = [
       'id', 'about','birthday', 'home_town','location','timezone', 'photo','gender',
    ];

      public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

     


}
