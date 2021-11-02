<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP</title>
    

</head>

<body>
    <?php
        $bool = true;
        $entier = 45;
        $caracteres = "nom";
        $float = 1.3456;
    ?>
    <table >
        <thead>
            <tr>
                
                <td style="border: 1px black solid; padding: 4%;width:10% ">Type</td>
                <td style="border: 1px black solid; padding: 4%;width:10%">Nom</td>
                <td style="border: 1px black solid; padding: 4%;width:10%">Valeur</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td style="border: 1px black solid;padding: 4% "><?php echo gettype ($bool) ?></td>
                <td style="border: 1px black solid;padding: 4%  "> bool</td>
                <td style="border: 1px black solid;padding: 4%  "><?php echo $bool ?></td>
            </tr>

            <tr>
                <td style="border: 1px black solid;padding: 4% "><?php echo gettype ($entier) ?> </td>
                <td style="border: 1px black solid;padding: 4% ">entier</td>
                <td style="border: 1px black solid;padding: 4% "> <?php echo $entier ?></td>
            </tr>

            <tr>
                
                <td style="border: 1px black solid;padding: 4% "><?php echo gettype ($caracteres) ?></td>
                <td style="border: 1px black solid;padding: 4% "> caracteres</td>
                <td style="border: 1px black solid;padding: 4% "> <?php echo $caracteres ?></td>
            </tr>

            <tr>
                
                <td style="border: 1px black solid; padding: 4%"><?php echo gettype ($float) ?> </td>
                <td style="border: 1px black solid; padding: 4%">float </td>
                <td style="border: 1px black solid; padding: 4%"><?php echo $float ?></td>
            </tr>
        </tbody>
    </table>

    
    
</body>
</html>
