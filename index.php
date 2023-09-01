<?php include('header.php') ?>
<?php
$moyenne = 0;
$moyenne =(isset($_POST['moyenne']))

?>



<div class="container">
    <h3 class="d-flex justify-content-center pt-4">la mention de l'élève selon sa moyenne obtenu au bac.</h3>
    <h3 class="d-flex justify-content-center alert alert-success">veuillez entrer la moyenne de l'eleve</h3>
    <form class="row g-3 pt-4 d-flex justify-content-center" action="" method="POST">
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Moyenne</label>
            <input type="number" class="form-control" name="moyenne" id=" moyenne" value="<?= $moyenne; ?>">
        </div>
        <div class=" col-auto">
            <button type="submit" class="btn btn-primary mb-3">Valider</button>
        </div>
    </form>
    <?php if ($moyenne >0 && $moyenne< 10) {  ?>
    <div class="alert alert-dark d-flex justify-content-center" role=" alert">
        <h3><?php echo "T'est Éliminé";
            } ?></h3>


        <?php if ($moyenne >= 10 && $moyenne < 12) {  ?>
        <div class="alert alert-dark d-flex justify-content-center" role=" alert">
            <h3><?php echo nl2br("Passable \n T'es admis");
                    } ?></h3>


            <?php if ($moyenne >= 12 && $moyenne < 14) {  ?>
            <div class="alert alert-primary d-flex justify-content-center" role="alert">
                <h3><?php echo nl2br("Assez Bien \n T'es admis"); } ?></h3>


                <?php if ($moyenne >= 14 && $moyenne < 16) {  ?>
                <div class="alert alert-secondary d-flex justify-content-center" role="alert">
                    <h3><?php echo nl2br("Bien \n T'es admis");} ?></h3>


                    <?php if ($moyenne >= 16 && $moyenne < 17) {  ?>
                    <div class="alert alert-success d-flex justify-content-center" role="alert">
                        <h3><?php echo nl2br("Très Bien \n T'es admis"); } ?>

                        </h3> <?php if ($moyenne >= 17 && $moyenne <= 20) { ?> <div
                            class="alert alert-warning d-flex justify-content-center" role="alert">
                            <h3><?php echo nl2br("Excellent \n T'es admis");} ?> </h3>


                            <?php if ($moyenne > 20) {  ?>
                            <div class="alert alert-danger d-flex justify-content-center" role="alert">
                                <h3><?php echo "Votre moyenne est superieur a 20 entrez la bonne moyenne ";
                                                            } ?>
                                </h3>


                            </div>
                            <?php include('footer.php') ?>