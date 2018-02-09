<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>List_Justyna</title>
    </head>
    <body>
        <?php
            // connection avec BD
            $link_bd = new PDO("mysql:host=localhost; dbname=vincent_05;charset=utf8",'root','root');
            // on declaire WHAT we want to take from the TABLE
            $results = $link_bd->query('SELECT * FROM vincent_exc_01');
        ?>
        <ul>
            <?php
                echo '<h2> I\'m using phpStorm </h2>';

                // je declare une variable ___$row___ ou on va stocker les resultats trouvés in the TABLE
                while($row = $results->fetch(PDO::FETCH_ASSOC)) { ?>

                   <li>
                       <?php echo $row['name']; ?>.............................

                        <a href='details.php'>Details</a>
                        <a href='delete.php'>Delete</a>
                   </li>
                    <?php
                }
                ?>
            <hr />
            <a href='add.php'>Add an employee</a>
        </ul>
    </body>
</html>