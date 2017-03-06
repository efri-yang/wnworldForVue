<?php
	include("conn.php");
	/**
	 * wp_post 的作者post_author 关联 到 wp_user 表的ID 关联到 wp_usermeta中的 
	 *
	 * 表的关联 限制条数  不同分类的查询 
	 *  文章id 文章作者 时间 文章分类 文章标题 文章简介(摘要)
	 */
	$sql="select wp_posts.ID,post_date,post_title,post_excerpt,wp_usermeta.meta_value from wp_posts inner join wp_users where post_status='publish' and wp_users.ID=wp_posts.post_author";
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