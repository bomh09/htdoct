<?php include_once '../core/functions.php'; ?>

<?php
include_once 'delete.inc.php';
$result = on_get();
?>

<?php start_content('Confirm deleting'); ?>

<?php if ($result === false) : ?>
    <h3 style='color:red;'>Book not found!</h3>
<?php else: $b = $result['data'] ?>
    <h1>Deletion confirm</h1>
    <table class="table">
        <tr>
            <th>Title:</th>
            <td><?= $b['title'] ?></td>
        </tr>
        <tr>
            <th>Authors:</th>
            <td><?= $b['authors'] ?></td>
        </tr>
        <tr>
            <th>Publisher:</th>
            <td><?= $b['publisher'] ?></td>
        </tr>
        <tr>
            <th>Year:</th>
            <td><?= $b['year'] ?></td>
        </tr>
        <tr>
            <th>Summary:</th>
            <td><?= $b['description'] ?></td>
        </tr>
    </table>
    <a class="btn btn-outline-danger" href="delete.php?id=<?=$result['id']?>&confirm=1">Delete</a>
<?php endif ?>
    <a class="btn btn-outline-primary" href="index.php">Back to list</a>

<?php end_content(); ?>