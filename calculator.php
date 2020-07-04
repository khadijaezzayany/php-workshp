<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    function factorielle($nb){
        if($nb == 0){
            return(1);
        }
        else{
            return $nb * factorielle($nb - 1);
        }
    }
    echo factorielle(8).'<br>';





    function nbrParamètres(...$nbrs){
        return func_num_args();
    }
    $result  = nbrParamètres(1,1,1,1,1,'abcd','abc','azert');
    echo 'la somme des nombres d\'entrée est:'.$result .'<br>';



   
   
   
    function bnrPremier(int $number){

        if($number < 2){
            return false;
        }

    for ($i = 2; $i <($number -1); $i++){
       if($number %$i ==0){
           return false;
       } 
    }
    return true;
    }
    $resultt = bnrPremier(97);
    if($resultt){
        echo 'le nombre est premier'.'<br>';
    }
    else{
        echo 'le nombre n\'est pas premier '.'<br>';
    }




    function performOperation(){
        echo call_user_func('factorielle');
        echo call_user_func('nbrParamètres');
        echo call_user_func('bnrPremier');
    }
    echo performOperation();
  
?>
   
    
</body>
</html>