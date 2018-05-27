<?php
require_once('route.php');
?>
<div class="header">  
  <div class="header-right">
    <a class="active" href="index">Home</a>
    <a href="contact">Contact</a>
    <a href="blog">Blog</a>
  </div>
</div>

<?php
if($request == 'index' or $request == ''){
  echo "HOME";
}
else if($request == 'blog'){

	include_once('blog.php');
}
else if($request == 'contact'){

	include_once('contact.php');
}
else{
	include_once('error.php');
}
?>


<style type="text/css">
	/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
</style>
