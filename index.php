<?php
################################################################################
#     Cyford Technologies LLC
#       https://www.cyfordtechnologies.com
#       1 844 2 CYFORD
#
################################################################################
$page = @$_GET['page'];


require('includes/header.php');
//var_dump($settings->settings['Server_locals']['root_path']);

//Get Defualt Theme

//var_dump($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/pages/' . $page);
include_once($settings->settings['Server_locals']['root_path']  . 'includes/banner.php');

    if (!isset($_GET["page"])){
    $page ="home.php";
     if (file_exists($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/pages/' . $page)){
         
         include_once($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/pages/' . $page);
         
     }    else{
        
    include_once($settings->settings['Server_locals']['root_path'] .'includes/pages/home.php');
  }  
}
else{
    $page = $_GET["page"];
    
    if (file_exists($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/pages/' . $page)){
        include_once($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/pages/' . $page);
    }else{
        
    if (file_exists($settings->settings['Server_locals']['root_path'] .'includes/pages/' . $_GET["page"])) {
        
    include_once($settings->settings['Server_locals']['root_path'] .'includes/pages/' . $_GET["page"]);
    }
        else{
        $page2 = "404.php";
      include_once($settings->settings['Server_locals']['root_path'] .'includes/pages/404.php');  
        
    }
    }
}

    


#var_dump($account);



//var_dump($settings);
# echo $SettinGs->settings('DB');
#echo new $SettinGs();
echo "</br>";
//echo $settings->settings['locals']['root_path'];
?>
</body>
<footer>
    <?php
if (file_exists($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/footer.php')){
include_once($settings->settings['Server_locals']['root_path'] . 'theme/' . $default_theme . '/footer.php');

}else{
  include_once('includes/footer.php');  
    
}



?>