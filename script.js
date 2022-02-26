
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


script1.js




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

scrip3.js




function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
