<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read From File</title>
</head>
<body>
    <table align="center" border="1px" width="70%">
       
        <tr>
            <th>Lat</th>
            <th>Lon</th>
            <th>Driver_name</th>
            <th>Date</th>
        </tr>
        <?php
        $myFile = fopen("file.txt", "r") or die("Unable to open file!");
        $data = fread($myFile, filesize("file.txt"));
        $json = json_decode($data, true);
        foreach ($json as $item) {
        ?>
            <tr>
                <td><?=$item['lat']?></td>
                <td><?=$item['lon']?></td>
                <td><?=$item['driver_name']?></td>
                <td><?=$item['date']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
