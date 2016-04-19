jQuery(document).ready(function ($) {

    jQuery('[name="customername"]').val('Weboptimeez');
    jQuery('[name="customeraddress"]').val('Kirchenstrasse 9, 91054 Erlangen, Allemagne');
    jQuery('[name="task"]').val('Conception & supervision digitale');
    jQuery('[name="total"]').val('5000 euros');

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

        // if (jQuery('#logocustomer').attr('src') == 'http://dummyimage.com/428x120/eee/333333.png&text=LOGO') {
        //     jQuery('#logocustomer').remove();
        // }

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

                // pdf.output('dataurlnewwindow');
                pdf.save('contract.pdf');

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