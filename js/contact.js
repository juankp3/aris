$(function() {         
   var contactUs = {
       init : function(){
          contactUs.btnSend();
        },
       SendForm : function(){
       		
       },
       btnSend : function(){
			$("#btnSend").click(function(){
			    var question = $("#question").val();
			    var email = $("#email").val();
			    
			    $("#resultForm").removeClass("successful").addClass("error").html("");
			    if($.trim(question)!="" && $.trim(email)!=""){
    			    $.ajax({
    				    type: 'POST',
    				    url: 'email.php',
    				    async: true,
    				    cache: false,
    				    timeout: 60000, 
    				    dataType : "json",
    				    data: $("#formQuestion").serialize(),
    				    beforeSend: function( xhr ) {
    				    },
    				    success: function(jsonData){
    				        console.log(jsonData.error)
    				        if(jsonData.error){
    				            $.each( jsonData.error, function( key, value ) {
                                  $("#resultForm").append(value)
                                });
                                console.log('error')
    				        }
    				        
				            if(jsonData.result){
				                $("#question").val("");
				                $("#email").val("");
				                $("#resultForm").removeClass('error').addClass("successful").html('Su mensaje de envio con exito-')
				                				            }
    				          
    				    },
    				    error: function(XMLHttpRequest, textStatus, errorThrown)
    				    {
    				            
    				    }
    				});
				
			    }else{
			        $("#resultForm").html("Please, complee the form")
			    }
				
           });
       },
       mofalForm : function(){
            return $("#myModal");
        }
    }
    contactUs.init();
   
});