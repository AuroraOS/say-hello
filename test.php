<?php
/**
 * Say Hello Test
 */


require_once __DIR__.'/src/Dappurware/SayHello.php';

$instance = new SmartPage\Dappurware\SayHello('Smart Page Extensions: ');
$instance->say("Hello World, this is the greatest Dappur Extensions.");
print_r($instance->read());


/**
 * RandomQuotes Test
 */
require_once __DIR__.'/src/RandomQuotes.php';
// Creates a new object of RandomQuotes class.
$rq = new SmartPage\RandomQuotes();
echo "<br>";
// Generates a random quote.
print_r( $rq->generate() );
echo "\n";

/**
 * SmartPage Container Test
 */
require_once __DIR__.'/src/Dappurware/SPContainer.php';

$def = ["def.sys" => 'Default value of def.sys',
				"def.ini" => "Default value of def.ini",
				"use.something" => true];
				
$opt = ["opt.record1" => 'Value of opt.record1',
				"opt.record2" => "Value of opt.record2",
				"def.use" => "Optional value of def.use",
				"new" => "New value of record new"];
				
$conf = new SmartPage\Dappurware\SPContainer($def);
$conf->set($opt);

echo '<pre>';
print_r($conf);
echo '</pre>';