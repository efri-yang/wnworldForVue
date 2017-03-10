<?php
	include("conn.php");
	/**
	 * 从wp_Post 总获取字段，然后关联到wp_users(关联到wp_usermeta)  然后关联wp_terms
	 * wp_post 的作者post_author 关联 到 wp_user 表的ID 关联到 wp_usermeta中的 
	 *
	 * 表的关联 限制条数  不同分类的查询 
	 *  文章id 文章作者 时间 文章分类 文章标题 文章简介(摘要)
	 */
	$id=$_POST["id"];
	$page=$_POST["page"];
	$count=$_POST["count"];
	$begin=($page-1)*$count;
	if($id=="all"){
		$sql="select wp_posts.ID,date_format(post_date,'%Y-%m-%d') as post_date,post_title,post_excerpt,wp_usermeta.meta_value from wp_posts inner join wp_users on (post_status='publish'and post_type='post' and wp_users.ID=wp_posts.post_author) inner join wp_usermeta on (wp_usermeta.user_id=wp_users.ID and wp_usermeta.meta_key='nickname') Order By post_date DESC limit $begin,$count";
	}else{
		
	}
	
	$result=mysql_query($sql,$conn);
	if(!!$result){
		while($rs = mysql_fetch_assoc($result)){
            $data[] = $rs;
		}
	}

	echo json_encode($data)
?>