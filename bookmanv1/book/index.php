<?php include_once '../core/functions.php'; ?>

<?php
include_once 'index.inc.php';
$result = on_get();
?>

<?php start_content('Book collection'); ?>

<?php if (count($result) > 0): ?>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Publisher</th>
            <th>Year</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $k => $b) : ?>
            <tr>
                <td><?= $k ?></td>
                <td><a href="detail.php?id=<?= $k ?>"><?= $b['title'] ?></a></td>
                <td><?= $b['authors'] ?></td>
                <td><?= $b['publisher'] ?></td>
                <td><?= $b['year'] ?></td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="detail.php?id=<?= $k ?>">Detail</a>
                    <a class="btn btn-sm btn-outline-danger" href="delete.php?id=<?= $k ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <b style='color:yellow;'>The collection is empty. Try adding some books first.</b>
<?php endif; ?>

<?php end_content(); ?>