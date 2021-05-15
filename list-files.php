<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.')) as $filename)
{
    // filter out "." and ".."
    if ($filename->isDir()) continue;

    echo "$filename\n";
}
</body>
</html>