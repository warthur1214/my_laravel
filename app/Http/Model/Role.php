<?php
/**
 * Created by PhpStorm.
 * User: warthur
 * Date: 17/5/7
 * Time: 下午2:50
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "tp_role";
    public $primaryKey = "role_id";

    public $role_id;
    public $role_name;
    public $role_depict;
    public $organ_id;
    public $update_time;
    public $create_time;

}