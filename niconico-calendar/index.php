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
                            <th class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">日</th>
                            <th class="">月</th>
                            <th class="">火</th>
                            <th class="">水</th>
                            <th class="">木</th>
                            <th class="">金</th>
                            <th class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">土</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">27</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">28</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">29</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">30</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">31</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">1</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">2</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">3</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">4</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">5</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">6</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">7</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">8</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">9</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">10</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">11</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">12</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">13</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">14</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">15</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">16</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">17</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">18</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">19</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">20</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">21</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">22</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">23</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">24</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">25</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">26</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date bl_nicoCale_date__today">27</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">28</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">29</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">30</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">1</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">2</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">3</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">4</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">5</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">6</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                            <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat bl_nicoCale_cell__otherMonth">
                                <div class="bl_nicoCale_cellHeader">
                                    <span class="bl_nicoCale_date">7</span>
                                </div>
                                <div class="bl_nicoCale_cellBody"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
