$(function(){
	$('#dt-users-list').DataTable();
	$('#agency_id').change(function(){
		var agency_id = $(this).val();
		loadItemCategoryByAgencyId(agency_id);
	});

	$('.chkbx-expiration-date').change(function(){
		if($(this).is(":checked")){
			$('#expiration_date').removeAttr('disabled');
		}else{
			$('#expiration_date').attr('disabled','disabled');
		}
	});

	if($('.chkbx-expiration-date').is(":checked")){
		$('#expiration_date').removeAttr('disabled');
	}else{
		$('#expiration_date').attr('disabled','disabled');
	}

	loadItemCategoryByAgencyId($('#agency_id').val());

})

function loadItemCategoryByAgencyId(agency_id)
{
	$('.item-categories-container').html('<div style="margin-top:6px"><i class="fa fa-spin fa-spinner"></i> Loading...</div>');
	$.post(BASE_URL + "item_categories/load_item_category_by_agency_id",{agency_id:agency_id},function(o){
		$('.item-categories-container').html(o);
	});
}