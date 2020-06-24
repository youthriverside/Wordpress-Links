<?php
//此之文檔旨在助站長視鏈接之數于站也
//僅適用於達不溜屁
//This project can know which links your website has.
//It's certainly a good way   
//Only for Wordpress
      include ( "wp-config.php" ) ; 
      require_once (ABSPATH.'wp-blog-header.php'); 
      global $wpdb; 
      $qianzhui = "https://liuboyuan.fun/";//your website
      $houzhui = ".html";
      $sql="SELECT ID FROM wp_posts WHERE post_type =  'post' AND post_status =  'publish' ORDER BY ID DESC "; 
      $myrows = $wpdb->get_results($sql);
      foreach ($myrows as $b) { 
		echo $qianzhui;
		echo $b->ID;
		echo $houzhui."<br/>";
      }
?>