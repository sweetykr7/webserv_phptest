#!/usr/bin/env python3
import os
import cgi

# 세션 ID를 가져옵니다.
cookie = os.environ.get('HTTP_COOKIE')
session_id = ''

session_server = os.environ.get('PY_SESSION')
sessionMap = {}

# cookieMap = {}

try:
    for item in cookie.split(';'):
        key, value = item.strip().split('=')
        if key == 'session_id':
            session_id = value

    for item in session_server.split(';'):
        key, value = item.strip().split('=')
        print(session_id)
        print(key)
        sessionMap[key] = value

    if session_id in sessionMap:
        user_id, user_name = session_id.strip().split('-')    

        printHttp = f'''
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>My Page</title>
<style>
    body {{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
    color: #3259a6;
    }}
    .base {{
    display: flex;
    flex-direction: column;
    
    align-items: center;
    height: 100vh;
    }}
    h2 {{
    text-align: center;
    margin: 20px 0;
    }}
    .btn {{
    display: block;
    width: 150px;
    padding: 10px;
    background-color: #3259a6;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    cursor: pointer;
    }}
</style>
</head>
<body>
<div class="base">
    <h2>Hi, {user_id}({user_name}) : VIP LEVEL({sessionMap[session_id]})</h2>
    <button type="button" class="btn" onclick="location.href='logout.php'">
    LOGOUT
    </button>
</div>
</body>
</html>
                '''
        print(printHttp)
    else:
        print("<script>location.replace('login.html');</script>")
except:
    print("<script>location.replace('login.html');</script>")