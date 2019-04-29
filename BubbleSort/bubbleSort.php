<?php

/**
 * main
 * @return void
 */
function main(): void
{
    $arr = [3, 1, 4, 5, 8, 7, 6, 4, 2, 3];
    $newArr = bubbleSort($arr, count($arr) - 1);

    fwrite(STDOUT, "排序结果: \n");
    foreach ($newArr as $value) {
        fwrite(STDOUT, $value . "\n");
    }
}

/**
 * 冒泡排序
 * @param $arr
 * @param $length
 * @return array
 */
function bubbleSort(array $arr, int $length): array
{
    for ($i = 0; $i < $length; ++$i) {
        for ($j = 0; $j < $length - $i; ++$j) {
            if ($arr[$j] > $arr[$j + 1]) {
                // 交换位置
                $swap = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $swap;
            }
        }
    }

    return $arr;
}

main();