<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$username = $firstname . $lastname;

$epubfile = 'data/' . $username . '.epub';
$mobifile = 'data/' . $username . '.mobi';

$dynamicfile = 'OPS/chapter-1.xhtml';

$zip = new ZipArchive();
$zip->open('template.epub');
$content = $zip->getFromName($dynamicfile);
$zip->close();

$content = str_replace('@firstname@', $firstname, $content);
$content = str_replace('@lastname@', $lastname, $content);

$handle = fopen('temporary.xhtml', 'w');
fwrite($handle, $content);
fclose($handle);

copy('template.epub', $epubfile);
$zip->open($epubfile);
$zip->addFile('temporary.xhtml', $dynamicfile);
$zip->close();

$convert = 'calibre\ebook-convert ' . $epubfile . ' ' . $mobifile;
shell_exec($convert);

?>