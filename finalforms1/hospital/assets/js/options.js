function changeStatus()
{
	var status=$('#volunteertype').val();
   
     if (status=="doctor")
     {
     	$('.doctor').show();
     	$('.speaker').hide();
     	$('.donor').hide();
     } 

	else if(status=="speaker")

	{
		$('.speaker').show();
        $('.doctor').hide();
        $('.donor').hide();
	}

	else if(status=="donor")
	{
        $('.speaker').hide();
        $('.doctor').hide();
        $('.donor').show();
	} 
    
	else
	{
		$('.speaker').hide();	

	}





};