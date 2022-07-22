<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";

    //$fillable  ويعني انه اي اسم حقل يوجد هنا سيقوم بالنظر اليه واسناد قيمه له

    protected $fillable = ['name', 'price', 'details', 'created_at', 'updated_at'];

    // في حاله قمنا بعمل استعلام لكل الحقول
    //select * form offers
    // ماراح يتم استدعاء الحقول الموجودة في الهيدين hidden
    protected $hidden = ['created_at','updated_at']; //

    public $timestamps = false;
}
