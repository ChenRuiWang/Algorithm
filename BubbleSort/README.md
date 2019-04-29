# 冒泡排序 (Bubble Sort)

冒泡排序是一种简单的排序算法。它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序（如从大到小，从A到Z）错误就把他们交换过来。

演示过程:

![file](../images/bubbleSort.gif)


`bubbleSort.php` 文件实现了该算法。

代码内容如下:
```php
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

```