$(function(){
/*
    var $registerForm=$("#login");

   


  
  jQuery.validator.addMethod("lettersonly", function(value, element) 
  {
  return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Letters only please"); 




   if($registerForm.length){

     $registerForm.validate({

        rules:{
           
           username:{
                required:true,
                lettersonly:true,
                rangelength: [2, 10]
            },
           
           
          password:{
                required:true,
                
            },
           
           
         },

         messages:{

            
           username:{
                required:'Please Enter User Name '
            },
           
          
            password:{
                required:'Please Enter the Password '
            },
          
           
         },
         
         

    })

    }
    */
    var $loginForm=$("#login");

    if($loginForm.length){

        $loginForm.validate({

            rules:{
                username:{
                    required:true,
                    email:true
                },
              Password:{
                    required:true
                    
                }
            },

            messages:{
                username:{
                    required:'username is required',
                    
                },
                Password:{
                    required:'Please Enter the Password ',
                    
                }
            }

        })
    }

  

})