<? 
ini_set("display_errors",0); 
@set_time_limit(0); 
xflush(); 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
<script language="JavaScript" type="text/javascript"> 
function getsocks(){ 
    var sockslist = document.getElementById('socklist').value; 
    var fuck = sockslist.match(/\d{1,3}([.])\d{1,3}([.])\d{1,3}([.])\d{1,3}((:)|(\s)+)\d{1,8}/g ); 
    if(fuck){ 
        var list=''; 
        for(var i=0;i<fuck.length;i++){ 
        if(fuck[i].match(/\d{1,3}([.])\d{1,3}([.])\d{1,3}([.])\d{1,3}(\s)+\d{1,8}/g )){ 
            fuck[i]=fuck[i].replace(/(\s)+/,':'); 
        } 
        list=list+fuck[i]; 
        if(i!=(fuck.length-1)){ 
            list=list+'\n'; 
        } 
        } 
        document.getElementById('socklist').value = list; 
    } 
    else{ 
        document.getElementById('socklist').value = ''; 
    } 
} 
function checkform() { 
    if(document.form.maillist.value==""||document.form.socklist.value=="") { 
        alert("Missing mail-pass or socks"); 
    } 
    else { 
        document.getElementById('form').submit(); 
    } 
} 
</script> 
<title>Account Checker</title> 
<style> 
body { 
    font-family: 'Open Sans', sans-serif; 
    font-size: 12px 
} 

hr { 
    border: 1px inset #E5E5E5 
} 

#form-container { 
    border: 1px solid #ddd; 
    border-radius: 10px; 
    -moz-border-radius: 10px; 
    -webkit-border-radius: 10px; 
    box-shadow: 0px 0px 15px #888; 
    -moz-box-shadow: 0px 0px 15px #888; 
    -webkit-box-shadow: 0px 0px 15px #888; 
    margin: 30px auto; 
    padding: 10px; 
    width: 95%; 
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3); 
} 

input[type='text'],textarea,select { 
    border: 1px solid #ccc; 
    -moz-border-radius: 5px; 
    -webkit-border-radius: 5px; 
    border-radius: 5px; 
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .15) inset; 
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .15) inset; 
    box-shadow: 0 1px 2px rgba(0, 0, 0, .15) inset; 
    color: #424242; 
    font-family: 'Open Sans', sans-serif; 
    font-size: 13px; 
    outline: none; 
    padding: 2px; 
    -moz-transition: border .2s linear, box-shadow .2s linear; 
    -webkit-transition: border .2s linear, -webkit-box-shadow .2s linear; 
} 

input[type='text']:focus,input[type='checkbox']:focus,input[type='radio']:focus,textarea:focus,select:focus 
    { 
    border: 1px solid #80bfff; 
    -moz-box-shadow: 0 0 3px #80bfff, 0 1px 2px rgba(0, 0, 0, .15) inset; 
    -webkit-box-shadow: 0 0 3px #80bfff, 0 1px 2px rgba(0, 0, 0, .15) inset; 
    box-shadow: 0 0 3px #80bfff, 0 1px 2px rgba(0, 0, 0, .15) inset; 
} 

textarea { 
    width: 99.5%; 
    resize: none 
} 

input[type=text] { 
    width: 30px; 
    text-align: center 
} 

#copyright { 
    color: green; 
    text-align: right; 
} 

/* =buttons---------------------------------------------- */ 
a.button:link,a.button:visited,button,input[type='submit'] { 
    background: #eaeaea; 
    background: -moz-linear-gradient(top, #efefef, #d8d8d8) #d8d8d8; 
    background: -webkit-gradient(linear, left top, left bottom, from(#efefef), 
        to(#d8d8d8) ) #d8d8d8; 
    background: linear-gradient(top, #efefef, #d8d8d8) #d8d8d8; 
    border: 1px solid #ababab; 
    -moz-border-radius: 3px; 
    -webkit-border-radius: 3px; 
    border-radius: 3px; 
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 1px 1px 
        rgba(255, 255, 255, .8) inset; 
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 1px 1px 
        rgba(255, 255, 255, .8) inset; 
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 1px 1px 
        rgba(255, 255, 255, .8) inset; 
    color: #707070; 
    font-family: 'Open Sans', sans-serif; 
    font-size: 12px; 
    -webkit-font-smoothing: antialiased; 
    font-weight: bold; 
    margin: 0; 
    outline: none; 
    padding: 5px 10px; 
    text-align: center; 
    text-shadow: 0 1px 1px rgba(255, 255, 255, .5); 
} 

a.button:hover,button:hover,input[type='button']:hover { 
    background: #f1f1f1; 
    background: -moz-linear-gradient(top, #f6f6f6, #e3e3e3) #e3e3e3; 
    background: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), 
        to(#e3e3e3) ) #e3e3e3; 
    background: linear-gradient(top, #f6f6f6, #e3e3e3) #e3e3e3; 
    cursor: pointer; 
} 

a.button:focus,button:focus,input[type='button']:focus { 
    background: -moz-linear-gradient(top, #f6f6f6, #e3e3e3) #e3e3e3; 
    background: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), 
        to(#e3e3e3) ) #e3e3e3; 
    background: linear-gradient(top, #f6f6f6, #e3e3e3) #e3e3e3; 
    border: 1px solid #80bfff; 
    -moz-box-shadow: 0 0 3px #80bfff, 0 1px 1px rgba(255, 255, 255, .8) 
        inset; 
    -webkit-box-shadow: 0 0 3px #80bfff, 0 1px 1px rgba(255, 255, 255, .8) 
        inset; 
    box-shadow: 0 0 3px #80bfff, 0 1px 1px rgba(255, 255, 255, .8) inset; 
} 

a.button:active,a.button.active,button:active,button.active,input[type='button']:active,input[type='button'].active 
    { 
    background: #e3e3e3; 
    background: -moz-linear-gradient(top, #e3e3e3, #f6f6f6) #1b468f; 
    background: -webkit-gradient(linear, left top, left bottom, from(#e3e3e3), 
        to(#f6f6f6) ) #1b468f; 
    background: linear-gradient(top, #e3e3e3, #f6f6f6) #1b468f; 
    -moz-box-shadow: none; 
    -webkit-box-shadow: none; 
    box-shadow: none; 
} 

/* =green ---------------------------------------------- */ 
a.button.green:link,a.button.green:visited,button.green,input[type='button'].green 
    { 
    background: #1fbf00; 
    background: -moz-linear-gradient(top, #22d100, #19a500) #22d100; 
    background: -webkit-gradient(linear, left top, left bottom, from(#22d100), 
        to(#19a500) ) #22d100; 
    background: linear-gradient(top, #22d100, #19a500) #22d100; 
    border: 1px solid #1b8800; 
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 1px 1px 
        rgba(255, 255, 255, .25) inset; 
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 1px 1px 
        rgba(255, 255, 255, .25) inset; 
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 1px 1px 
        rgba(255, 255, 255, .25) inset; 
    color: #fff; 
    text-shadow: 0 -1px 1px rgba(0, 0, 0, .33); 
} 

a.button.green:hover,button.green:hover,input[type='button'].green:hover 
    { 
    background: #22cc00; 
    background: -moz-linear-gradient(top, #24d800, #1db200) #24d800; 
    background: -webkit-gradient(linear, left top, left bottom, from(#24d800), 
        to(#1db200) ) #24d800; 
    background: linear-gradient(top, #24d800, #1db200) #24d800; 
} 

a.button.green:focus,button.green:focus,input[type='button'].green:focus 
    { 
    -moz-box-shadow: 0 0 3px #24d800, 0 1px 1px rgba(255, 255, 255, .25) 
        inset; 
    -webkit-box-shadow: 0 0 3px #24d800, 0 1px 1px rgba(255, 255, 255, .25) 
        inset; 
    box-shadow: 0 0 3px #24d800, 0 1px 1px rgba(255, 255, 255, .25) inset; 
} 

a.button.green:active,a.button.green.active,button.green:active,input[type='button'].green:active 
    { 
    background: #1fba00; 
    background: -moz-linear-gradient(top, #1db200, #24d800) #1db200; 
    background: -webkit-gradient(linear, left top, left bottom, from(#1db200), 
        to(#24d800) ) #1db200; 
    background: linear-gradient(top, #1db200, #224d800) #1db200; 
    -moz-box-shadow: none; 
    -webkit-box-shadow: none; 
    box-shadow: none; 
} 
</style> 
</head> 
<body> 
    <div id="form-container"> 
        <center> 
            <h2>Account Checker</h2> 
        </center> 
        <form action="ccv.php" name="form" id="form" method="POST"> 

            <table width=99%> 
                <tr> 
                    <td align=center width=50%>List Mail Pass</td> 
                    <td align=center width=50%>List Socks</td> 
                </tr> 
                <tr> 
                    <td align=left><textarea style="overflow: auto; width: 98%;" 
                            ondblclick="this.value=''" rows=15 name=maillist id=maillist>k54ca@hotmail.com|phoebe</textarea> 
                    </td> 
                    <td align=left><textarea style="overflow: auto; width: 98%;" 
                            ondblclick="this.value=''" rows=15 name=socklist id=socklist 
                            onblur="getlist()" onfocus="getlist()">127.0.0.1:80</textarea></td> 
                </tr> 
                <tr> 
                    <td colspan="2" align=center>Delim : <input type=text name="delim" 
                        id="delim" value="|" size=10> --- Mail : <input type=text 
                        name="mail" id="mail" value="0" size=10> --- Pass : <input 
                        type=text name="pass" id="pass" value="1" size=10> --- Auto by 
                        pass Security <input type="checkbox" name="bypass" id="bypass" 
                        checked size=10> 
                    </td> 
                </tr> 
            </table> 
            <br /> 
            <center> 
                <input class=green type=submit value=" Check now " 
                    onClick="getsocks();checkform();return false"> 
            </center> 
        </form> 
        <div 
            style="display: none; margin-top: 15px; text-align: left; color: green; border: 1px solid green; padding: 20px;" 
            id="kq1"></div> 
        <div 
            style="display: none; margin-top: 15px; text-align: left; color: red; border: 1px solid red; padding: 20px;" 
            id="kq2"></div> 
        <div 
            style="display: none; margin-top: 15px; text-align: left; color: blue; border: 1px solid blue; padding: 20px;" 
            id="kq3"></div> 
        <div 
            style="display: none; margin-top: 15px; text-align: left; color: black; border: 1px solid black; padding: 20px;" 
            id="kq4"></div> 

        <hr /> 

        <div id="copyright" class="cufon">(c) 2012 SQV</div> 
    </div> 
</body> 
</html> 
<?php 
function xflush() 
{ 
    static $output_handler = null; 
    if ($output_handler === null) $output_handler = @ini_get('output_handler'); 
    if ($output_handler == 'ob_gzhandler') return; 
    flush(); 
    if (function_exists('ob_flush') AND function_exists('ob_get_length') AND ob_get_length() !== false) @ob_flush(); 
    else if (function_exists('ob_end_flush') AND function_exists('ob_start') AND function_exists('ob_get_length') AND ob_get_length() !== FALSE) 
    { 
        @ob_end_flush(); 
        @ob_start(); 
    } 
} 
function getStr($string,$start,$end){ 
    $str = explode($start,$string,2); 
    $str = explode($end,$str[1],2); 
    return $str[0]; 
} 

function checkSocks($socks,$cookie){ 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 
    curl_setopt($curl, CURLOPT_HEADER, 0); 
    curl_setopt($curl, CURLOPT_POST, true); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); 
    curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie); 
    curl_setopt($curl, CURLOPT_HTTPPROXYTUNNEL, 1); 
    curl_setopt($curl, CURLOPT_PROXY, $socks); 
    curl_setopt($curl, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
    curl_setopt($curl, CURLOPT_TIMEOUT,9); 
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,0); 
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0"); 
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($curl, CURLOPT_URL, "http://google.com"); 

    $Exec = curl_exec($curl); 
    //echo $Exec; 
    if ($Exec) 
    { 
        if (inStr($Exec,array('Access Denied'))){ 
            curl_close ($curl); 
            return false; 
        } 
        if (inStr($Exec,array('Bad Request'))){ 
            curl_close ($curl); 
            return false; 
        } 
        curl_close ($curl); 
        return true; 
    } 
    else{ 
        curl_close ($curl); 
        return false; 
    } 
} 

function _curl($url,$post="",$usecookie = false,$socks=false) { 
    $ch = curl_init(); 
    if($post) { 
        curl_setopt($ch, CURLOPT_POST ,1); 
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $post); 
    } 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0"); 
    if ($usecookie) { 
        curl_setopt($ch, CURLOPT_COOKIEJAR, $usecookie); 
        curl_setopt($ch, CURLOPT_COOKIEFILE, $usecookie); 
    } 
    if ($socks) { 
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
        curl_setopt($ch, CURLOPT_PROXY, $socks); 
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
    } 
    curl_setopt($ch, CURLOPT_TIMEOUT,15); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,0); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
    $result= curl_exec ($ch); 
    curl_close ($ch); 
    return $result; 
} 

function rmDomain($mail){ 
    $abc = explode("@",$mail); 
    $mail = trim($abc[0]); 
    return $mail; 
} 
function inStr($s,$as){ 
    $s=strtoupper($s); 
    if(!is_array($as)) $as=array($as); 
    for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true; 
    return false; 
} 
function cvMail($mail){ 
    $mail = str_replace('@', '%40', $mail); 
    return $mail; 
} 
if ($_POST['maillist']){ 

    $delim = trim($_POST['delim']); 
    $m = trim($_POST['mail']); 
    $p = trim($_POST['pass']); 
    global $acclist; 
    $mlist = $_POST['maillist']; 
    $slist = $_POST['socklist']; 

    $mlist = str_replace(array("\\\"","\\'"),array("\"","'"),$mlist); 
    $mlist = str_replace("\r","",$mlist); 
    $mlist = str_replace("\n\n","\n",$mlist); 
    $mlist = explode("\n",$mlist); 

    $slist = str_replace(array("\\\"","\\'"),array("\"","'"),$slist); 
    $slist = str_replace("\r","",$slist); 
    $slist = str_replace("\n\n","\n",$slist); 
    $slist = explode("\n",$slist); 

    $STT = 0; 
    $TOTAL = count($mlist); 
    $TSOCK = count($slist); 
    $live = array(); 
    $die = array(); 
    $cant = array(); 
    $live1 = array(); 
    $live2 = array(); 
    $live3 = array(); 
    $uncheck = array(); 

    //echo $delim; 

    global $sp; 
    global $i; 
    $sp = 0; 
    $i = 0; 
    $cookie1 = 'sqv1'.rand(1000000,9999999).'cookie.txt'; 


    for($i=0 ; ($i<$TOTAL && $sp <$TSOCK); $i++){ 
        if (checkSocks($slist[$sp], $cookie1)) { 

        echo "<b><font color=blue>[ GOOD SOCK ]</font></b> $slist[$sp]<br>"; 

        $line = explode($delim,$mlist[$i]); 
        $mail = trim($line[$m]); 
        $pass = trim($line[$p]); 

        $cvmail = cvMail($mail); 
        $socks = trim($slist[$sp]); 
        /* 
         CURL herer 
        */ 
        } 
        else{ 
            echo "<del><b><font color=orange>[ CAN'T CHECK ]</font></b></del> | $mail | $pass<br></del>"; 
            $cant[]="CAN'T CHECK |".$mail." | ".$pass; 
            $sp++; 
        } 
        xflush(); 
    } 
    else { 
        echo "<del><b><font color=red>[ BAD SOCK / BLACK VPS ]</font></b> $slist[$sp]<br></del>"; 
        xflush(); 
        $i--; 
        $sp++; 
    } 
} 
unlink (cookie); 
unlink (cookie1); 
for ($un = $i; $un < $TOTAL; $un++){ 
    $uncheck[] = $mlist[$un]; 
} 

echo "<br/>"; 
$x = join("\n",$live); 
$y = join("\n",$live1); 
$w = join("\n",$live3); 
$xyzw = join ("\n",$cant); 
$t = join("\n",$uncheck); 
if($x!=NULL) 
{ 
    echo "<br>"; 
    echo "Live Cre - ".count($live)." / ".$TOTAL."<br>"; 
    echo "<textarea rows='10' cols = '70' onclick=\"this.select()\" class='box'>".$x."</textarea><br>"; 
} 
if($y!=NULL) 
{ 
    echo "<br>"; 
    echo "Live Setup - ".count($live1)." / ".$TOTAL."<br>"; 
    echo "<textarea rows='10' cols = '70' onclick=\"this.select()\" class='box'>".$y."</textarea><br>"; 
} 
if($w!=NULL) 
{ 
    echo "<br>"; 
    echo "Live Answer - ".count($live3)." / ".$TOTAL."<br>"; 
    echo "<textarea rows='10' cols = '70' onclick=\"this.select()\" class='box'>".$w."</textarea><br>"; 
} 
if($t!=NULL) 
{ 
    echo "<br>"; 
    echo "List uncheck - ".count($uncheck)." / ".$TOTAL."<br>"; 
    echo "<textarea rows='10' cols = '70' onclick=\"this.select()\" class='box'>".$t."</textarea><br>"; 
                            } 
                        if($xyzw!=NULL) 
                            { 
                                echo "<br>"; 
                                echo "Cant check - ".count($cant)." / ".$TOTAL."<br>"; 
                                echo "<textarea rows='10' cols = '70' onclick=\"this.select()\" class='box'>".$xyzw."</textarea><br>"; 
                            } 
                         
} 
?>
