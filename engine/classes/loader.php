<?php
abstract class hf {	
	protected function get_header() {
		include "view/common/header.php";
		
	}
	protected function get_menu() {
		include "view/common/menu.php";
		
	}
	protected function get_footer() {
		include "view/common/footer.php";
	}

	
	public function get_body() {    
		$this->get_header();
		$this->get_menu();
		$this->get_content(); 
		$this->get_footer();    
	}
	abstract function get_content();
}
abstract class js {	
	public function get_body() {     
		$this->get_content();
	}
	abstract function get_content();
}
?>