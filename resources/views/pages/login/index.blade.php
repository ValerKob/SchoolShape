@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <form action="adminPanel" method="POST">
        @csrf
        <div class="card">
            <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
        </div>

        <div class="card">
            <h4 style="margin-bottom: 10;">Вход в админ панель!!!</h4>
            <div style="display: flex; margin-top: 10px; border-top: 1px solid #000; padding: 15px 0 0 0;">
                <div style="color: red; ">* Обязательные данные</div>
            </div>
            </p>
        </div>

        <div class="card">
            <?php
            if (isset($message)) {
                echo '<h3 style="color: red;">' . $message . '</h3>';
            }
            ?>
            <div class="card-form">
                <div class="input">
                    <input type="text" class="input-field" name="login" required />
                    <label class="input-label">Логин
                        <span style="color: red;">*</span>
                    </label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="pass" required />
                    <label class="input-label">Пароль
                        <span style="color: red;">*</span></label>
                </div>
            </div>
            <button type="submit" class="action-button">Войти</button>
        </div>
    </form>
</div>

@endsection