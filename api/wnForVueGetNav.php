<?php
	include("conn.php");
	$sql="select wp_terms.term_id, wp_terms.name,wp_terms.slug,wp_term_taxonomy.taxonomy,wp_term_taxonomy.parent  from wp_terms inner join wp_term_taxonomy on wp_terms.term_id=wp_term_taxonomy.term_id and wp_term_taxonomy.taxonomy='category'";
	$result=mysql_query($sql,$conn);
	if(!!$result){
		while($rs = mysql_fetch_assoc($result)){
			$rs["name"]=strip_tags($rs["name"]);
            $data[] = $rs;
		}
	}
	for ($i= 0;$i< count($data); $i++){ 
		if($data[$i]["parent"]==0 && ($data[$i]["name"]=="前端开发" || $data[$i]["name"]=="后端学习")){
			$parentData[]=$data[$i];
		}else{
			$childData[]=$data[$i];
		}
	}
	// print_r($childData);
	for ($i=0;$i< count($parentData); $i++){ 
		for ($j=0;$j< count($childData);$j++){ 
			// echo $parentData[$i]["term_id"];
			// echo $childData[$j]["parent"];
			if($parentData[$i]["term_id"]==$childData[$j]["parent"]){
				$parentData[$i]["child"][]=$childData[$j];
			}
			
		}
	}

	echo json_encode($parentData);
?>