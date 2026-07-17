<?
$banned[0]="187.170.18.228";
if (in_array($_SERVER['REMOTE_ADDR'],$banned))
{
header("HTTP/1.1 403 Forbidden");
exit;
}
?>