<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/5/8
 * Time: 13:23
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public $timestamps = false;
    public $incrementing = true;
    protected $dateFormat = 'Y-m-d H:i:s';

}