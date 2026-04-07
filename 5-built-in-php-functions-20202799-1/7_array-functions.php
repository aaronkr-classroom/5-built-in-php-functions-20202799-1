<?php
// Create array of greetings then get random value
$greetings    = ['Hi ', 'Howdy ', 'Hello ', 'Hola ',
                 'Welcome ', 'Ciao ',];
// @TODO

// Array of best sellers, count items, list top items
$bestsellers      = ['notebook', 'pencil', 'ink',];
// @TODO

// Array holding customer details
$customer     = ['forename' => 'Ivy',
                 'surname'  => 'Stone',
                 'email'    => 'ivy@eg.link', ];

// If you have a customer forename add it to greeting
// @TODO
?>
<?php include 'includes/header.php'; ?>

  <h1>Best Sellers</h1>
  <p><?= $greeting ?></p>
  <p>Our top <?= $bestseller_count ?> items today are:
    <b><?= $bestseller_text ?></b></p>

<?php include 'includes/footer.php'; ?>