<?php

/**
 * @return void
 */
function main(): void
{
    $array = [3, 0, -1, 8, 1, 5, 3, 2, 9];

    insertionSort($array, count($array) - 1);
    fwrite(STDOUT, "排序结果: \n");
    foreach ($array as $value) {
        fwrite(STDOUT, $value . "\t");
    }
}

/**
 * 插入排序
 * @param array $array
 * @param int $length
 * @return void
 */
function insertionSort(array &$array, int $length): void
{
    for ($i = 1; $i < $length; ++$i) { // 直接从第二个数字开始
        $temp = $array[$i];
        for ($j = $i; $j > 0 and $array[$j - 1] > $temp; --$j) { // 先前扫描,直到前面的一个数字小于temp(开始的数字 i ) 或者扫描到了前面
            $array[$j] = $array[$j - 1];
        }
        $array[$j] = $temp; // 前面的全部替换好之后,将最后扫描的一位赋值成temp (开始的数字i)
    }
}

main();