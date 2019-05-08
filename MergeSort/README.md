# 归并排序 (Merge Sort)

归并排序（Merge Sort）是建立在归并操作上的一种有效的排序算法,该算法是采用分治法（Divide and Conquer）的一个非常典型的应用。将已有序的子序列合并，得到完全有序的序列；即先使每个子序列有序，再使子序列段间有序。若将两个有序表合并成一个有序表，称为二路归并。

动画演示:

![MergeSort.git](../images/MergeSort.gif)

`mergeSort.php` 文件实现了该算法。

文件内容如下

```php
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
```