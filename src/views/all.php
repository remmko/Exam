<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">    
    <title>Inscription</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


<?php include "mainmenu.php"?>

<script>
    $(document).ready(function() {
        var jsonData = <?php echo json_encode($getAll)?>;

        var table = $('<table id="example" class="display dataTable no-footer" style="width: 100%;" aria-describedby="example_info"></table>');
        var thead = $('<thead></thead>').appendTo(table);
        var tbody = $('<tbody></tbody>').appendTo(table);

        var headerRow = $('<tr></tr>').appendTo(thead);
        for (var key in jsonData[0]) {
            if (jsonData[0].hasOwnProperty(key)) {
                $('<th></th>').text(key).appendTo(headerRow);
            }
        }

        for (var i = 0; i < jsonData.length; i++) {
            var dataRow = $('<tr class="' + (i % 2 === 0 ? 'even' : 'odd') + '"></tr>').appendTo(tbody);
            for (var key in jsonData[i]) {
                if (jsonData[i].hasOwnProperty(key)) {
                    $('<td></td>').text(jsonData[i][key]).appendTo(dataRow);
                }
            }
        }

        table.appendTo('body');

        new DataTable("#example");
    });
</script>

</body>
</html>
