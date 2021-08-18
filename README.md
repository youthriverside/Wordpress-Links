## 介绍
本应用用于查看网站所有文章的链接  
并且带有分行  
对SEO优化有很大作用  
SEE ALL Links of your articles  
ONLY FOR WordPress
## 如何使用 How TO USE
<br></br>
### 使用目的 Purpose
为了更好优化SEO
便于提交链接简便操作，故发布本php单文件。  
In order to better optimize SEO It is convenient to submit links and easy to operate, so this PHP single file is published.

### 使用方法 HOW TO USE
将本文件放于Wordpress根目录，进行访问。   
Place this file in the WordPress root directory for access.
```php
<?php
//This project can know which links your website has.
//It's certainly a good way   
//Only for Wordpress
      include ( "wp-config.php" ) ; 
      require_once (ABSPATH.'wp-blog-header.php'); 
      global $wpdb; 
      $qianzhui = "https://liuboyuan.fun/";   //your website
      $houzhui = ".html";
      $sql="SELECT ID FROM wp_posts WHERE post_type =  'post' AND post_status =  'publish' ORDER BY ID DESC "; 
      $myrows = $wpdb->get_results($sql);
      foreach ($myrows as $b) { 
		echo $qianzhui;
		echo $b->ID;
		echo $houzhui."<br/>";
      }
?>
```
`qianzhui`变量中填写网站域名  
`houzhui` 如无改变则无需修改   
