<?php
$blue   = "\e[34m";
$green  = "\e[92m";
$red = "\e[91m";
echo $green."
=========================================================================
|                            CODED BY JROKEN                            |
|                                                                       |
|                               DNS LOOKUP                              |
|                                                                       |
|           Telegram          t.me/hakoo29                              |
|                                                                       |
|           İnstagram       instagram.com/hakan_yalnz                   |
|                                                                       |
|           Github           github.com/jroken                          |
|                                                                       |
=========================================================================



               Enter Web Site OR İp >  ";
$ip = rtrim(fgets(STDIN));
$dns = file_get_contents('http://api.hackertarget.com/dnslookup/?q='. $ip);
echo("\r\n");
sleep(3);
echo("\r\n"."\r\n".$red."               ===========COMPLATE==========="."\r\n".$blue."[DNS LOOKUP] ".$green."\r\n"."\r\n".$dns."\r\n"."\r\n");
?>