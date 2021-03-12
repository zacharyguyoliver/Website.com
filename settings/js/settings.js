 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");


//build json to be sent to setting processing file in /library by ajax
$('.save-btn').on('click',function(){
    var settingsArray = {};
    var fileName = '';
    var curKey = ''
    var form = $(this).closest('form').attr('id');

    $('#'+form +' input').each(function(){
        if($(this).hasClass('settingsBlock')){
            curKey = $(this).val();
            settingsArray[curKey] = {};
        } else if($(this).attr('id') == 'hidFileName'){
            fileName = $(this).val();
        }else{
            settingsArray[curKey][$(this).attr('name')] = $(this).val();
        }
    });
    $.ajax({
        type: "POST",
        url: "/library/settings-processor.php",
        data: {fileName: fileName, settings: JSON.stringify(settingsArray)},
        dataType: "JSON"
  });

});


	