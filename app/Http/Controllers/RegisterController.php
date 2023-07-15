<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class RegisterController extends Controller
{
    public function checkDate(RegisterRequest $req)
    {
        $post = DB::table('applications')->get();

        $typeTime = $req->typeTime;
        $dataZa = 1;

        return view('pages.main.index', compact('post', 'typeTime', 'dataZa'));
    }

    public function addCheck(RegisterRequest $req)
    {
        $fio = $req->fio;
        $email = $req->email;
        $tel = $req->tel;
        $dataZa = $req->dataZa;
        $typeTime = $req->typeTime;

        if ($dataZa == 0) {
            $post = DB::table('applications')->get();

            $typeTime = $req->typeTime;

            return view('pages.main.index', compact('post', 'typeTime', 'dataZa'));
        }

        DB::table('applications')->insert(['fio' => $fio, 'email' => $email, 'tel' => $tel, 'dataZa' => $dataZa, 'typeTime' => $typeTime]);

        return view('pages.final.index', compact('dataZa', 'typeTime'));
    }

    public function adminPanel(RegisterRequest $req)
    {
        $login = $req->login;
        $pass = $req->pass;

        if ($login == 'TGFtYU5A' && $pass == '%#H9.@1345') {
            return view('pages.Ad134Qfg5d.glav');
        } else {
            $message = 'Не верные данные!!!';
            return view('pages.login.index', compact('message'));
        }
    }

    public function serachTime(RegisterRequest $req)
    {
        $typeTime = $req->typeTime;
        if ($typeTime == 18) {
            $post = DB::table('applications')->get();
            return view('pages.Ad134Qfg5d.index', compact('post', 'typeTime'));
        } else {
            $post = DB::table('applications')->get();
            return view('pages.Ad134Qfg5d.index', compact('post', 'typeTime'));
        }
    }

    public function deleteUser(RegisterRequest $req)
    {
        $id = $req->deleteUser;
        $typeTime = $req->typeTime;

        DB::table('applications')->delete($id);

        $post = DB::table('applications')->get();
        return view('pages.Ad134Qfg5d.index', compact('post', 'typeTime'));
    }
}
