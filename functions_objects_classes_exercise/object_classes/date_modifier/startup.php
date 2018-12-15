<?php

include_once 'DateModifier.php';

$firstDateStr = explode(' ', readline());
$secondDateStr = explode(' ', readline());

$firstDateYear = $firstDateStr[0];
$firstDateMonth = $firstDateStr[1];
$firstDateDay = $firstDateStr[2];

$firstDate = new DateTime("{$firstDateYear}-{$firstDateMonth}-{$firstDateDay}");

$secondDateYear = $secondDateStr[0];
$secondDateMonth = $secondDateStr[1];
$secondDateDay = $secondDateStr[2];

$secondDate = new DateTime("{$secondDateYear}-{$secondDateMonth}-{$secondDateDay}");

$dateModifier = new DateModifier($firstDate);
$dateModifier->printDateDiff($secondDate);

