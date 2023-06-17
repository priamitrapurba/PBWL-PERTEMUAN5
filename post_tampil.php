<?php

require_once "app/post.php";

$post = new post();
$rows = $post->tampil();

?>
<h2>DATA POST</h2>
<button><a href="index.php?hal=post_input">Tambah Post</a></button>
<table>
    <tr>
        <td>NO</td>
        <td>JUDUL</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_tittle']; ?></td>
        <td><a href="index.php?hal=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=post_delete&id=<?php echo $row['post_id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>
