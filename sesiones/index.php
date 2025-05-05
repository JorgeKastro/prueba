<form action="control.php" method="POST">
	 <table>
		 <tr>		 
			<?php 
				if ($_GET){	
					if ($_GET["error"] == "si"){?> 
						<td colspan="2" align="center" bgcolor=red>
						<span style="color:ffffff"><b>Datos incorrectos</b></span>
				<?php }}else{?>
					<td colspan="2" align="center" bgcolor=#cccccc>Introduce tu clave de acceso
				<?php } ?>
		</td>
		 </tr><br>
		 <tr>
			<td align="right">Usuario:</td>
			<td><input type="Text" name="usuario" size="8" maxlength="50"></td>
		 </tr><br>
		 <tr>
			<td align="right">Clave:</td>
			<td><input type="password" name="pass" size="8" maxlength="50"></td>
		 </tr><br>
		 <tr>  <td> <input type="Submit" value="ENTRAR"></td>
		 </tr>
	 </table>
</form>
