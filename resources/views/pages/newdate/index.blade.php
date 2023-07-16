@extends('layouts.main')

@section('title', 'Home')

@section('content')

<?php
if (isset($_COOKIE["UserID"])) {

    if ($_COOKIE["UserID"] != 0) {

?>
        <div class="cotainer">
            <div class="card">
                <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
            </div>

            <div class="card">
                <h4 style="margin-bottom: 10;">Вы уже записаны на экскурсию в Среднюю школу № 7, на <?php echo $_COOKIE["UserdataZa"] ?>.08.2023 в <?php echo $_COOKIE["UsertypeTime"] ?>:00 </h4>
                <b>По Адресу:</b> г. Архангельск, территориальный округ Майская горка ул.
                Карпогорская, д. 36<br><br>
                <b>Контакты для справок:</b>
                8 (921) 720 79-69<br><br>
                <b>Email школы:</b> mbous7@inbox.ru
                </p>
            </div>

            <div class="card">
                <h4 style="margin-bottom: 0;">Если вы ходите перезаписаться, изменить данные или выбрать другую дату, то можете нажать на кнопку изменить и ввести новые данные!</h4>
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
                <h5 style="margin-bottom: 0;">Изменить запись</h5>
                <form action="newDate" method="post">
                    @csrf
                    <input type="text" name="id" value="<?php echo $_COOKIE["UserID"] ?>" class="d-none">
                    <button type="submit" class="action-button">Изменить</button>
                </form>
            </div>
        </div>
    <?php
    } else {

    ?>
        <div class="cotainer">
            <div class="card">
                <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
            </div>

            <div class="card">
                <h4 style="margin-bottom: 10;">Запись, на экскурсию в Среднюю школу № 7</h4>
                <b>Адрес:</b> г. Архангельск, территориальный округ Майская горка ул.
                Карпогорская, д. 36<br><br>
                <b>Контакты:</b>
                8 (921) 720 79-69<br><br>
                <b>Email:</b> mbous7@inbox.ru
                </p>
            </div>

            <div class="card">
                <h4 style="margin-bottom: 0;">Выберите удобное для вас время!</h4>
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
                <h5 style="margin-bottom: 0;">Записаться на 18:00</h5>
                <form action="addTime" method="post">
                    @csrf
                    <input type="text" name="typeTime" value="18" class="d-none">
                    <button type="submit" class="action-button">Выбрать</button>
                </form>
            </div>

            <div class="card">
                <h5 style="margin-bottom: 0;">Записаться на 19:00</h5>
                <form action="addTime" method="post">
                    @csrf
                    <input type="text" name="typeTime" value="19" class="d-none">
                    <button type="submit" class="action-button">Выбрать</button>
                </form>
            </div>
        </div>

    <?php
    }
} else {
    ?>
    <div class="cotainer">
        <div class="card">
            <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
        </div>

        <div class="card">
            <h4 style="margin-bottom: 10;">Запись, на экскурсию в Среднюю школу № 7</h4>
            <b>Адрес:</b> г. Архангельск, территориальный округ Майская горка ул.
            Карпогорская, д. 36<br><br>
            <b>Контакты:</b>
            8 (921) 720 79-69<br><br>
            <b>Email:</b> mbous7@inbox.ru
            </p>
        </div>

        <div class="card">
            <h4 style="margin-bottom: 0;">Выберите удобное для вас время!</h4>
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
            <h5 style="margin-bottom: 0;">Записаться на 18:00</h5>
            <form action="addTime" method="post">
                @csrf
                <input type="text" name="typeTime" value="18" class="d-none">
                <button type="submit" class="action-button">Выбрать</button>
            </form>
        </div>

        <div class="card">
            <h5 style="margin-bottom: 0;">Записаться на 19:00</h5>
            <form action="addTime" method="post">
                @csrf
                <input type="text" name="typeTime" value="19" class="d-none">
                <button type="submit" class="action-button">Выбрать</button>
            </form>
        </div>
    </div>

<?php
}
?>

@endsection