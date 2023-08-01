@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <h2>Все записи на время в {{ $typeTime }}:00</h2>

    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">ID</div>
            <div class="col col-2">ФИО</div>
            <div class="col col-2">Email</div>
            <div class="col col-2">Телефон</div>
            <div class="col col-2">Дата записи</div>
        </li>
        <style>
            .action-button {
                cursor: pointer;
                height: 60px;
                padding: 0;

                /* width: 100px; */
                margin: 0 auto 30px;
                padding: 0 50px;
                width: auto;
                max-width: 450px;
            }
        </style>
        <form action="adminPanel" method="post">
            @csrf
            <input type="text" class="input-field" name="login" value="TGFtYU5A" style="display: none;" />
            <input type="text" class="input-field" name="pass" value="%#H9.@1345" style="display: none;" />
            <button type="submit" class="action-button"><- Вернуться Назад</button>
        </form>
        <?php
        foreach ($post as $db) {
            if ($db->typeTime == $typeTime) {
                echo '
                <li class="table-row">
                    <div class="col col-1" data-label="ID:">' . $db->id . '</div>
                    <div class="col col-2" data-label="ФИО:">' . $db->fio . '</div>
                    <div class="col col-2" data-label="Email:"> <br class="dNoneMobule">' . $db->email . '</div>
                    <div class="col col-2" data-label="Телефон:">' . $db->tel . '</div>
                    <div class="col col-2" data-label="Дата&nbspзаписи:"> дата:&nbsp' . $db->dataZa . '.08.2023 <br>время&nbspв:&nbsp' . $db->typeTime . ':00</div>
                    <form action="deleteUser" method="POST">' ?>
                @csrf
        <?php echo '<input type="number" name="deleteUser" value="' . $db->id . '" style="display: none;" />
        <input type="number" name="typeTime" value="' . $db->typeTime . '" style="display: none;" />
                        <button type="submit" style="color: red;">Удалить</button>
                    </form>
                </li>';
            }
        }
        ?>
    </ul>
</div>

@endsection