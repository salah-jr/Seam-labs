<?php

namespace App\Http\Controllers;


class AssessmentController extends Controller
{
    public function problemOne(): int
    {
        $arr = request('arr_values');
        $posArr = array();
        for ($i = 0; $i < sizeof($arr); $i++) {
            if ($arr[$i] > 0) {
                $posArr[] += $arr[$i];
            }
        }
        if (!empty($posArr)) {
            $i = min($posArr);
            while (in_array($i, $posArr)) {
                $i++;
            }
            return $i;
        }
        return 1;
    }

    public function problemTwo(): int
    {
        $start = request('start');
        $end = request('end');

        $count = 0;
        for ($i = $start; $i <= $end; $i++) {
            if (!($i % 5 == 0 && $i % 10 != 0)) {
                $count++;
            }
        }
        return $count;
    }

    public function problemThree(): int
    {
        $arr = request('arr_values');
        $result = 0;

        for ($i = 0; $i < sizeof($arr); $i++) {
            $result = $result ^ $arr[$i];
        }
        return $result;
    }

    public function problemFour(): int
    {
        $str = request('input_string');
        $str = strtoupper($str);

        // convert string into array of characters
        $chars = str_split($str);

        // Convert each character into its alphabetic position.
        $positions = array();
        foreach ($chars as $c) {
            $positions[] += ord($c) - 64;
        }

        // In case the string is containing one letter
        $result = $positions[0];

        // In case the string is containing more than one letter
        if (sizeof($positions) >= 2) {
            $result = 0;
            $i = 0;
            while (isset($positions[$i + 1])) {
                $result += $positions[$i] * 26 + $positions[$i + 1];
                if (($i + 2) == sizeof($positions) - 1) {
                    return $result * 26 + $positions[$i + 2];
                }
                $i++;
            }
        }
        return $result;
    }

}
