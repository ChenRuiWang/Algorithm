# 快速排序 (Quick Sort)

快速排序（Quick Sort）是对冒泡排序的一种改进。

速排序由C. A. R. Hoare在1960年提出。它的基本思想是：通过一趟排序将要排序的数据分割成独立的两部分，其中一部分的所有数据都比另外一部分的所有数据都要小，然后再按此方法对这两部分数据分别进行快速排序，整个排序过程可以递归进行，以此达到整个数据变成有序序列。

演示过程:

![file](../images/QuickSort.gif)

`quickSort.php` 实现了该算法。

文件内容如下：

```php
<?php

/**
 * @return void
 */
function main()
{
    $array = [-1, 100,55, 17, 9, 87, 12, 41, 23, 14, 20, 32, 85];
    quickSort($array, 0, count($array) - 1);
    fwrite(STDOUT, "排序结果： \n");
    foreach ($array as $value) {
        fwrite(STDOUT, $value . "\n");
    }
}

/**
 * 快速排序
 * @param array $array
 * @param int $left 当前最小范围
 * @param int $right 当前最大范围
 */
function quickSort(array &$array, int $left, int $right)
{
    if ($left >= $right) {
        return;
    }

    $i = $left;
    $j = $right;
    $key = $array[$left];
    for (; $j > $i; $j--) {
        if ($array[$j] < $key) {
            swap($array[$j], $array[$i]);
            for ($i++; $i < $j; $i++) {
                if ($array[$i] > $key) {
                    swap($array[$i], $array[$j]);
                    break;
                }
            }
        }
    }
    quickSort($array, $left, $i - 1);
    quickSort($array, $i + 1, $right);
}

/**
 * 交换两个值
 * @param mixed $firstVariable
 * @param mixed $lastVariable
 * @return void
 */
function swap(&$firstVariable, &$lastVariable)
{
    $temp = $firstVariable;
    $firstVariable = $lastVariable;
    $lastVariable = $temp;
}

main();

```
