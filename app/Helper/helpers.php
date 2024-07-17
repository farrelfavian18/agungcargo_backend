<?php

function hitungjamTerlambat($jam_pulang,$jam_presensi)
{
    $j1 = strtotime($jam_pulang);
    $j2 = strtotime($jam_presensi);

    $diffterpresensi = $j1 - $j2;

    $jamterlambat = floor($diffterpresensi / (60 * 60));
    // $menitterlambat = floor(($diffterlambat - $jamterlambat * (60 * 60))) / 60;

    // $jterlambat = $jamterlambat <= 9 ? "0" . $jamterlambat : $jamterlambat;
    // $mterlambat = $menitterlambat <= 9 ? "0" . $menitterlambat : $menitterlambat;

    $jterlambat = $jamterlambat < 9 ? "0". $jamterlambat : $jamterlambat;
    // $mterlambat = $menitterlambat < 9 ? "0". $menitterlambat : $menitterlambat;

    $terlambat = $jterlambat. " " ."Jam";
    // $terlambat = ROUND(($menitterlambat / 60), 2);
    return $terlambat;
}