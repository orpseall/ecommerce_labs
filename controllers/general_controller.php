<?php
//connect to the user account class
include("../classes/general_class.php");

//sanitize data




//--INSERT--//

//--SELECT--//

function selectAllProducts_ctr(){
    $selectedProducts=new general_class();

    //run method
    return $selectedProducts->selectAllProducts_cls();
}


//--UPDATE--//

//--DELETE--//

?>