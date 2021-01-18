<? php
$handle=fopen("counter.txt","r");
or die("unable to open file");
fread=($handle,16);
fclose($handle);
$handle=fopen("counter.txt","w");
fwrite($handle,++$counter)
fclose($handle);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>visitors count</title>
        <style>
            table td,th
            {
                text-align:right;
            }
            </style>
    </head>
    <body>
        <h1>welcome to the website</h1>
        <h2>toal number of visitors so far <?php
        echo $count ?></h2>
    </body>
</html>
