<?php

echo "<pre>\n";

echo "Tracks... \n";

$trackdir = "/absolute/path/to/laborec/tracks/";

$d = dir($trackdir);
while (false !== ($entry = $d->read())) {
    if(ereg(".mp3", $entry)){
        echo $entry."\n";
        chmod($trackdir . $entry, 0755);
    }
}
$d->close();

$sampledir = "/absolute/path/to/laborec/samples/";

$d = dir($sampledir);
while (false !== ($entry = $d->read())) {
    if(ereg(".zip", $entry)){
        echo $entry."\n";
        chmod($sampledir . $entry, 0755);
    }
}
$d->close();

echo "</pre>\n";
