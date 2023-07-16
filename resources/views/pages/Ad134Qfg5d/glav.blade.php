@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <!-- <div class="card">
        <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
    </div> -->

    <div class="card">
        <h4>Посмотреть все данные на определённое время!!!</h4>
    </div>

    <style>
        .action-button {
            cursor: pointer;
            height: 60px;
            padding: 0;

            /* width: 100px; */
            margin: 15px auto 0;
        }
    </style>

    <div class="card">
        <h5 style="margin-bottom: 0;">Все заявки на 18:00</h5>
        <form action="serachTime" method="post">
            @csrf
            <input type="text" name="typeTime" value="18" class="d-none">
            <button type="submit" class="action-button">Посмотреть</button>
        </form>
    </div>

    <div class="card">
        <h5 style="margin-bottom: 0;">Все заявки на 19:00</h5>
        <form action="serachTime" method="post">
            @csrf
            <input type="text" name="typeTime" value="19" class="d-none">
            <button type="submit" class="action-button">Посмотреть</button>
        </form>
    </div>
</div>


@endsection