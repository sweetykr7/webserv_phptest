
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      /*background-color: #3259a6; /* 로그인 폼의 배경색 */
      color: #3259a6; /* 폰트 색상 */
    }
    h2 {
      text-align: center;
      margin: 20px 0;
    }
    .loginForm {
      width: 40%;
      margin: 10px auto 20px auto;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      padding: 20px;
    }
    .idForm {
      margin-bottom: 20px;
    }
    .id {
      display: block;
      width: 90%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #3259a6; /* 인풋박스 테두리 색상 */
      font-size: 1.1em;
      margin : 8px
    }
    .passForm {
      margin-bottom: 20px;
    }
    .pw {
      display: block;
      width: 90%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #3259a6; /* 인풋박스 테두리 색상 */
      font-size: 1.1em;
      margin : 8px
    }
    .btn {
      display: block;
      width: 95%;
      padding: 10px;
      background-color: #3259a6; /* 로그인 버튼 색상 */
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1.1em;
      cursor: pointer;
      margin : 8px
    }
  </style>
</head>
<body>
  <form method="post" action="check_login.php" class="loginForm">
    <h2>Login</h2>
    <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
    </div>
    <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
    </div>
    <button type="submit" class="btn" onclick="button()">
      LOGIN
    </button>
  </form>
</body>
</html>

