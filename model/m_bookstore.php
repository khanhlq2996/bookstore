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

	function getNumProductOfCategory($category_id)
	{
		$sql = "SELECT COUNT('product_id') as total FROM product WHERE find_in_set($category_id, categories)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>