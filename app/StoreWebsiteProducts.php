<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreWebsiteProducts extends Model
{
    protected $table ="WebsiteProducts";
    protected $connection ="mysqlStore";
    public $timestamps = false;
}
