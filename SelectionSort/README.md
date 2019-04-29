# 选择排序 (Selection Sort)

选择排序（Selection sort）是一种简单直观的排序算法。它的工作原理如下。首先在未排序序列中找到最小（大）元素，存放到排序序列的起始位置，然后，再从剩余未排序元素中继续寻找最小（大）元素，然后放到已排序序列的末尾。以此类推，直到所有元素均排序完毕。 

过程演示：

![file](../images/selectioSort.gif)

`selectionSort.php` 文件实现了该算法。

代码内容如下:

```php
<?php

/**
 * main
 * @return void
 */
function main(): void
{
    $array = [3, -1, 4, 5, 8, 7, 6, 4, 2, 3];
    $newArray = selectionSort($array, count($array));

    fwrite(STDOUT, "排序结果： \n");
    foreach ($newArray as $value) {
        fwrite(STDOUT, $value . "\n");
    }
}

/**
 * 选择排序
 * @param array $array
 * @param int $length
 * @return array
 */
function selectionSort(array $array, int $length): array
{
    for ($i = 0; $i < $length - 1; $i ++) { // 由于每次都是和最后面的数字进行比较，所以最后一位不需要循环
        $min = $i;
        for ($j = $i + 1; $j < $length; $j ++) { // 循环未排序号的数字
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $swap = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $swap;
    }
    return $array;
}

main();

```

