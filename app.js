jQuery(document).ready(function ($) {

	var form = $('#form-customize'),
		contract = $('#contract');

	form.on('submit', function () {
		// Copy the required stuff (style and encoding)
		$('.nopdf').siblings().prependTo('#contract');

		// Get the outerHTML
		var html = contract.prop('outerHTML');

		// Insert HTML in hidden input
		$('#input-html').val(html);
	});

	/*
	Bootstrap Datepicker
	https://github.com/eternicode/bootstrap-datepicker
	 */
	form.find('.input-group.date').datepicker();

	/*
	Editing the form
	 */
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

	/*
	Filepicker
	 */
	filepicker.setKey('AaYOCmvPTuqi2elqaGIGgz');
	form.on('change', 'input[name="logo"]', function () {
		contract.find('.logo').attr('src', event.fpfile.url).removeClass('hide');
	});

	/*
	Geolocation
	http://www.telize.com/
	 */
	form.on('click', '#locateme', function (event) {
		event.preventDefault();
		$('input[name="court"]').val('Searching location...');
		$.getJSON('//www.telize.com/geoip', function (geodata) {
			$('input[name="court"]').val(geodata.city);
		});
	});

});