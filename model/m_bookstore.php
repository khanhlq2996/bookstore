<?php
include "database.php";

/**
* 
*/
class M_bookstore extends database
{
	
	function getSlide()
	{
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getCategoryes()
	{
		$sql = "SELECT * FROM category";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function getMenu()
	{
		$sql = "SELECT * FROM menu WHERE (menu_parent = 0)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getProduct($id)
	{
		$sql = "SELECT * FROM product WHERE (product_id = ". $id . ")";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getAuthor($author_id)
	{
		$sql = "SELECT * FROM author WHERE author_id = $author_id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getCategory($category_id)
	{
		$sql = "SELECT * FROM category WHERE category_id = $category_id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getProducts($category_id, $start, $limit)
	{
		$sql = "SELECT * FROM product WHERE find_in_set($category_id, categories) LIMIT ". $start .",".$limit;
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getNewProducts()
	{
		$sql = "SELECT * FROM product ORDER BY product_created DESC LIMIT 0, 9";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function bestViewProducts()
	{
		$sql = "SELECT * FROM product ORDER BY product_view DESC LIMIT 0, 9";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getNumProductOfCategory($category_id)
	{
		$sql = "SELECT COUNT('product_id') as total FROM product WHERE find_in_set($category_id, categories)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	function getOptions()
	{
		$sql = "SELECT * FROM options";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function checkUser($email, $pass)
	{
		$sql = "SELECT user_id FROM user WHERE (user_email = '$email') AND (user_password = '$pass')";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getUser($id)
	{
		$sql = "SELECT * FROM user WHERE (user_id = '$id')";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	function updateUser($id, $name, $addr, $phone)
	{
		$sql = "UPDATE user SET user_name = '$name', user_phone = '$phone', user_address = '$addr' WHERE user.user_id = $id";
		$this->setQuery($sql);
		$result = $this->execute();
		if($result){
			return true;
		} else return false;
	}

	function updateUserPass($id, $pass)
	{
		$sql = "UPDATE user SET user_password = '$pass' WHERE user.user_id = $id";
		$this->setQuery($sql);
		$result = $this->execute();
		if($result){
			return true;
		} else return false;
	}

	function getView($id)
	{
		$sql = "SELECT product_view FROM product WHERE product_id = $id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	function addView($id)
	{
		$view = $this->getView($id)->product_view + 1;
		$sql = "UPDATE product SET product_view = $view WHERE product_id = '$id'";
		$this->setQuery($sql);
		$result = $this->execute();
		if($result){
			return true;
		} else return false;
	}

	function getComments($id)
	{
		$sql = "SELECT * FROM comment WHERE product_id = $id ORDER BY comment_created DESC";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getOrder($order_id)
	{
		$sql = "SELECT * FROM order WHERE order_id = $order_id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	function getBills($id)
	{
		$sql = "SELECT * FROM transaction WHERE user_id = $id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function addComment($user_id, $product_id, $cmt)
	{
		$sql = "INSERT INTO comment(product_id, user_id, comment_messenger, comment_created) VALUES ($product_id, $user_id, '".$cmt."', '".date("Y-m-d")."')";
		//echo $sql;
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>