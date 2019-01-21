<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta charset="utf8">
   <link rel="shortcut icon" href="img/milktitle.jpg" type="image/x-icon">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/css.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</head>
<body>
   </audio>
   <div class="login">
      <br/>
      <div style="text-align:center">
         <form class="form-inline" role="form" action="loginHandle.php" method="post">
             &nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>
         <input type="text" name="name" class="form-control" placeholder="用户名"><br/><br/>
             &nbsp;&nbsp;<span class="glyphicon glyphicon-lock"></span>
         <input type="password" name="password" class="form-control" placeholder="密码"><br/><br/>

         <div style="margin-top:20px">
            <table>
               <td>
                  <tr><input type="submit" name="login" value="登录" class="button" /></form></tr>
                  <tr>
                     <form class="form-inline" role="form" action="register.php" method="post" width="30px">
                     &nbsp;&nbsp;<input type="submit" name="register" value="注册" class="button"/></form>
                  </tr>
               </td>
            </table>
         </div>
      </div>
   </div>
</body>
</html>