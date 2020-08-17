<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     protected $fillable = ["Frenchise_name","Frenchise_code","Frenchise_address","Frenchise_contactno","Frenchise_email","Frenchise_password","Frenchise_contactperson_name","Frenchise_contactperson_number","Frenchise_accountno","Frenchise_IFSC_code","Frenchise_accountholder_name","Frenchise_bankname"];
}
