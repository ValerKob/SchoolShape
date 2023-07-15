@extends('layouts.main')

@section('title', 'Home')

@section('content')
<?php

// $connect = mysqli_connect('localhost', 'root', '', 'calendarSchool');

// $post = mysqli_query($connect, "SELECT * FROM `applications`");

// while ($data = mysqli_fetch_assoc($post)) {
//     $array_Post[] = $data;
// }

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
?>
<!--================ Start Home Banner Area =================-->
<div class="container">
    <!-- code here -->
    <form action="addCheck" method="POST">
        @csrf
        <div class="card">
            <img style="border-radius: 10px;" src="../assets/images/head.jpg" alt="">
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
                <div class="cardCircle" style="margin-top: 5px;"></div>
                - Колличество оставшихся мест на определённый день
            </div>
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="background-color: red; margin-top: 5px; width: 15px; height: 15px;"></div>
                - Выходные дни
            </div>
            <div style="display: flex; color: #ccc">
                <div class="cardCircle" style="background-color: #bd34ec; margin-top: 5px; width: 15px; height: 15px;"></div>
                - Мест Нету
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
                    <button type="button" id="butCol" value="1" <?php
                                                                $del = 30 - $number1;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec;" disabled';
                                                                }
                                                                ?>>
                        <time>1
                            <span class="circle" <?php
                                                    $del = 30 - $number1;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number1 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="2" <?php
                                                                $del = 30 - $number2;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec;" disabled';
                                                                }
                                                                ?>>
                        <time>2
                            <span class="circle" <?php
                                                    $del = 30 - $number2;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number2 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="3" <?php
                                                                $del = 30 - $number3;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec;" disabled';
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
                                                                    echo 'style="background: #bd34ec;" disabled';
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
                                                                $del = 30 - $number7;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec;" disabled';
                                                                }
                                                                ?>>
                        <time>7
                            <span class="circle" <?php
                                                    $del = 30 - $number7;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number7 ?></span>
                        </time>
                    </button>
                    <button type="button" id="butCol" value="8" <?php
                                                                $del = 30 - $number8;
                                                                if ($del == 0) {
                                                                    echo 'style="background: #bd34ec;" disabled';
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
                                                                    echo 'style="background: #bd34ec;" disabled';
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
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                    <button type="button" id="butCol" value="11" <?php
                                                                    $del = 30 - $number11;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>11
                            <span class="circle" <?php
                                                    $del = 30 - $number11;
                                                    if ($del == 0) {
                                                        echo 'style="background: #735400;" ';
                                                    }
                                                    ?>><? echo 30 - $number11 ?></span>
                        </time>
                    </button>
                    <button type="button" class="red" value="12">
                        <time>12</time>
                    </button>
                    <button type="button" class="red" value="13">
                        <time>13</time>
                    </button>
                    <button type="button" id="butCol" value="14" <?php
                                                                    $del = 30 - $number14;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                    <button type="button" id="butCol" value="15" <?php
                                                                    $del = 30 - $number15;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                                                                    $del = 30 - $number16;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>16<span class="circle" <?php
                                                        $del = 30 - $number16;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number16 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="17" <?php
                                                                    $del = 30 - $number17;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                                                                    $del = 30 - $number18;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>18<span class="circle" <?php
                                                        $del = 30 - $number18;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number18 ?></span></time>
                    </button>
                    <!-- <button class="today">
          <time>18</time>
        </button> -->
                    <button type="button" class="red" value="19">
                        <time>19</time>
                    </button>
                    <button type="button" class="red" value="20">
                        <time>20</time>
                    </button>
                    <button type="button" id="butCol" value="21" <?php
                                                                    $del = 30 - $number21;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>21<span class="circle" <?php
                                                        $del = 30 - $number21;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number21 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="22" <?php
                                                                    $del = 30 - $number22;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                                                                    $del = 30 - $number23;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>23<span class="circle" <?php
                                                        $del = 30 - $number23;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number23 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="24" <?php
                                                                    $del = 30 - $number24;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>24<span class="circle" <?php
                                                        $del = 30 - $number24;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number24 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="25" <?php
                                                                    $del = 30 - $number25;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                    <button type="button" class="red" value="27">
                        <time>27</time>
                    </button>
                    <button type="button" id="butCol" value="28" <?php
                                                                    $del = 30 - $number28;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                                                                        echo 'style="background: #bd34ec;" disabled';
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
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>30<span class="circle" <?php
                                                        $del = 30 - $number30;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number30 ?></span></time>
                    </button>
                    <button type="button" id="butCol" value="31" <?php
                                                                    $del = 30 - $number31;
                                                                    if ($del == 0) {
                                                                        echo 'style="background: #bd34ec;" disabled';
                                                                    }
                                                                    ?>>
                        <time>31<span class="circle" <?php
                                                        $del = 30 - $number31;
                                                        if ($del == 0) {
                                                            echo 'style="background: #735400;" ';
                                                        }
                                                        ?>><? echo 30 - $number31 ?></span></time>
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
<!--================ End Home Banner Area =================-->
@endsection