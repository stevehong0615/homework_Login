<?php

if (isset($_GET["signout"]))
{
  
  setcookie("userName", "guest", time() - 60 * 60 * 24 );
  header("location: index.php");
  exit();
  
}

if (isset($_POST["btnHome"]))
{
  header("location: index.php");
  exit();
}

if (isset($_POST["btnOK"]))
{
  if ($_POST["txtUserName"] != "")
  {
    setcookie("userName", $_POST["txtUserName"]);
    
    if (isset($_COOKIE["lastPage"]))
    {
      	header(sprintf("Location: %s", $_COOKIE["lastPage"]));
    }
    else
      header("location: index.php");
      
    exit();
  }
}

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#00BB00"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#79FF79"><input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>