<?php
    include_once '../Model/methodedeplacement.php';
    include_once '../Controller/methodedeplacementC.php';

    $error = "";

    // create methodedeplacement
    $methodedeplacement = null;

    // create an instance of the controller
    $methodedeplacementC = new methodedeplacementC();
    if (
        isset($_POST["id_md"]) &&
        isset($_POST["libelle"]) &&
        isset($_POST["impact_env"]) &&
        isset($_POST["points_bonus"]) &&
        isset($_POST["nb_passagers_max"])
    ) {
        if (
            !empty($_POST["id_md"]) &&
            !empty($_POST["libelle"]) &&
            !empty($_POST["impact_env"]) &&
            !empty($_POST["points_bonus"]) &&
            !empty($_POST["nb_passagers_max"])
        ) {
            $methodedeplacement = new methodedeplacement(
                $_POST['id_md'],
                $_POST['libelle'],
                $_POST['impact_env'],
                $_POST['points_bonus'],
                $_POST['nb_passagers_max']
            );
            $methodedeplacementC->ajoutermethodedeplacement($methodedeplacement);
            header('Location: affichermethodedeplacement.php');
            exit();
        } else {
            $error = "Missing information";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
    <button><a href="affichermethodedeplacement.php">Retour  des methodes deplacements</a></button>
    <hr>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
        
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="id_md">Identifiant du mode de methode deplacement :</label>
                </td>
                <td><input type="text" name="id_md" id="id_md" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="libelle">Libellé :</label>
                </td>
                <td><input type="text" name="libelle" id="libelle" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="impact_env">Impact sur l'environnement :</label>
                </td>
                <td><input type="text" name="impact_env" id="impact_env" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="points_bonus">Points bonus :</label>
                </td>
                <td>
                    <input type="text" name="points_bonus" id="points_bonus">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nb_passagers_max">Nombre maximal de passagers :</label>
                </td>
                <td>
                    <input type="text" name="nb_passagers_max" id="nb_passagers_max">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Envoyer"> 
                </td>
                <td>
                    <input type="reset" value="Annuler" >
                </td>
            </tr>
        </table>
    </form>
</body>
</html>