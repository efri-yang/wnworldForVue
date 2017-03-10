<?php
	include("conn.php");
	$id=$_POST["id"];
	for($j=0;$j<20000000;$j++){
		$b=$j;
	}
	if($id >=0){
		$sql="select date_format(post_date,'%Y-%m-%d') as post_date,post_content,post_title,meta_value as author from wp_posts inner join wp_users on wp_users.ID=wp_posts.post_author inner join wp_usermeta on (wp_users.ID=wp_usermeta.user_id and wp_usermeta.meta_key='nickname')  where wp_posts.ID=$id";
		$result=mysql_query($sql,$conn);
		if(!!$result){
			while($rs = mysql_fetch_assoc($result)){
	            $data[] = $rs;
			}
			echo json_encode($data);
		}
		
	}
?>