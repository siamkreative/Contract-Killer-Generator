<h3 class="col-lg-12 col-md-4 col-sm-4">Le client</h3>

<div class="col-lg-12 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">Nom du client</label>
        <input class="form-control" type="text" name="customer_profile" value="" placeholder="Votre nom" required="true">
    </div>

</div>

<div class="col-lg-12 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">details d'enregistrement de la compagnie du client</label>
        <input class="form-control" type="text" name="customer_company_id_details" value="" placeholder="details d'enregistrement de la compagnie du client">
    </div>

</div>

<div class="col-lg-8 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">Nom de la société du client</label>
        <input class="form-control" type="text" name="customer_company" value="" placeholder="Nom de la société du client">
    </div>

</div>

<div class="col-lg-4 hidden-md hidden-sm">
    <div class="form-group"<?php if ($customer_company_logo == '') { ?> disabled="true"<?php } ?>>
        <!-- https://www.filepicker.com/documentation/file_ingestion/widgets/pick -->
        <label class="sr-only">Ajouter le logo du client</label>
        <input type="filepicker" data-fp-apikey="AbIR0ecfCQWSKjBIyWN8Uz" data-fp-button-class="btn btn-default btn-block btn-fp" name="logo" data-fp-button-text="+ logo" data-fp-extensions=".png,.jpg,.jpeg,.gif" onchange="jQuery('#customer_company_logo').attr({'src':event.fpfile.url});">
    </div>
</div>

<div class="col-lg-12 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">Adresse du client</label>
        <input class="form-control" type="text" name="customer_address" value="" placeholder="Adresse du client" required="true">
    </div>

</div>
