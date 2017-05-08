<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/12
 * Time: 18:18
 */

namespace App\Http\Service;

use App\Http\Dao\AccountDao;
use App\Http\Model\Account;

class AccountService
{
	public static function getAllAccount()
	{
	    $accounts = Account::all();
        foreach ($accounts as $account) {
            dump($account->account_name);
	    }
	}

	public static function getInfo()
    {
        $accounts = AccountDao::getInfo();

        foreach ($accounts as $account) {
            dump($account);
        }

    }

    public static function getList()
    {
        $accounts = AccountDao::getList();
        foreach ($accounts as $account) {
            dump($account->display_name);
        }
    }
}