# 冒泡排序 (Bubble Sort)

冒泡排序是一种简单的排序算法。它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序（如从大到小，从A到Z）错误就把他们交换过来。

演示过程:

![file](../images/bubbleSort.gif)

`bubbleSort.php` 文件实现了该算法。

代码内容如下:
```php
<?php

function main()
{
    $arr = [3, 1, 4, 5, 8, 7, 6, 4, 2, 3];
    $newArr = bubbleSort($arr, count($arr) - 1);

    echo "排序结果: \n";
    foreach ($newArr as $value) {
        echo $value . "\n";
    }
}

function bubbleSort($arr, $length)
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
```