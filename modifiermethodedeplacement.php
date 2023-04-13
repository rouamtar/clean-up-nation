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
            !empty($_POST['libelle']) &&
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
            $methodedeplacementC->modifiermethodedeplacement($methodedeplacement, $_POST["id_md"]);
            header('Location:affichermethodedeplacement.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier méthode de déplacement</title>
</head>
<body>
    <button><a href="affichermethodedeplacement.php">Retour  des méthodes de déplacement</a></button>
    <hr>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
            
    <?php
        if (isset($_POST['id_md'])){
            $id_md = $_POST['id_md'];
            $methodedeplacement = $methodedeplacementC->recuperermethodedeplacement($id_md);
            
    ?>
        
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="id_md">identifiant méthode de déplacement :
                    </label>
                </td>
                <td><input type="text" name="id_md" id="id_md" value="<?php echo $methodedeplacement['id_md']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="libelle">libellé de la méthode de déplacement :
                    </label>
                </td>
                <td><input type="text" name="libelle" id="libelle" value="<?php echo $methodedeplacement['libelle']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="impact_env">impact environnemental de la méthode de déplacement :
                    </label>
                </td>
                <td><input type="text" name="impact_env" id="impact_env" value="<?php echo $methodedeplacement['impact_env']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="points_bonus">points bonus de la méthode de déplacement :
                    </label>
                </td>
                <td>
                        <input type="text" name="points_bonus" value="<?php echo $methodedeplacement['points_bonus']; ?>" id="

</tr>
            <tr>
                <td>
                    <label for="nb_passagers_max">nombre de passagers maximum de la méthode de déplacement :
                    </label>
                </td>
                <td><input type="text" name="nb_passagers_max" id="nb_passagers_max" value="<?php echo $methodedeplacement['nb_passagers_max']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Modifier">
                </td>
            </tr>
        </table>
    </form>

<?php } ?>
</body>
</html>