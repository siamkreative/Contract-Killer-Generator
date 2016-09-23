<h1>CONTRAT DE PRESTATIONS DE SERVICES</h1>
<p class="newpage" data-pdf-endpage="2"></p>
<div class="between">
    <?php require('zones/between.php'); ?>
</div>
<?php pdfPageSeparator(17); ?>

<div class="project">
    <?php require('zones/project.php'); ?>
</div>

<p class="newpage" data-pdf-endpage="8"></p>
<div class="hidden-pdf">
    <?php require('vendor/google/pub_rwd.php'); ?>
</div>

<div class="authorship">
    <?php require('zones/authorship.php'); ?>
</div>

<div class="payment">
    <?php require('zones/payment.php'); ?>
</div>

<?php pdfPageSeparator(8); ?>

<div class="confidentiality">
    <?php require('zones/confidentiality.php'); ?>
</div>

<?php require('zones/nitty.php'); ?>

<div class="juridiction">
    <?php require('zones/legal.php'); ?>
</div>

<p class="newpage" data-pdf-endpage="2"></p>
<div class="hidden-pdf">
    <?php require('vendor/google/pub_rwd.php'); ?>
</div>

<div class="signature">
    <p>
        Fait en 2 (deux) exemplaires.
    </p>
    <p>
        A Erlangen (Allemagne), Le <?php echo $contract_date; ?>
    </p>
    <div id="signatures" class="row">
        <p>
            Signature pour <?php echo $vendor_company; ?>
        </p>
        <p class="newpage" data-pdf-endpage="6"></p>
        <p>
            Signature Pour <?php echo $customer_profile; ?>
        </p>
    </div>
</div>
