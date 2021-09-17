<?php

use Carbon\Carbon;

require_once __DIR__ . '../../../vendor/autoload.php';

use Nilambar\NepaliDate\NepaliDate;

function product_unit()
{
    $data = ['Pices','Plate','Bottal'];

    return $data;
}

//mode of payment
function mode_of_payment()
{
    $data = ['Cash','Bank','Esawa'];

    return $data;
}

//show the now date of nepal in input field
function nepali_now_date()
{
    $obj = new NepaliDate();

     $carbon_data = Carbon::now();
     $carbon_year = $carbon_data->year;
     $carbon_month = $carbon_data->month;
     $carbon_day = $carbon_data->day;

    // Convert AD to BS.
    $date = $obj->convertAdToBs($carbon_year, $carbon_month, $carbon_day);

    $year = $date['year'];
    $month = $date['month'];
    $day = $date['day'];

    if ($month < 10) {
        $month = '0'.$month;

        if ($day < 10) {
            $day = '0'.$day;

            $nepali_date = $year.'-'.$month.'-'.$day;

        } else {
            $nepali_date = $year.'-'.$month.'-'.$day;

        }

    } else {
        $nepali_date = $year.'-'.$month.'-'.$day;
    }

    return $nepali_date;
}


//convert bs to ad
function nepali_to_english_date($date)
{
    // dd($date);
    $obj = new NepaliDate();

    $nepali_year = $date[0];
    $nepali_month = $date[1];
    $nepali_day = $date[2];


     // Convert BS to AD.
    $array_ad_date = $obj->convertBsToAd($nepali_year,$nepali_month,$nepali_day);

    // dd($array_ad_date);

    $year = $array_ad_date['year'];
    $month = $array_ad_date['month'];
    $day = $array_ad_date['day'];

    if ($month < 10) {
        $month = '0'.$month;

        if ($day < 10) {
            $day = '0'.$day;

            $ad_date = $year.'-'.$month.'-'.$day;

        } else {
            $ad_date = $year.'-'.$month.'-'.$day;

        }

    }
    else {
        $ad_date = $year.'-'.$month.'-'.$day;
    }

    return $ad_date;

}

function now_time()
{
    $date = Carbon::now();
    $array_date =  $date->toArray();

    $now_time = $array_date['hour'].':'.$array_date['minute'].':'.$array_date['second'];

    return $now_time;
}

function change_date_bs_to_ad_and_add_now_timestamp($nepali_date)
{
    $array_of_nepali_date = explode('-',$nepali_date);
    $ad_date = nepali_to_english_date($array_of_nepali_date);
    $now_time = now_time();

    $ad_date_with_time = $ad_date.' '.$now_time;

    return $ad_date_with_time;
}

function change_date_bs_to_ad_and_add_timestamp_for_from_date($nepali_date)
{
    $array_of_nepali_date = explode('-',$nepali_date);
    $ad_date = nepali_to_english_date($array_of_nepali_date);
    $now_time = '00:00:00';

    $ad_date_with_time = $ad_date.' '.$now_time;

    return $ad_date_with_time;
}

function change_date_bs_to_ad_and_add_timestamp_for_to_date($nepali_date)
{
    $array_of_nepali_date = explode('-',$nepali_date);
    $ad_date = nepali_to_english_date($array_of_nepali_date);
    $now_time = '23:59:59';

    $ad_date_with_time = $ad_date.' '.$now_time;

    return $ad_date_with_time;
}
?>
