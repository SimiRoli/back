<?php
    //JSON beolvasasa
    $json = file_get_contents('cars.json');

    if ($json === false) {
        die('Error reading the file.');
    }

    $json_decode = json_decode($json, true);

    if ($json_decode === null) {
        die('Error decoding the JSON file.');
    }

    $cars = $json_decode['Cars']
    
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class='container mt-4'>
        <div class='row text-center'>
            <div class="col-sm-12">
                <table class="table table-dark" >
                    <tr>
                        <th>Név</th>
                        <th>Ár</th>
                        <th>Szín</th>
                    </tr>
                <?php
                    foreach($cars as $car) 
                    {
                            $ar = $car['price'] * 390;
                            if ($car['price'] < 100000 )
                            {
                                echo "<tr>";
                                echo "<td>".$car['name']."</td>";
                                echo "<td class='alma'>".$ar." Ft</td>";
                                echo "<td class='".$car['color']."'></td>";
                                echo "</tr>"; 
                            }else{
                                echo "<tr>";
                                echo "<td>".$car['name']."</td>";
                                echo "<td class='körte'>".$ar." Ft</td>";
                                echo "<td class='".$car['color']."'></td>";
                                echo "</tr>"; 
                            }
                        

                        
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>