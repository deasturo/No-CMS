<?php
    echo anchor('main/module_management','Back');
    echo br();
    echo 'Cannot uninstall <em>'.$module_name.'</em>, because some module depend on it';
    echo br();
    echo 'Please uninstall these modules first';
    echo '<ul>';
    for($i=0; $i<count($dependencies); $i++){
    	$dependency = $dependencies[$i];
    	echo '<li>'.$dependency["module_name"]." on <b>modules/".$dependency["module_path"].'</b></li>';
    }    
    echo '</ul>';
?>
