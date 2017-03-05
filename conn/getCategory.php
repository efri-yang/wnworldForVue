<?php
	include("conn.php");
	/**
	 * 
	 *  文章id 文章作者 时间 文章分类 文章标题 文章简介(摘要)
	 */
	$sql="select wp_posts.ID,post_date,post_title,post_excerpt,wp_users.user_nicename from wp_posts inner join wp_users where post_status='publish' and wp_users.ID=wp_posts.post_author";
	$result=mysql_query($sql,$conn);
	if(!!$result){
		while($rs = mysql_fetch_assoc($result)){
            $data[] = $rs;
		}
	}else{
		echo "xxx";
	}

	print_r($data);
?>