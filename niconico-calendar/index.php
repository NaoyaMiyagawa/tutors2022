<?php

use PhpCalendar\CalendarDate;

require_once './PhpCalendar/CalendarDate.php';

$year = $_GET['year'] ?? date('Y');
$month = $_GET['month'] ?? date('m');

$now = new DateTimeImmutable('now', new DateTimeZone('Asia/Tokyo'));
$displayMonth = $now->setDate($year, $month, 1);

$prevMonth = $displayMonth->modify("-1 month");
$nextMonth = $displayMonth->modify("+1 month");

$getMonthQuery = function (DateTimeImmutable $month) {
    return "?year={$month->format('Y')}&month={$month->format('m')}";
};

$offsetDays = intval($displayMonth->format('w'));
$firstDateOnCalendar = $displayMonth->modify("- {$offsetDays} days");
$date = $firstDateOnCalendar;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./style.css" />
    <script src="./index.js" type="module"></script>
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
</head>

<body>
    <div class="ly_header">
        <div class="ly_container">
            <h1>NicoCalendar</h1>

            <form class="bl_nicoCelection">
                <div class="bl_nicoCelection_option">
                    <input name="nicoSelect" id="nicoSelect__good" class="js_nicoSelect" data-nico-id="1" type="radio" checked />
                    <label for="nicoSelect__good">
                        <span class="el_nicoGood iconify" data-icon="gg:smile-mouth-open"></span>
                    </label>
                </div>

                <div class="bl_nicoCelection_option">
                    <input name="nicoSelect" id="nicoSelect__ok" class="js_nicoSelect" data-nico-id="2" type="radio" />
                    <label for="nicoSelect__ok">
                        <span class="el_nicoOk iconify" data-icon="fluent:emoji-smile-slight-24-regular"></span>
                    </label>
                </div>

                <div class="bl_nicoCelection_option">
                    <input name="nicoSelect" id="nicoSelect__bad" class="js_nicoSelect" data-nico-id="3" type="radio" />
                    <label for="nicoSelect__bad"><span class="el_nicoBad iconify" data-icon="gg:smile-sad"></span> </label>
                </div>
            </form>
        </div>
    </div>

    <div class="ly_content">
        <div class="ly_container">
            <div class="bl_nicoCale">
                <div class="bl_nicoCale_header">
                    <div class="bl_nicoCale_targetMonth"><?= "{$year}年{$month}月" ?></div>
                    <div class="bl_nicoCale_control">
                        <a class="bl_nicoCale_btn bl_nicoCale_btn__prev" href="<?= $getMonthQuery($prevMonth) ?>">◁</a>
                        <a class="bl_nicoCale_btn bl_nicoCale_btn__this" href="<?= $getMonthQuery($now) ?>">今日</a>
                        <a class="bl_nicoCale_btn bl_nicoCale_btn__next" href="<?= $getMonthQuery($nextMonth) ?>">▷</a>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <?php foreach (CalendarDate::DAY_LIST as $dayIndex => $day) : ?>
                                <?php
                                $headerDate = new CalendarDate($date->modify("+{$dayIndex} day"), $displayMonth);
                                ?>
                                <th class="<?= $headerDate->getDayClass() ?>"><?= $headerDate->getDayName() ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($weekIndex = 0; $weekIndex < 6; $weekIndex++) : ?>
                            <tr>
                                <?php for ($dayIndex = 0; $dayIndex < 7; $dayIndex++) : ?>
                                    <?php
                                    $calendarDate = new CalendarDate($date, $displayMonth);
                                    ?>

                                    <td class="<?= "{$calendarDate->getDayClass()} {$calendarDate->getDateClass()}" ?>">
                                        <div class="bl_nicoCale_cellHeader">
                                            <span class="bl_nicoCale_date"><?= $calendarDate->getDate() ?></span>
                                        </div>
                                        <div class="bl_nicoCale_cellBody"></div>
                                    </td>

                                    <?php
                                    $date = $date->modify("+1 day");
                                    ?>
                                <?php endfor; ?>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
