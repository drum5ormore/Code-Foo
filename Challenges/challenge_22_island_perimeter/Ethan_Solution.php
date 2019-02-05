<?php
$input = [
[0,1,0,0],
[1,1,1,0],
[0,1,0,0],
[1,1,0,0]
];

$perim = 0;
for ($c=0; $c<count(reset($input)); $c++) {
    for ($r=0; $r<count($input); $r++) {
        $row = $input[$r];
        if ($row[$c] === 1) {
            foreach ([$r+1,$r-1] as $lat) {
                if (!isset($input[$lat][$c]) || $input[$lat][$c]===0) {
                    $perim++;
                }
            }
            foreach ([$c-1,$c+1] as $long) {
                if (!isset($row[$long]) || $row[$long]===0) {
                    $perim++;
                }
            }
        }
    }
}

print "Perimeter: ".$perim."\n";
