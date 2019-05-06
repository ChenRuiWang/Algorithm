<?php

/**
 * @return void
 */
function main()
{
    $array = [3, -1, 4, 5, 8, 7, 9, 6, 4, 2, 3];
    shellSort($array, count($array) - 1);
    fwrite(STDOUT, "排序结果:" . PHP_EOL);
    foreach ($array as $value) {
        fwrite(STDOUT, $value . PHP_EOL);
    }
}

/**
 * 希尔排序
 * @param array $array
 * @param int $length
 * @return void
 */
function shellSort(array &$array, int $length)
{
    if ($length <= 1) {
        return;
    }

    $gap = $length / 2;
    while ($gap > 0) {
        for ($i = 0; $i <= $length; $i++) {
            $j = $i - $gap;
            $temp = $array[$i];
            while ($j >= 0 and $temp < $array[$j]) {
                $array[$j + $gap] = $array[$j];
                $j -= $gap;
            }
            $array[$j + $gap] = $temp;
        }
        $gap = (int)$gap / 2;
    }

}

main();