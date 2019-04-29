<?php

/**
 * main
 * @return void
 */
function main(): void
{
    $array = [3, 1, 4, 5, 8, -1, 7, 6, 4, 2, 3];
    bubbleSort($array, count($array) - 1);

    fwrite(STDOUT, "排序结果: \n");
    foreach ($array as $value) {
        fwrite(STDOUT, $value . "\n");
    }
}

/**
 * 冒泡排序
 * @param $array
 * @param $length
 * @return void
 */
function bubbleSort(array &$array, int $length): void
{
    for ($i = 0; $i < $length; ++$i) {
        for ($j = 0; $j < $length - $i; ++$j) {
            if ($array[$j] > $array[$j + 1]) {
                // 交换位置
                swap($array[$j], $array[$j + 1]);
            }
        }
    }
}

/**
 *
 * @param mixed $firstVariable
 * @param mixed $lastVariable
 * @return void
 */
function swap(&$firstVariable, &$lastVariable): void
{
    $temp = $firstVariable;
    $firstVariable = $lastVariable;
    $lastVariable = $temp;
}

main();