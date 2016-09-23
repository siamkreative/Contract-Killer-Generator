<h3 class="col-lg-12 col-md-4 col-sm-4">Vous</h3>

<div class="col-lg-8 col-md-4 col-sm-4">
    <div class="form-group">
        <label class="sr-only">Votre nom de société</label>
        <input class="form-control" type="text" name="vendor_company" value="" placeholder="Votre nom de société" required="true">
    </div>
</div>

<div class="col-lg-4 hidden-md hidden-sm">
    <div class="form-group"<?php if ($vendor_company_logo == '') { ?> disabled="true"<?php } ?>>
        <!-- https://www.filepicker.com/documentation/file_ingestion/widgets/pick -->
        <label class="sr-only">Ajouter votre logo</label>
        <input type="filepicker" data-fp-apikey="AbIR0ecfCQWSKjBIyWN8Uz" data-fp-button-class="btn btn-default btn-block btn-fp" name="logo" data-fp-button-text="+ logo" data-fp-extensions=".png,.jpg,.jpeg,.gif" onchange="jQuery('#vendor_company_logo').attr({'src':event.fpfile.url});">
    </div>
</div>

<div class="col-lg-12 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">details d'enregistrement de votre compagnie</label>
        <input class="form-control" type="text" name="vendor_company_id_details" value="" placeholder="details d'enregistrement de votre compagnie" required="true">
    </div>

</div>

<div class="col-lg-12 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">Votre nom</label>
        <input class="form-control" type="text" name="vendor_profile" value="" placeholder="Votre nom" required="true">
    </div>

</div>

<div class="col-lg-12 col-md-4 col-sm-4">

    <div class="form-group">
        <label class="sr-only">Votre adresse</label>
        <input class="form-control" type="text" name="vendor_profile_address" value="" placeholder="Votre adresse" required="true">
    </div>

</div>
