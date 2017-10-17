<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta charset="utf-8" />
        <title>
            Database
        </title>
    </head>  
        <body>
            <header>
                <h1>Database</h1>
            </header>
            <?php
        
            ?>
           <table cellpadding="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Device type</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        
        <?php
        
        while ($row = mysql_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["deviceName"]; ?></td>
                <td><?php echo $row["deviceType"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
            </tr>
            <?php
        
        }
        ?>
        </table>
        </body>
    <footer>
        
    </footer>
</html>