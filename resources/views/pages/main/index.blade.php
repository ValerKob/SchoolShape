@extends('layouts.main')

@section('title', 'Home')

@section('content')
<?php

$number1 = 0;
$number2 = 0;
$number3 = 0;
$number4 = 0;
$number5 = 0;
$number6 = 0;
$number7 = 0;
$number8 = 0;
$number9 = 0;
$number10 = 0;
$number11 = 0;
$number12 = 0;
$number13 = 0;
$number14 = 0;
$number15 = 0;
$number16 = 0;
$number17 = 0;
$number18 = 0;
$number19 = 0;
$number20 = 0;
$number21 = 0;
$number22 = 0;
$number23 = 0;
$number24 = 0;
$number25 = 0;
$number26 = 0;
$number27 = 0;
$number28 = 0;
$number29 = 0;
$number30 = 0;
$number31 = 0;

foreach ($post as $db) {
    if ($db->typeTime == $typeTime) {
        if ($db->dataZa == 1)
            $number1++;
        if ($db->dataZa == 2)
            $number2++;
        if ($db->dataZa == 3)
            $number3++;
        if ($db->dataZa == 4)
            $number4++;
        if ($db->dataZa == 5)
            $number5++;
        if ($db->dataZa == 6)
            $number6++;
        if ($db->dataZa == 7)
            $number7++;
        if ($db->dataZa == 8)
            $number8++;
        if ($db->dataZa == 9)
            $number9++;
        if ($db->dataZa == 10)
            $number10++;
        if ($db->dataZa == 11)
            $number11++;
        if ($db->dataZa == 12)
            $number12++;
        if ($db->dataZa == 13)
            $number13++;
        if ($db->dataZa == 14)
            $number14++;
        if ($db->dataZa == 15)
            $number15++;
        if ($db->dataZa == 16)
            $number16++;
        if ($db->dataZa == 17)
            $number17++;
        if ($db->dataZa == 18)
            $number18++;
        if ($db->dataZa == 19)
            $number19++;
        if ($db->dataZa == 20)
            $number20++;
        if ($db->dataZa == 21)
            $number21++;
        if ($db->dataZa == 22)
            $number22++;
        if ($db->dataZa == 23)
            $number23++;
        if ($db->dataZa == 24)
            $number24++;
        if ($db->dataZa == 25)
            $number25++;
        if ($db->dataZa == 26)
            $number26++;
        if ($db->dataZa == 27)
            $number27++;
        if ($db->dataZa == 28)
            $number28++;
        if ($db->dataZa == 29)
            $number29++;
        if ($db->dataZa == 30)
            $number30++;
        if ($db->dataZa == 31)
            $number31++;
    }
}
?>
<!--================ Start Home Banner Area =================-->
<div class="container">
    <!-- code here -->
    <form action="addCheck" method="POST">
        @csrf
        <div class="card">
            <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
        </div>
        <div class="card" style="width: 425px; margin: 0 auto;
  display: block;
  background-color: rgba(153, 153, 153, .0);
  border-radius: none;
  border: none;
  box-shadow: none;
  padding: 0;">
            <a class="action-button" href="{{ route('main') }}" style="max-width: 230px; color: #fff; text-decoration: none; padding: 15px 25px;">
                < Вернуться Назад</a>
        </div>
        <div class="card">
            <h4 style="margin-bottom: 10;">Запись, на экскурсию в Среднюю школу № 7</h4>
            <p><b>Время</b> в {{ $typeTime }}:00<br><br>
                <b>Адрес:</b> г. Архангельск, территориальный округ Майская горка ул.
                Карпогорская, д. 36<br><br>
                <b>Контакты:</b>
                8 (921) 720 79-69,<br><br>
                <b>Email:</b> mbous7@inbox.ru
            <div style="display: flex; margin-top: 10px; border-top: 1px solid #000; padding: 15px 0 0 0;">
                <div style="color: red; ">* Обязательные данные</div>
            </div>
            </p>
        </div>

        <div class="card">
            <div class="card-form">
                <div class="input">
                    <input type="text" class="input-field" name="fio" required />
                    <label class="input-label">ФИО
                        <span style="color: red;">*</span>
                    </label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="email" required />
                    <label class="input-label">Адрес электронной почты
                        <span style="color: red;">*</span></label>
                </div>
                <div class="input">
                    <input type="tel" class="input-field" name="tel" required />
                    <label class="input-label">Ваш номер телефона
                        <span style="color: red;">*</span></label>
                    <input type="number" id="dataZa" name="dataZa" value="0" style="display: none;" />
                    <input type="text" name="typeTime" value="{{ $typeTime }}" style="display: none;" />
                </div>
            </div>
        </div>


        <div class="card">
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="margin-top: 5px; min-width: 15px;"></div>
                - Колличество оставшихся мест на определённый день
            </div>
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="background-color: red; margin-top: 5px; width: 15px; height: 15px;"></div>
                - Выходные дни
            </div>
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="background-color: #bd34ec; margin-top: 5px; width: 15px; height: 15px;"></div>
                - Мест Нет
            </div>
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="background-color: #00ff33; margin-top: 5px; min-width: 15px; height: 15px;"></div>
                - Значимые события (при нажатий всплывает окно с информацией про этот день)
            </div>
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="background-color: #ffbf00; margin-top: 5px; min-width: 15px; height: 15px;"></div>
                - В этот день нету экскурсий, так как запланировано другое мероприятие
            </div>
        </div>
        <div class="text-center">
            <div class="calendar">
                <div class="month" style="display: flex; flex-direction: column;">
                    <?php
                    if ($dataZa == 0) {
                        echo '<div style="color: red;">Пожалуйста выберите дату!!!</div>';
                    } else {
                        echo '<div>Выберите удобную для вас дату!</div>';
                    }
                    ?>
                    <div>Август <span class="year">2023</span></div>
                </div>
                <div class="days">
                    <span class="spanDays">Пон</span>
                    <span class="spanDays">Вт</span>
                    <span class="spanDays">Ср</span>
                    <span class="spanDays">Чет</span>
                    <span class="spanDays">Пят</span>
                    <span class="spanDays">Суб</span>
                    <span class="spanDays">Вос</span>
                </div>
                <div class="dates">
                    <button type="button" style="grid-column: 1; color: #ccc;">
                        <time>31
                        </time>
                    </button>
                    <button type="button" id="butCol" value="1" <?php
                                                                $del = 0;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                }
                                                                ?>>
                        <time>1</time>
                    </button>
                    <button type="button" class="green butColModal2" id="butCol" value="2" <?php
                                                                                            $del = 0;
                                                                                            if ($del == 0) {
                                                                                                echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                                            }
                                                                                            ?>>
                        <time>2</span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="3" <?php
                                                                $del = 30 - $number3;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                }
                                                                ?>>
                        <time>3
                            <span class="circle" <?php
                                                    $del = 30 - $number3;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number3 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="4" <?php
                                                                $del = 30 - $number4;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                }
                                                                ?>>
                        <time>4
                            <span class="circle" <?php
                                                    $del = 30 - $number4;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number4 ?></span>
                        </time>
                    </button>
                    <button type="button" class="red" value="5">
                        <time>5</time>
                    </button>
                    <button type="button" class="red" value="6">
                        <time>6</time>
                    </button>
                    <button type="button" id="butCol" value="7" <?php
                                                                $del = 0;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                }
                                                                ?>>
                        <time>7</span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="8" <?php
                                                                $del = 30 - $number8;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                }
                                                                ?>>
                        <time>8
                            <span class="circle" <?php
                                                    $del = 30 - $number8;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number8 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="9" <?php
                                                                $del = 30 - $number9;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                }
                                                                ?>>
                        <time>9
                            <span class="circle" <?php
                                                    $del = 30 - $number9;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number9 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="10" <?php
                                                                    $del = 30 - $number10;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>10
                            <span class="circle" <?php
                                                    $del = 30 - $number10;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number10 ?></span>
                        </time>
                    </button>
                    <button type="button" class="green butColModal11" id="butCol" value="11" <?php
                                                                                                $del = 0;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>11</span>
                        </time>
                    </button>
                    <button type="button" class="red" value="12">
                        <time>12</time>
                    </button>
                    <button type="button" class="red" value="13">
                        <time>13</time>
                    </button>
                    <button type="button" class="green butColModal14" id="butCol" value="14" <?php
                                                                                                $del = 30 - $number14;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>14
                            <span class="circle" <?php
                                                    $del = 30 - $number14;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number14 ?></span>
                        </time>
                    </button>
                    <button type="button" class="green butColModal15" id="butCol" value="15" <?php
                                                                                                $del = 30 - $number15;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>15
                            <span class="circle" <?php
                                                    $del = 30 - $number15;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number15 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="16" <?php
                                                                    $del = 0;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>16</time>
                    </button>
                    <button type="button" id="butCol" value="17" <?php
                                                                    $del = 30 - $number17;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>17<span class="circle" <?php
                                                        $del = 30 - $number17;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number17 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="18" <?php
                                                                    $del = 0;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>18</time>
                    </button>
                    <!-- <button class="today">
          <time>18</time>
        </button> -->
                    <button type="button" class="red butColModal19" value="19">
                        <time>19</time>
                    </button>
                    <button type="button" class="red" value="20">
                        <time>20</time>
                    </button>
                    <button type="button" class="green butColModal21" id="butCol" value="21" <?php
                                                                                                $del = 30 - $number21;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>21<span class="circle" <?php
                                                        $del = 30 - $number21;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number21 ?></span></time>
                    </button>
                    <button type="button" class="green butColModal22" id="butCol" value="22" <?php
                                                                                                $del = 30 - $number22;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>22<span class="circle" <?php
                                                        $del = 30 - $number22;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number22 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="23" <?php
                                                                    $del = 0;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>23</time>
                    </button>
                    <button type="button" class="green butColModal24" id="butCol" value="24" <?php
                                                                                                $del = 0;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #ffbf00; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>24</time>
                    </button>
                    <button type="button" id="butCol" value="25" <?php
                                                                    $del = 30 - $number25;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>25<span class="circle" <?php
                                                        $del = 30 - $number25;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number25 ?></span></time>
                    </button>
                    <button type="button" class="red" value="26">
                        <time>26</time>
                    </button>
                    <button type="button" class="red butColModal27" value="27">
                        <time>27</time>
                    </button>
                    <button type="button" id="butCol" value="28" <?php
                                                                    $del = 30 - $number28;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>28<span class="circle" <?php
                                                        $del = 30 - $number28;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number28 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="29" <?php
                                                                    $del = 30 - $number29;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>29<span class="circle" <?php
                                                        $del = 30 - $number29;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number29 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="30" <?php
                                                                    $del = 30 - $number30;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                    }
                                                                    ?>>
                        <time>30<span class="circle" <?php
                                                        $del = 30 - $number30;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number30 ?></span></time>
                    </button>
                    <button type="button" class="green butColModal31" id="butCol" value="31" <?php
                                                                                                $del = 30 - $number31;
                                                                                                if ($del == 0) {
                                                                                                    echo 'style="background: #bd34ec; color: #fff;" disabled';
                                                                                                }
                                                                                                ?>>
                        <time>31<span class="circle" <?php
                                                        $del = 30 - $number31;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number31 ?></span></time>
                    </button>
                    <button type="button" class="red" style="opacity: .5; grid-column: 5; color: #ccc;">
                        <time>1
                        </time>
                    </button>
                    <button type="button" class="red" style="opacity: .5; grid-column: 6; color: #ccc;">
                        <time>2
                        </time>
                    </button>
                    <button type="button" class="red" style="opacity: .5; grid-column: 7; color: #ccc;">
                        <time>3
                        </time>
                    </button>
                </div>
            </div>
            <style>
                .action-button {
                    cursor: pointer;
                    height: 60px;
                    padding: 0;

                    max-width: 400px;
                    margin: 15px auto 0;
                }
            </style>
            <div class="action">
                <button type="submit" class="action-button">Записаться</button>
            </div>
        </div>
    </form>
    <div class="modalNew" id="modal2">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>2 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close2"></div>
                </div>
            </div>
            <div class="modalNewContent">
                90 лет назад (1933) постановлением Совета Министров СССР был принят в эксплуатацию Беломорско-Балтийский канал
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal11">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>11 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close11"></div>
                </div>
            </div>
            <div class="modalNewContent">
                415 лет со дня получения (1613) Архангельском административной
                самостоятельности (ранее был приписан к Холмогорам)
                <br>
                <br>
                85 лет назад поселок Судострой получил статус города с названием
                Молотовск (1938), с 1957 г. — Северодвинск
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal14">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>14 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close14"></div>
                </div>
            </div>
            <div class="modalNewContent">
                135 лет со дня рождения Николая Ивановича Евгенова (1888–1964),
                исследователя Арктики, гидрографа и океанографа
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal15">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>15 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close15"></div>
                </div>
            </div>
            <div class="modalNewContent">
                100 лет со дня рождения Юрия Михайловича Варакина (1923–1994),
                профессора, декана Архангельского лесотехнического института (в настоящее
                время — Лесотехнический институт САФУ им. М. В. Ломоносова), автора
                около 120 научных и научно-методических работ
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal19">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>19 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close19"></div>
                </div>
            </div>
            <div class="modalNewContent">
                160 лет со дня открытия (1863) в Архангельске телеграфа
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal21">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>21 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close21"></div>
                </div>
            </div>
            <div class="modalNewContent">
                115 лет со дня рождения Ирины Евгеньевны Гибшман (1908–1996),
                праправнучки А. С. Пушкина, пушкиноведа, преподавателя кафедры
                иностранных языков Архангельского государственного педагогического
                института (в настоящее время — САФУ им. М. В. Ломоносова)
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal22">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>22 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close22"></div>
                </div>
            </div>
            <div class="modalNewContent">
                155 лет со дня рождения Петра Герардовича Минейко (1868–1920),
                инженера Архангельского порта, специалиста по изысканию и строительству
                портов Белого и Баренцева морей
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal24">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>24 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close24"></div>
                </div>
            </div>
            <div class="modalNewContent">
                470 лет со дня прибытия (1553) в устье Северной Двины одного из кораблей
                английской экспедиции во главе с Ричардом Ченслером
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal27">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>27 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close27"></div>
                </div>
            </div>
            <div class="modalNewContent">
                75 лет со дня рождения Александра Александровича Логинова (1948),
                поэта, члена Архангельского регионального отделения Союза писателей
                России
            </div>
        </div>
    </div>

    <div class="modalNew" id="modal31">
        <div class="modalNewCard">
            <div class="modalNewHeader">
                <div class="modalNewTitle">
                    <h3>31 Августа</h3>
                </div>
                <div class="modalNewClose">
                    <div class="closeModaleNewBtn" id="close31"></div>
                </div>
            </div>
            <div class="modalNewContent">
                85 лет со дня рождения Рудольфа Афанасьевича Ханталина (1938–2021),
                историка, политолога, кандидата исторических наук, профессора, члена
                Союза писателей России
                День северных конвоев, установлен в соответствии с областным законом
                (№ 97-8-ОЗ от 3.06.2019) «О праздничных днях и памятных датах
                в Архангельской области
            </div>
        </div>
    </div>
</div>

<script>
    let navItems = document.querySelectorAll('#butCol')
    let dataZa = document.querySelector('#dataZa');

    let i;
    for (i = 0; i < navItems.length; i++) {
        navItems[i].addEventListener("click", function() {
            if (!this.classList.contains('active')) {
                clearActives(navItems);
                this.classList.toggle('active');
                dataZa.value = this.value;
            }
        });
    }

    function clearActives(classlist) {
        if (classlist) {
            for (i = 0; i < classlist.length; i++) {
                classlist[i].classList.remove('active');
            }
        }
    }
</script>

<script>
    // Active
    // 2
    let butColModal2 = document.querySelector('.butColModal2');
    butColModal2.addEventListener('click', function() {
        let modal = document.getElementById('modal2');
        modal.classList.add('active');
    })
    // 11
    let butColModal11 = document.querySelector('.butColModal11');
    butColModal11.addEventListener('click', function() {
        let modal = document.getElementById('modal11');
        modal.classList.add('active');
    })
    // 14
    let butColModal14 = document.querySelector('.butColModal14');
    butColModal14.addEventListener('click', function() {
        let modal = document.getElementById('modal14');
        modal.classList.add('active');
    })
    // 15
    let butColModal15 = document.querySelector('.butColModal15');
    butColModal15.addEventListener('click', function() {
        let modal = document.getElementById('modal15');
        modal.classList.add('active');
    })
    // 19
    let butColModal19 = document.querySelector('.butColModal19');
    butColModal19.addEventListener('click', function() {
        let modal = document.getElementById('modal19');
        modal.classList.add('active');
    })
    // 21
    let butColModal21 = document.querySelector('.butColModal21');
    butColModal21.addEventListener('click', function() {
        let modal = document.getElementById('modal21');
        modal.classList.add('active');
    })
    // 22
    let butColModal22 = document.querySelector('.butColModal22');
    butColModal22.addEventListener('click', function() {
        let modal = document.getElementById('modal22');
        modal.classList.add('active');
    })
    // 24
    let butColModal24 = document.querySelector('.butColModal24');
    butColModal24.addEventListener('click', function() {
        let modal = document.getElementById('modal24');
        modal.classList.add('active');
    })
    // 27
    let butColModal27 = document.querySelector('.butColModal27');
    butColModal27.addEventListener('click', function() {
        let modal = document.getElementById('modal27');
        modal.classList.add('active');
    })
    // 31
    let butColModal31 = document.querySelector('.butColModal31');
    butColModal31.addEventListener('click', function() {
        let modal = document.getElementById('modal31');
        modal.classList.add('active');
    })
</script>

<script>
    // Close
    // 2
    let close2 = document.getElementById('close2');
    close2.addEventListener('click', function() {
        let modal = document.getElementById('modal2');
        modal.classList.remove('active');
    })
    // 11
    let close11 = document.getElementById('close11');
    close11.addEventListener('click', function() {
        let modal = document.getElementById('modal11');
        modal.classList.remove('active');
    })
    // 14
    let close14 = document.getElementById('close14');
    close14.addEventListener('click', function() {
        let modal = document.getElementById('modal14');
        modal.classList.remove('active');
    })
    // 15
    let close15 = document.getElementById('close15');
    close15.addEventListener('click', function() {
        let modal = document.getElementById('modal15');
        modal.classList.remove('active');
    })
    // 19
    let close19 = document.getElementById('close19');
    close19.addEventListener('click', function() {
        let modal = document.getElementById('modal19');
        modal.classList.remove('active');
    })
    // 21
    let close21 = document.getElementById('close21');
    close21.addEventListener('click', function() {
        let modal = document.getElementById('modal21');
        modal.classList.remove('active');
    })
    // 22
    let close22 = document.getElementById('close22');
    close22.addEventListener('click', function() {
        let modal = document.getElementById('modal22');
        modal.classList.remove('active');
    })
    // 24
    let close24 = document.getElementById('close24');
    close24.addEventListener('click', function() {
        let modal = document.getElementById('modal24');
        modal.classList.remove('active');
    })
    // 27
    let close27 = document.getElementById('close27');
    close27.addEventListener('click', function() {
        let modal = document.getElementById('modal27');
        modal.classList.remove('active');
    })
    // 31
    let close31 = document.getElementById('close31');
    close31.addEventListener('click', function() {
        let modal = document.getElementById('modal31');
        modal.classList.remove('active');
    })
</script>
<!--================ End Home Banner Area =================-->
@endsection