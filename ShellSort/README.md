# 希尔排序(Shell's Sort)

希尔排序(Shell's Sort)是插入排序的一种又称“缩小增量排序”（Diminishing Increment Sort），是直接插入排序算法的一种更高效的改进版本。希尔排序是非稳定排序算法。该方法因D.L.Shell于1959年提出而得名。
希尔排序是把记录按下标的一定增量分组，对每组使用直接插入排序算法排序；随着增量逐渐减少，每组包含的关键词越来越多，当增量减至1时，整个文件恰被分成一组，算法便终止。

动画演示:

![file](../images/shellSort.gif)

`shellSort.php` 文件实现了该算法。

文件内容内容如下：

```php
<?php

/**
 * @return void
 */
function main()
{
    $array = [3, -1, 4, 5, 8, 7, 9, 6, 4, 2, 3];
    shellSort($array, count($array) - 1);
    fwrite(STDOUT, "排序结果:" . PHP_EOL);
    foreach ($array as $value) {
        fwrite(STDOUT, $value . PHP_EOL);
    }
}

/**
 * 希尔排序
 * @param array $array
 * @param int $length
 * @return void
 */
function shellSort(array &$array, int $length)
{
    if ($length <= 1) {
        return;
    }

    $gap = $length / 2;
    while ($gap > 0) {
        for ($i = 0; $i <= $length; $i++) {
            $j = $i - $gap;
            $temp = $array[$i];
            while ($j >= 0 and $temp < $array[$j]) {
                $array[$j + $gap] = $array[$j];
                $j -= $gap;
            }
            $array[$j + $gap] = $temp;
        }
        $gap = (int)$gap / 2;
    }

}

main();

```