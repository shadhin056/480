$(document).ready(function(){
  
	//auto refresh content
	$("#autosubmit").click(function(){
	var content =$("#body").val();	
	if($.trim(content)!=''){
            $.ajax({
               url:"check/checkrefresh.php",
               method:"POST",
               data:{content:content},
                dataType: 'text',
                success:function(data){
                    $("#body").val("");
                }
            });
            return false;
            
        }
		
		
		
	});
	
	setInterval(function(){
		$("#autostatus").load("check/getrefresh.php").fadeIn("slow");
		
	},1000);
	
	
	
 });  