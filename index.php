<?php>
    $fetchPosts = file_get_contents('http://localhost:8000/api/v1/posts/index');
    $decodePosts = json_decode($fetchPosts, true);
    foreach($decodePosts as $post){

    echo '<h1>'.$post ['title'].'</h1>';

    }
?>
