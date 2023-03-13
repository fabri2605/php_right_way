<?php

declare(strict_types=1);

function csvsToArray($dir_path): array
{
    $files = [];
    foreach (scandir($dir_path) as $file) {
        if (is_dir($file))
            continue;
        $files[] = $dir_path . $file;
    }

    if (!count($files)) {
        echo 'Directory is empty!';
        return [];
    }

    foreach ($files as $file_path) {
        $csvToRead = fopen($file_path, 'r');
        // The feof() function checks if the end-of-file (EOF) 
        // has been reached in the file pointer passed to it.
        while (!feof($csvToRead)) {
            $line = fgetcsv($csvToRead, 100, ',');
            if (empty($line[0]))
                continue;
            // file_reading, max chars of line to read, delimitter;
            $csvArray[] = $line;
        }

        fclose($csvToRead);
    }
    return $csvArray;
}

function getTotal($array): array
{
    $incomes = 0;
    $expenses = 0;
    $total = 0;
    foreach ($array as $line) {
        $num = str_replace(["$", ","], "", $line[3]);

        if ($num === 'Amount')
            continue;

        if ($num > 0) {
            $incomes += $num;
        } else {
            $expenses += $num;
        }

        $total += $num;
    }
    return [$total, $incomes, $expenses];
}