<?php
	include('./config/database.php');
	class M_tintuc extends database{

		function getmenu(){
			$sql = "SELECT A.Ten From dich_vu as A ";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function menu2(){
			$sql = "SELECT B.TenDV From loai_dv as A inner join dich_vu B where A.id=B.IDTheLoai";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}

?>