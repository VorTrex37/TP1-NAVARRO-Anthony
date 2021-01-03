<form class="formulaire" action="/etudiant" method="POST">
  <div class="mb-3">
    <label class="form-label">Nombre d'élèves par groupes</label>
    <input type="number" name="nbeleves" class="form-control" value="1">
  </div>
  <button type="submit" class="button">Submit</button>
</form>

<?php
if (isset($_POST['nbeleves'])) {
    ?>
<div id="tabs" class=" container flex-wrap">
        <?php
        shuffle($A_vue['etudiants']);
        $nbstudents = $_POST['nbeleves'];
        $nbgroupes = intval(sizeof($A_vue['etudiants'])/$nbstudents);
        $restes = sizeof($A_vue['etudiants'])%$nbstudents;
        for ($i=0; $i < $nbgroupes;$i++) {
            ?>
            <div class="card">
                <div class="card-header">
                    Groupe <?php echo $i+1 ?>
                </div>
                <ul class="list-group list-group-flush">
                    <?php
                    foreach(array_splice($A_vue['etudiants'], 0 , $nbstudents) as $student) {
                        ?>
                            <li class="list-group-item"><?php echo implode(" ",$student) . PHP_EOL ; ?></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
            <?php
        }?>
        <?php
        if ($restes != 0) {
            ?>
            <div class="card">
            <div class="card-header">
                Groupe <?php echo $nbgroupes + 1 ?>
            </div>
            <?php
            for ($i=0; $i < $restes; $i++) {
            ?>
                <ul class="list-group list-group-flush">
                    <?php
                    foreach(array_splice($A_vue['etudiants'], 0 , $nbstudents) as $student) {
                        ?>
                            <li class="list-group-item"><?php echo implode(" ",$student) . PHP_EOL; ?></li>
                            <?php
                        }
                    ?>
                </ul>
            </div> 
            <?php  
            }
        }
        ?>
    <?php
    }
    ?>
</div>
