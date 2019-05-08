<?php

/**
 * @return void
 */
function main()
{
    $array = [81, 5, 3, 2, 9, 3, 4, 6, 4];

    $newArray = mergeSort($array, count($array));
    fwrite(STDOUT, "排序结果: " . PHP_EOL);
    foreach ($newArray as $value) {
        fwrite(STDOUT, $value . PHP_EOL);
    }
}

/**
 * 归并排序
 * @param array $array
 * @param int $length
 * @return array
 */
function mergeSort(array $array, int $length)
{
    if ($length <= 1) {
        return $array; // 递归退出条件
    }

    $middle = (int)($length / 2);
    $leftArray = array_slice($array, 0, $middle);
    $rightArray = array_slice($array, $middle);

    // 继续拆分
    $leftArray = mergeSort($leftArray, count($leftArray));
    $rightArray = mergeSort($rightArray, count($rightArray));
    return merge($leftArray, $rightArray);
}

/**
 * @param array $leftArray
 * @param array $rightArray
 * @return array
 */
function merge(array $leftArray, array $rightArray)
{
    $array = [];
    while (count($leftArray) and count($rightArray)) {
        $value = $leftArray[0] < $rightArray[0] ? array_shift($leftArray) : array_shift($rightArray);
        array_push($array, $value);
    }
    return array_merge($array, $leftArray, $rightArray);
}


main();