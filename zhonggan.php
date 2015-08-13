<?php
set_time_limit(1800) ;
/**
 * 
 * 509060016~509070004
 * 尾数6加4，其它数加11
 * 
 */
static $a = 608880003;
$b = array ();
do {
	if (substr ( $a, - 1 ) == 6) {
		$a = $a + 4;
		$b [$a] = $a;
	} else {
		$a = $a + 11;
		$b [$a] = $a;
	}
} while ( $a < 709080004 );

foreach ( $b as $d ) {
	echo $d . "\t\n";
}

