<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Breadcrumb extends CI_Model{

	/**
	 * Store breadcrumb elements in this array.
	 * @var array
	 */
	private $data = array(); 

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @param array $item The breadcrumb item
	 */
	public function add($item){
		$this->data[] = $item;
	}

	/**
	 * Change last element to active & remove url
	 * @return array
	 */
	public function decorator()
	{
		$data = $this->data;
		$last = array_pop($data);
		$last['active'] = true;
		$last['url'] = '';
		array_push($data, $last);
		return $data;
	}

	/**
	 * Get item list array
	 * @param  boolean $decorated We want to be the last element is active
	 * @return array
	 */
	public function get($decorated = true)
	{
		if($decorated){
			return $this->decorator();
		}

		return $this->data;
	}
}
