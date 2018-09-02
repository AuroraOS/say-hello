<?php
require_once __DIR__.'/src/Smartpage/SayHello.php';

$instance = new SayHello\Smartpage\SayHello();

echo $instance->say("Hello World");




require_once __DIR__.'/src/RandomQuotes.php';
// Creates a new object of RandomQuotes class.
$rq = new \RandomQuotes\RandomQuotes();
echo "<br>";
// Generates a random quote.
print_r( $rq->generate() );
echo "\n";
