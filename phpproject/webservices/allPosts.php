<?php
$sql = file_get_contents('../js/data.json');
$json = json_decode($sql, true); 
echo $sql;
// while($row = $query->fetch_array()) {
//     $id = $row['id'];
//     $title = $row['title'];
//     $content = $row['content'];
//     $category = $row['category'];
//     $tags = $row['tags'];
//     $image_url = $row['image_url'];
//     $author_name = $row['author_name'];
//     $author_pic = $row['author_pic'];
//     $result[] = array('id' =>$id, 'title' =>$title, 'content' =>$content, 
//     'category'=>$category, 'tags' =>$tags, 'image_url' =>$image_url, 
//     'author_name' =>$author_name, 'author_pic' =>$author_pic);
// }
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json');
// echo json_encode($json);
?>


