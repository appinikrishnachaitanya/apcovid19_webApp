

$(".form-group").on('input','.prd','.prc',function(){
	var totalcharges=0;
	var totalamount=1;
$('.form-group .prd').each(function(){
	var inputval1=$(this).val()
	
		totalcharges += parseFloat(inputval1)
	
});
$('.form-group .prc').each(function(){
	var inputval2=$(this).val()
	
		totalamount *= parseFloat(inputval2)
	
});

var total=totalcharges+totalamount;
$('#result').text(total);
});
