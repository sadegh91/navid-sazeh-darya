<?php

namespace App\Traits;

use Morilog\Jalali\Jalalian;

trait JalaliDateConverter
{
    public function calenderToDate($calender): string
    {
        $date_time = (new Jalalian($calender[0] . $calender[1] . $calender[2] . $calender[3], $calender[5] . $calender[6], $calender[8] . $calender[9], 23, 00, 00))->toCarbon()->toDateTimeString();
        return $date_time[0] . $date_time[1] . $date_time[2] . $date_time[3] . $date_time[4] . $date_time[5] . $date_time[6] . $date_time[7] . $date_time[8] . $date_time[9];
    }

    public function calenderToDateToWeakDay($date): string
    {
        return Jalalian::forge($date)->format('%A, %d/%B/%Y');
    }

    public function georgianToDateTime($date): string
    {
        $d = Jalalian::forge($date)->format('%A, %d/%B/%Y');
        $t = $date->format('H:i:s');
        return $d . ' - ' . $t;
    }

    public function georgianToAgo($date): string
    {
        return Jalalian::forge($date)->ago();
    }
}
