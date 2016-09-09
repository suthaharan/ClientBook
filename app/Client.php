<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class Client extends Model
{
    //public $fillable = ['name', 'address1','address2','city','pcode','country','telephone','mobile','workphone', 'fax','primaryemail','altemail','website','description','status'];
    public $fillable = ['name', 'description'];
}
