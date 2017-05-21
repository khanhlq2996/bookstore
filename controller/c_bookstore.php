<?php
include '../../../model/m_bookstore.php';
/**
* 
*/
class C_bookstore
{
	
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

}

?>