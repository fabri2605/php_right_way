<!DOCTYPE html>
<html>

<head>
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;"> Initial Project
        Completed</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($csvArray as $line) {
                $color = 'red';
                if ($line[0] === 'Date')
                    continue;
                if (substr($line[3], 1) > 0) {
                    $color = 'green';
                }

                $date = new DateTime($line[0]);

                echo
                    '<tr>
                        <td>' . $date->format('M j, Y') . '</td>
                        <td>' . $line[1] . '</td>
                        <td>' . $line[2] . '</td>
                        <td style="color: ' . $color . '">'
                    . $line[3] . '</td>
                    </tr>';
            }

            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                <td>
                    <?php echo $totals[1] ?>
                </td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td>
                    <?php echo $totals[2] ?>
                </td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <td>
                    <?php echo $totals[0] ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>