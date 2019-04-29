<?php

/**
 * main
 * @return void
 */
function main(): void
{
    $array = [3, -1, 4, 5, 8, 7, 9, 6, 4, 2, 3];
    selectionSort($array, count($array));

    fwrite(STDOUT, "排序结果： \n");
    foreach ($array as $value) {
        fwrite(STDOUT, $value . "\n");
    }
}

/**
 * 选择排序
 * @param array $array
 * @param int $length
 * @return void
 */
function selectionSort(array &$array, int $length): void
{
    for ($i = 0; $i < $length - 1; $i ++) { // 由于每次都是和最后面的数字进行比较，所以最后一位不需要循环
        $min = $i;
        for ($j = $i + 1; $j < $length; $j ++) { // 循环未排序号的数字
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        swap($array[$i], $array[$min]);
    }
}

/**
 *
 * @param mixed $firstVariable
 * @param mixed $lastVariable
 */
function swap(&$firstVariable, &$lastVariable)
{
    $temp = $firstVariable;
    $firstVariable = $lastVariable;
    $lastVariable = $temp;
}

main();