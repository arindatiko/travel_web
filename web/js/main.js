$('#user-user_type').change(function(){
	// alert();
	if ($(this).val() == 'driver') {
		$('#div-driver').removeClass('hide');
		$('#div-wisata').addClass('hide');
		$('#div-penginapan').addClass('hide');
		$('#div-kuliner').addClass('hide');
	}else if($(this).val() == 'admin_kuliner'){
		$('#div-kuliner').removeClass('hide');
		$('#div-wisata').addClass('hide');
		$('#div-penginapan').addClass('hide');
		$('#div-driver').addClass('hide');
	}else if($(this).val() == 'admin_wisata'){
		$('#div-wisata').removeClass('hide');
		$('#div-kuliner').addClass('hide');
		$('#div-penginapan').addClass('hide');
		$('#div-driver').addClass('hide');
	}else if($(this).val() == 'admin_hotel'){
		$('#div-penginapan').removeClass('hide');
		$('#div-kuliner').addClass('hide');
		$('#div-wisata').addClass('hide');
		$('#div-driver').addClass('hide');
	}else{
		$('#div-penginapan').addClass('hide');
		$('#div-kuliner').addClass('hide');
		$('#div-wisata').addClass('hide');
		$('#div-driver').addClass('hide');
	}
});

$('#btn-modal-add-menu').click(function (){
		// alert();
	$('#modal-add-menu').modal('show')
		.find('#modal-content-add-menu')
		.load($(this).attr('value'));
});