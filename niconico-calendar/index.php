<?php
$year = $_GET['year'];
$month = $_GET['month'];

$now = new DateTimeImmutable('now', new DateTimeZone('Asia/Tokyo'));
$displayMonth = $now;
if (isset($year) && isset($month)) {
    $displayMonth = $displayMonth->setDate($year, $month, 1);
}

$prevMonth = $displayMonth->modify("-1 month");
$nextMonth = $displayMonth->modify("+1 month");

$getMonthQuery = function (DateTimeImmutable $month) {
    return "?year={$month->format('Y')}&month={$month->format('m')}";
};

$offsetDays = intval($displayMonth->format('w')) + 1;
$firstDateOnCalendar = $displayMonth->modify("- {$offsetDays} days");
$date = $firstDateOnCalendar;

$DAY_LIST = ['日', '月', '火', '水', '木', '金', '土'];

$getDay = function (int $day) use ($DAY_LIST) {
    return $DAY_LIST[$day];
};

$getColClass = function (int $day) {
    if ($day === 0) {
        return 'bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun';
    } else if ($day === 6) {
        return 'bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat';
    }
    return 'bl_nicoCale_colWeekday';
};

$getCellClass = function (DateTimeImmutable $datetime) use ($displayMonth) {
    $isDisplayMonth = $datetime->format('Ym') === $displayMonth->format('Ym');
    $cellClass = $isDisplayMonth ? '' : 'bl_nicoCale_cell__otherMonth';
    return $cellClass;
};
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
                            <?php foreach ($DAY_LIST as $dayIndex => $day) : ?>
                                <th class="<?= $getColClass($dayIndex) ?>"><?= $day ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($weekIndex = 0; $weekIndex < 6; $weekIndex++) : ?>
                            <tr>
                                <?php for ($dayIndex = 0; $dayIndex < 7; $dayIndex++) : ?>
                                    <?php
                                    $date = $date->modify("+1 day");
                                    $colClass = $getColClass($dayIndex);
                                    $cellClass = $getCellClass($date);
                                    ?>

                                    <td class="<?= "{$colClass} {$cellClass}" ?>">
                                        <div class="bl_nicoCale_cellHeader">
                                            <span class="bl_nicoCale_date"><?= $date->format('d') ?></span>
                                        </div>
                                        <div class="bl_nicoCale_cellBody"></div>
                                    </td>
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
