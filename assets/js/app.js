jQuery(document).ready(function ($) {

    // jQuery('#form_vendor').hide();

    jQuery('[name="vendor_company').val('davask web limited');
    // jQuery('[name="vendor_company_logo').val('');
    jQuery('[name="vendor_company_id_details').val('numéro d\'incorporation 1782706 sous Companies Ordinance a Hong Kong');
    jQuery('[name="vendor_profile').val('david asquiedge');
    jQuery('[name="vendor_company_address').val('Room 747, 7/F, Star House, 3 Salisbury Road, Tsimshatsui, Kowloon, Hong Kong');
    jQuery('[name="vendor_profile_address').val('Kirchenstrasse 9, 91054 Erlangen, Allemagne');

    jQuery('[name="customer_company').val('Weboptimeez');
    // jQuery('[name="customer_company_logo').val('');
    jQuery('[name="customer_company_id_details').val('agissant pour le compte de la société');
    jQuery('[name="customer_profile').val('Weboptimeez');
    jQuery('[name="customer_address').val('Kirchenstrasse 9, 91054 Erlangen, Allemagne');

    jQuery('[name="contract_date').val('01/05/2016');
    jQuery('[name="contract_task').val('la conception & supervision digitale d\'une web application');
    jQuery('[name="contract_total').val('5000 EUR');
    jQuery('[name="contract_payment_calendar').val("Un deposit de 30% sera effectue afin de declencher le debut du projet. puis  un virement mensuel de 1000 sur 3 mois consecutifs se terminera avec le dernier virement effectue lors de la livraison");
    jQuery('[name="contract_payment_method').val('carte bancaire ou virement bancaire');

    jQuery('[disabled="true"] .btn').attr({'disabled':'true'});

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }
    var today = dd+'/'+mm+'/'+yyyy;
    jQuery('[name="date"]').val(today);

    var form = $('#form-customize')
    , contract = $('#contract')
    , pdf = new jsPDF('', 'px')
    , source = contract[0]
    , specialElementHandlers = {
        '#sidebar-wrapper': function(element, renderer){
            return true
        }
    }
    , margins = {
        top: 40,
        bottom: 60,
        left: 20,
        width: 366
    }
    , css = {
        'screen': {
            'padding':margins.top+'px '+margins.left+'px '+margins.bottom+'px'
            , 'font-size':'16px'
            , 'line-height':'24px'
            , 'width':'auto'
        },
        'print':{
            'padding':0
            , 'font-size':'12px'
            , 'line-height':'18px'
            , 'width':margins.width+(margins.left*2)
        }
    }

    contract.css(css.screen);

    form.on('submit', function (e) {
        e.preventDefault();

        contract.css(css.print);
        $('.inc_pdf').clone().addClass('temporary').prependTo('#contract');

        jQuery('table',source).each(function(index, el) {
            $(this).css({width:margins.width});
        });
        jQuery('.newpage',source).each(function(index, el) {
            var endpage = '';
            for (var i = 0; i < $(this).data('pdf-endpage'); i++) {
                endpage += '<span style="color:#ffffff;">-</span><br/>';
            }
            $(this).html(endpage);
        });

        pdf.fromHTML(
            source
            , margins.left
            , margins.top
            , {
                'width': margins.width
                , 'splitpage':true
            }
            , function(dispose) {

                pdf.output('dataurlnewwindow');
                // pdf.save('contract.pdf');

                jQuery('table',source).each(function(index, el) {
                    $(this).css({width:margins.width});
                });
                jQuery('.newpage',source).each(function(index, el) {
                    $(this).html('');
                });

                contract.find('.temporary').remove();
                contract.css(css.screen);

        });

    });

    /*
    Bootstrap Datepicker
    https://github.com/eternicode/bootstrap-datepicker
     */
    form.find('.input-group.date').datepicker();

    /*
    Editing the form
     */
     jQuery('.form-control').each(function(index, el) {
        var inputName = $(this).attr('name');
        var inputVal = $(this).val();
        if (inputVal.length) {
            contract.find('.' + inputName).text(inputVal);
        }
     });
    form.on('focus keyup change', '.form-control', function (event) {
        event.preventDefault();
        var inputName = $(this).attr('name');
        var inputVal = $(this).val();
        if (inputVal.length) {
            contract.find('.' + inputName).addClass('item-editing').text(inputVal);
        } else {
            contract.find('.' + inputName).addClass('item-editing');
        }
    });

    /*
    Toggle sidebar visibility
     */
    $('.cmn-toggle-switch').on('click', function (event) {
        event.preventDefault();
        $(this).toggleClass('active');
        $('#wrapper').toggleClass('toggled');
    });

    // /*
    // Filepicker
    //  */
    // filepicker.setKey('AaYOCmvPTuqi2elqaGIGgz');
    // form.on('change', 'input[name="logo"]', function () {
    //     contract.find('.logo').attr('src', event.fpfile.url).removeClass('hide');
    // });
    $('.btn-fp').attr('tabIndex', '-1');

    /*
    Media Queries
     */
    if (matchMedia) {
        var mq = window.matchMedia('(min-width: 768px) and (max-width: 1200px)');
        mq.addListener(WidthChange);
        WidthChange(mq);
    }

    function WidthChange(mq) {
        if (mq.matches) {
            $('textarea[name="payment"]').attr('rows', 1);
        } else {
            $('textarea[name="payment"]').attr('rows', 2);
        }
    }

});