$(function(){

    var $registerForm=$("#myForm");

   


  


  
  jQuery.validator.addMethod("lettersonly", function(value, element) 
  {
  return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Letters only please"); 




   if($registerForm.length){

     $registerForm.validate({

        rules:{
            email:{
                required:true,
                email:true
              
               
                
            },
           username:{
                required:true,
                lettersonly:true,
                rangelength: [2, 10]
            },
           
           
          password:{
                required:true,
                
            },
            confirmpassword:{
                required:true,
                equalTo:"#password"
            },
           
         },

         messages:{

            email:{
                required:'Email is Mandatory',
                email:"Please Enter a Valid Email"
            },
           username:{
                required:'Please Enter User Name '
            },
           
          
            password:{
                required:'Please Enter the Password '
            },
            confirmpassword:{
                required:'Please Enter the Confirm Password ',
                equalTo: "Please Enter the Same Password"
            },
           
         },
         
         

    })

    }
    
    

  

})