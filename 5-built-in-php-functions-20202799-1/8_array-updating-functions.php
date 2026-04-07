<?php
// Array of items being ordered
$order = ['notebook', 'pencil', 'eraser',];
// @TODO

// Array of classes
$classes = ['Patchwork' => 'April 12th',
            'Knitting'  => 'May 4th',
            'Lettering' => 'May 18th',];
// @TODO                 // Remove 1st
$new     = ['Origami'  => 'June 5th',
            'Quilting' => 'June 23rd',]; // New items
// @TODO
?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>
<?= $items ?>
<h1>Classes</h1>


<?php include 'includes/footer.php'; ?>