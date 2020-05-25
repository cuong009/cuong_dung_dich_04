<?php
	include('model/m_tintuc.php');
	class C_tintuc{
		function index(){
			$m_tintuc = new M_tintuc();
			
			$menu = $m_tintuc->getmenu();
			$menu2 = $m_tintuc->menu2();
			return array('menu'=>$menu,'menu2'=>$menu2);
		}

	}
?>