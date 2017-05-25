<?php
include '../../../model/m_bookstore.php';
/**
* 
*/
class C_bookstore
{

	public function options()
	{
		$m_bookstore = new M_bookstore();
		$options = $m_bookstore->getOptions()[0];
		return $options;
	}

	public function slide()
	{
		$m_bookstore = new M_bookstore();
		$slide = $m_bookstore->getSlide();
		return array('slide'=>$slide);
	}

	public function menuCategory()
	{
		$m_bookstore = new M_bookstore();
		$categoryes = $m_bookstore->getCategoryes();
		return array('categoryes'=>$categoryes);
	}

	public function menu(){
		$m_bookstore = new M_bookstore();
		$menu = $m_bookstore->getMenu();
		return array('menu'=>$menu);
	}

	public function product($id){
		$m_bookstore = new M_bookstore();
		$product = $m_bookstore->getProduct($id);
		return array('product'=>$product);
	}

	public function author($author_id){
		$m_bookstore = new M_bookstore();
		$author = $m_bookstore->getAuthor($author_id);
		return array('author'=>$author);
	}

	public function category($category_id){
		$m_bookstore = new M_bookstore();
		$category = $m_bookstore->getCategory($category_id);
		return array('category'=>$category);
	}
	

	public function products($category_id, $start, $limit)
	{
		$m_bookstore = new M_bookstore();
		$products = $m_bookstore->getProducts($category_id, $start, $limit);
		return array('products'=>$products);
	}

	public function infoPage($category_id, $curent_page)
	{
		$limit = 16;
		$m_bookstore = new M_bookstore();
		$total_records = $m_bookstore->getNumProductOfCategory($category_id)[0]->total;
		$total_page = ceil($total_records / $limit);
		if ($curent_page > $total_page){
			$curent_page = $total_page;
		} else if($curent_page < 1) {
			$curent_page = 1;
		}
		$start = ($curent_page - 1) * $limit;
		return array('total_page' => $total_page, 'start' => $start, 'limit' => $limit);
	}

	public function checkLog($email, $pass)
	{
		$m_bookstore = new M_bookstore();
		$check = $m_bookstore->checkUser($email, $pass);
		if($check){
			return $check[0]->user_id;
		}
		else return false;
	}

	public function getUser($id)
	{
		$m_bookstore = new M_bookstore();
		$check = $m_bookstore->getUser($id);
		return $check;
	}

	public function updateUser($id, $name, $addr, $phone)
	{
		$m_bookstore = new M_bookstore();
		$update = $m_bookstore->updateUser($id, $name, $addr, $phone);
		return $update;
	}

	public function updateUserPass($id, $pass)
	{
		$m_bookstore = new M_bookstore();
		$update = $m_bookstore->updateUserPass($id, $pass);
		return $update;
	}

	public function addView($id)
	{
		$m_bookstore = new M_bookstore();
		$result = $m_bookstore->addView($id);
		return $result;
	}

	public function newProducts()
	{
		$m_bookstore = new M_bookstore();
		$get = $m_bookstore->getNewProducts();
		return array('products'=>$get);
	}

	public function bestViewProducts()
	{
		$m_bookstore = new M_bookstore();
		$get = $m_bookstore->bestViewProducts();
		return array('products'=>$get);
	}

	public function getComments($id)
	{
		$m_bookstore = new M_bookstore();
		$cmt = $m_bookstore->getComments($id);
		return $cmt;
	}

	public function addComment($user_id, $product_id, $cmt)
	{
		$m_bookstore = new M_bookstore();
		$cmt = $m_bookstore->addComment($user_id, $product_id, $cmt);
		return $cmt;
	}

}

?>