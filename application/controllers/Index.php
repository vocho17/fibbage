<?php
class IndexController extends Yaf_Controller_Abstract {

	public function indexAction() {
		$tpl = new stdClass;
		$tpl->title = "Fibbage";
		$tpl->section = "inicio";

		echo $this->getView()->render("layout/header.phtml",get_object_vars($tpl));
		echo $this->getView()->render("index/index.phtml",get_object_vars($tpl));
		echo $this->getView()->render("layout/footer.phtml",get_object_vars($tpl));

		Yaf_Dispatcher::getInstance()->disableView();
	}

	

}
?>