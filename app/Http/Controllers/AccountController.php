<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function __construct() {}

    public function show($id)
    {
        return Account::findOrFail($id);
    }

    public function create(Request $request)
    {
        // Create in tb_user too and accounts
        $account = new Account;
        // TODO
        // ffaccount/accounts : id, username, password, realname
        // ffmember/tb_user : mid (accounts.username), password, pwd (md5(password)), idnum (accounts.id), regdate (now()), memberid (accounts.id)
        $account->save();
    }

    public function update(Request $request, $id)
    {
        // Update in tb_user too and accounts
        $account = Account::findOrFail($id);
        // TODO
        $account->save();
    }

    public function delete($id)
    {
        return Account::findOrFail($id)->delete();
    }
}
