<?php
// Fill up array with names

$newpath="D:/wamp/www/cpms/android-project/";
						  
$dir_open = opendir("$newpath");
while(false !== ($filename = readdir($dir_open)))
 $a[]=$filename;


closedir($dir_open);

// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from ""
if ($q !== "")
  { $q=strtolower($q); $len=strlen($q);
    foreach($a as $name)
    { if (stristr($q, substr($name,0,$len)))
      { if ($hint==="")
        { $hint=$name; }
        else
        { $hint .= "<br><div style='margin-left:6%;'> $name"; }
      }
    }
  }

// Output "no suggestion" if no hint were found
// or output the correct values
echo $hint==="" ? "no suggestion" : $hint;
?> 