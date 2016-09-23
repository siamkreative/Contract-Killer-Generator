<?php
error_reporting(-1);
require('includes/functions.php');
require('includes/elements.php');
require('templates/header.php');
?>
        <div id="sidebar-wrapper">
            <div class="sidebar-inner">

                <h3>Gerez votre propre contrat</h3>

                <p class="sidebar-description">
                    Remplissez les champs ci-dessous et cliquez sur le bouton "Enregistrer au format PDF" pour sauvegarder votre contrat au format PDF (teste uniquement sous chrome).
                </p>

                <?php require('templates/form.php'); ?>

                <div class="sidebar-about hidden-md hidden-sm">

                    <h3>A notre sujet</h3>
                    <p>
                        Traduit et mis-a-jour avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> en Allemagne par <a href="http://www.davaskweblimited.com/">davask web limited</a>.
                    </p>
                    <p>
                        Cet outil est une amelioration du travail de <a href="http://twitter.com/siamkreative/">SiamKreative</a>.
                    </p>
                    <h3>Avertissement</h3>
                    <p>
                        La publicite n'apparait pas dans le contrat PDF
                    </p>

                </div>

            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">
                    <div id="contract">
                        <?php require('templates/contract.php'); ?>
                    </div><!-- /#contract -->
                </div><!-- /.container -->
            </div>
        </div>

<?php require('templates/footer.php'); ?>
