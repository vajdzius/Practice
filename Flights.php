<?php

calculatePrices (250000, 0.3);

function calculatePrices ($costs, $margin)
{
	var FIRST_CLASS = 10;
	var BUSINESS_CLASS = 30;
	var ECONOMY_CLASS = 280;
	define ("FIRST_CLASS", "10");
	define ("BUSINESS_CLASS", "30");
	define ("ECONOMY_CLASS", "280");

	var PRICE_FIRST = 10000;
	var PRICE_BUSINESS = 4000;
	var PRICE_ECONOMY = 500;
	define ("PRICE_FIRST", "10000");
	define ("PRICE_BUSINESS", "4000");
	define ("PRICE_ECONOMY", "678");

	var FILL_FIRST = 1;
	var FILL_BUSINESS = 0.8;
	var FILL_ECONOMY = 0.68;
}	define ("FILL_FIRST", "1");
	define ("FILL_BUSINESS", "0.8");
	define ("FILL_ECONOMY", "0.68");

	$amounts = ((FIRST_CLASS * FILL_FIRST * PRICE_FIRST) + (BUSINESS_CLASS * FILL_BUSINESS * PRICE_BUSINESS) + (ECONOMY_CLASS * FILL_ECONOMY * PRICE_ECONOMY));
	$minIncome = $costs * (1 + $margin);
	$marginSum = $amounts - $costs;
	$percentageOfMargin = ((($amounts/$costs) * 100) - 100);

	echo "Amounts of flights&nbsp;" . ($amounts) . "<br>";
	echo "Margin sum&nbsp;" . ($marginSum) . "<br>";
	echo "Percentage of margin&nbsp;" . ($percentageOfMargin) ."%\n" . "<br>";
	echo "Price of FIRST_CLASS&nbsp;" . (PRICE_FIRST) . "<br>";
	echo "Price of BUSINESS_CLASS&nbsp;" . (PRICE_BUSINESS) . "<br>";
	echo "Price of ECONOMY_CLASS&nbsp;" . (PRICE_ECONOMY) . "<br>";
}

?>