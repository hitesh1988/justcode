<?php 
$validate = false;
if(isset($_GET['id'])){
	$pID = $_GET['id'];
	if(!empty($pID)){
		$checkP = get_field('associated_user',$pID);
		if(!empty($checkP)){
			if(get_current_user_id() == $checkP['ID'] ){
				$validate = true;
			}
		}
	}
}
if(!$validate) _jcredirect404() ;

?>
