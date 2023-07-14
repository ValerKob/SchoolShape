@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <!-- code here -->
    <div class="card">
        <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
    </div>

    <div class="card">
        <h4 style="margin-bottom: 0;">Вы записаны на {{ $dataZa }}.08.2023, будем вас ждать в {{ $typeTime }}:00, по адресу: г. Архангельск, территориальный округ Майская горка ул.<br>
            Карпогорская, д. 36</h4>
        </p>
    </div>
    <form action="https://ya.ru/" class="text-center">
        @csrf
        <style>
            .action-button {
                cursor: pointer;
                height: 60px;
                padding: 0;

                max-width: 400px;
                margin: 15px auto 0;
            }
        </style>
        <button type="submit" class="action-button">Выход</button>
    </form>

</div>
@endsection