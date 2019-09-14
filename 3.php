<?php
echo "<br>";
echo "<br>";

function persegi($angka)
{
    for ($i = 1; $i < $angka; $i++) {
        for ($k = $i; $k < $angka + $i; $k++) {
            if ($k % 2 == 0) {
                echo "@";
            } else {
                echo '=';
            }
        }
        echo "<br/>";
    }
}
function segi($angka)
{ }
persegi(5);

echo "<br>";

function persegi2($angka1)
{
    for ($i = 1; $i < $angka1; $i++) {
        for ($k = $i; $k < $angka1 + $i; $k++) {
            if ($k % 2 == 0) {
                echo "@";
            } else {
                echo '=';
            }
        }
        echo "<br/>";
    }
}
function segi2($angka1)
{ }
persegi(7);
