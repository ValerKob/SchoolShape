<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
