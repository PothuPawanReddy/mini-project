
<head>
    <title>
        PHP LOGIN SYSTEM
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="frm">
        <h1 align="center">LOGIN PAGE</h1>
        <form name=f1 onsubmit="return validation()">
            <br>
            <p align="center">
                <label>UserName : </label>
                <input type="text" id="user" name="user"></input>
            </p>
            <p align="center">
                <label>Password : </label>
                <input type="text" id="Password" name="Password"></input>
            </p>
            <br>
            <p align="right">
                <input type="submit" id="btn" value="Login"> </input>
            </p>
        </form>
    </div>
    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.Password.value;
            if (id.length == "" && ps.length == "") {
                alert("PLEASE ENTER USERNAME AND PASSWORD");
                return false;
            }
            else {
                if (id.length == "") {
                    alert("USER NAME HAS TO BE ENTERED");
                    return false;
                }
                if (ps.length == "") {
                    alert("PLEASE ENTER THE PASSWORD");
                    return false;
                }
            }
        }
    </script>
</body>
</html>