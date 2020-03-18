<?php
$mouths = array(
    '01' => 'janvier',
    '02' => 'fevrier',
    '03' => 'mars',
    '04' => 'avril',
    '05' => 'mai',
    '06' => 'juin',
    '07' => 'juillet',
    '08' => 'aout',
    '09' => 'septembre',
    '10' => 'octobre',
    '11' => 'novembre',
    '12' => 'decembre',
);
?>
<br>
<br>
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <div>
                <h2 style="text-align: center;" class="titre">Mes fiches de frais</h2>
                <h3 class="titre2">Mois à sélectionner :</h3>
            </div>
            <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
                <label for="lstMois" accesskey="n">Mois : </label>
                <select class="form-control" id="lstMois" name="lstMois">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        if ($mois == $moisASelectionner) {
                    ?>
                            <option value="<?php echo $mois ?>"><?php echo $mouths[$mois]; ?></option>
                        <?php
                        } else { ?>
                            <option value="<?php echo $mois ?>"><?php echo $mouths[$mois]; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <br>
                <div style="float: right;">
                    <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Ajouter</button>
                    <button class="btn btn-outline-secondary" id="effacer" type="reset" value="Effacer">Effacer</button>
                </div>
            </form>
            <br>