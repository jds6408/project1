<?
	session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="css/login.css" rel="stylesheet">
<!--<link href="../css/member.css" rel="stylesheet" type="text/css" media="all">-->
</head>

<body>
   <div id="wrap">
        <div id="header">
            <? include "../../lib/top_login2.php"; ?>
        </div> <!-- end of header -->

        <div id="menu">
            <? include "../../lib/top_menu2.php"; ?>
        </div> <!-- end of menu -->

        <div id="content">
            <div id="col1">
                <div id="left_menu">
                    <?
			include "../../lib/left_menu.php";
?>
                </div>
            </div> <!-- end of col1 -->

            <div id="col2">
                <form name="member_form" method="post" action="login.php">
                    <div id="title">
                        도로시 로그인
                    </div>

                    <div id="login_form">
                        <div id="login2">
                            <div id="id_input_button">
                                <div id="id_pw_title">
                                    <ul>
                                        <li class="id"><input type="text" name="id" class="login_input" placeholder="아이디를 입력해주세요"></li>
                                        <li class="pw"><input type="password" name="pass" class="login_input" placeholder="비밀번호를 입력해주세요"></li>
                                    </ul>
                                </div>
                                 <div id="login_button">
                                    <input type="submit" value="로그인">
                                </div>
                            </div>
                            <div id="join_button"><a href="../member/member_form.php">
                                    회원가입 하기
                                </a></div>
                        </div>
                    </div> <!-- end of form_login -->

                </form>
            </div> <!-- end of col2 -->
        </div> <!-- end of content -->
    </div> <!-- end of wrap -->

</body>
</html>