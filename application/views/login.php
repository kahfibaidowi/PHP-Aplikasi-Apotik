<!doctype html>
<html>
<head>
    <title>Apotik Sifa - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Roboto:400,400i,500,700" rel='stylesheet'>
    <style>
        *{
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        body{
            background:#dfdfdf;
            margin:0;
            padding:0;
            font-family:'Open Sans', sans-serif;
        }
        #login-wrapper{
            width:330px;
            margin:0 auto;
            margin-top:100px;
            background:#fff;
            padding:15px;
            padding-bottom:30px;
            transition:all 0.5s ease;
        }
        #login-wrapper div{
            padding:10px 0;
        }
        label{
            font-weight: bold;
            padding-bottom:10px;
            float:left;
        }
        .input-form{
            width:100%;
            border:1px solid #dfdfdf;
            padding:11px;
            font-size:15px;
            box-shadow:inset 0 0 5px rgba(51, 51, 51, 0.07);
        }
        .input-form:focus{
            border:1px solid #0af;
            transition:border 0.3s ease-in-out;
        }
        .btn-form{
            font-size:15px;
            padding:13px;
            width:100%;
            text-align:center;
            border:none;
            background:#333;
            color:#fff;
            font-weight:bold;
            cursor:pointer;
        }
        .btn-form:hover{
            background:#555;
        }
        .btn-form:active{
            background:#333;
        }
    </style>
</head>

<body>
    <form id='login-wrapper' action='<?=base_url()."login/cek_login/"?>' method='post'>
        <div>
            <label>Username</label>
            <input type='text' class='input-form' name='username'>
        </div>
        <div>
            <label>Password</label>
            <input type='password' class='input-form' name='password'>
        </div>
        <div>
            <label>
                <input type='checkbox'>
                Remember Me
            </label>
        </div>
        <div>
            <button type='submit' class='btn-form'>Login Now</button>
        </div>
    </form>
</body>
</html>