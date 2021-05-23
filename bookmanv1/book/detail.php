<?php include_once '../core/functions.php'; ?>
<?php
include_once 'detail.inc.php';
$result = on_get();
?>

<?php start_content('Book detail'); ?>

<?php if ($result === false) : ?>
    <h3 style='color:red;'>Book not found!</h3>
<?php else: $b = $result ?>
    <h1>Book detail</h1>
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
<?php endif ?>
    <a class="btn btn-outline-primary" href="index.php">Back to list</a>
<?php end_content(); ?>