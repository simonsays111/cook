    function trueResults(id){ 
        
        document.getElementById(id).style.background="#32ff2b";
        document.getElementById(id).style.color="white";
        window.setTimeout(function(){
                   (document.getElementById(id).style.background="gray")}, 10000);
    
       
            }
        
        function falseResult(id){
            
        document.getElementById(id).style.background="red";
        document.getElementById(id).style.color="white";
                 window.setTimeout(function(){
                   (document.getElementById(id).style.background="gray")}, 1000);
    
        }