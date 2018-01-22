  function validate() {
             
     // first name validation         
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("f_name").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) && x.length>=2 && x.length<=50) {
        text = '<span class="glyphicon glyphicon-ok "></span>';
    } else {
        text = "The first name must be between 2 and 50 characters";
    }
    document.getElementById("firstValidation").innerHTML = text;
      
      // last name validation  
       var y;

    // Get the value of the input field with id="numb"
    y = document.getElementById("l_name").value;

    // If x is Not a Number or less th  an one or greater than 10
    if (isNaN(y) && y.length>=2 && y.length<=50) {
          text = '<span class="glyphicon glyphicon-ok "></span>';
       

    } else {
        text = "The last name must be between 2 and 50 characters";
         document.getElementById("lastValidation").innerHTML = text; 
    }
   
         document.getElementById("lastValidation").innerHTML = text;       
         }