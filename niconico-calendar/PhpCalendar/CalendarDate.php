<?php

namespace PhpCalendar;

use DateTimeImmutable;

class CalendarDate
{
    const DAY_SUNDAY = 0;
    const DAY_SATURDAY = 6;
    const DAY_LIST = ['日', '月', '火', '水', '木', '金', '土'];

    function __construct(private DateTimeImmutable|false $datetime, private DateTimeImmutable|false $displayMonth)
    {
    }

    function getDate(): int
    {
        return intval($this->datetime->format('d'));
    }

    function getDayName(): string
    {
        return self::DAY_LIST[$this->datetime->format('w')];
    }

    function getDayClass()
    {
        $day = intval($this->datetime->format('w'));
        if ($day === self::DAY_SUNDAY) {
            return 'bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun';
        } else if ($day === self::DAY_SATURDAY) {
            return 'bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat';
        }
        return 'bl_nicoCale_colWeekday';
    }

    function getDateClass()
    {
        $isDisplayMonth = $this->datetime->format('Ym') === $this->displayMonth->format('Ym');
        if ($isDisplayMonth) {
            return '';
        }
        return 'bl_nicoCale_cell__otherMonth';
    }
}
