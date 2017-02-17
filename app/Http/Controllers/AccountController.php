<?php

namespace App\Http\Controllers;

use App\Account;

class AccountController extends Controller
{
    public function __construct() {}

    public function show($id)
    {
        return Account::findOrFail($id);
    }

    public function create()
    {
    }

    public function update($id)
    {
    }

    public function delete($id)
    {
    }
}
