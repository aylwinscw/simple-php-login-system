<?php 
    function showErrors(){
        
        // global can only make it work
        global $errors;
            if (count($errors) > 0){

                foreach ($errors as $error){
                    echo "<p>$error</p>";
                }
            }
    }
    
?>