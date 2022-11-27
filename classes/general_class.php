<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	

	//--SELECT--//

	//select one product
	public function selectOneProduct_cls($product_id){
		//write a query
		$sqlQuery = "SELECT * FROM `products` WHERE `product_id` = $product_id";

		//fetch one product
		return $this->db_fetch_one($sqlQuery);
	}

	//select all products
	public function selectAllProducts_cls()
	{
		$sqlQuery="SELECT * FROM `products`";

		//fetch all results
		return $this->db_fetch_all($sqlQuery);

	}

	//--UPDATE--//



	//--DELETE--//
	

}

?>