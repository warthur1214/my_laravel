<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/10
 * Time: 16:03
 */

namespace App\Http\Model;



class Account extends BaseModel
{
	protected $table = "tp_account";
    public $primaryKey = "account_id";

    public $account_id;
    public $account_name;
    public $display_name;
    public $password;
    public $role_id;
    public $is_available;
    public $organ_id;
    public $organ_channel_id;
    public $login_time;
    public $create_time;
    public $update_time;

}