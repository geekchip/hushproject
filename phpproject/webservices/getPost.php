<?php
include_once('config.php');
$id = $_GET['id'];
if(!empty($id)){
    $sql = "SELECT * FROM blogs WHERE id = $id";
    $query = $con->query($sql);
    if($query->num_rows > 0){
        while($row = $query->fetch_array()){
            $id = $row['id'];
            $title - $row['title'];
            
    $content = $row['content'];
    $category = $row['category'];
    $tags = $row['tags'];
    $image_url = $row['image_url'];
    $author_name = $row['author_name'];
    $author_pic = $row['author_pic'];
    $result[] = array('id' =>$id, 'title' =>$title, 'content' =>$content, 
    'category'=>$category, 'tags' =>$tags, 'image_url' =>$image_url, 
    'author_name' =>$author_name, 'author_pic' =>$author_pic);

        }
        $json = $result;
    }
    else{
        $json = array('status' => 0, 'msg' => 'not Found!');
        

    }
    @mysqli_close();
    header('Content-type : application/json');
    echo json_encode($json);
}
?>