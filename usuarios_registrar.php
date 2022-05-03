<table class='formulario' border='0' width='450' align='center'>
<tr>
	<td colspan='3' align='center'><h3>Registro de usuario</h3>
<tr>
	<td class='negrita' width='150' align='right'>Usuario:
	<td><input type='text' id='r_usuario' name='usuario' size='25'>
	<td id='obligatorio' width='20'>(*)
<tr>
	<td class='negrita' align='right'>Clave:
	<td><input type='password' name='password' id='password' size='25'>
	<td id='obligatorio'>(*)
<tr>
	<td class='negrita' align='right'>Repetir clave:
	<td><input type='password' name='re_password' id='re_password' size='25'>
	<td id='obligatorio'>(*)
<tr>
	<td class='negrita' align='right'>E-mail:
	<td><input type='text' name='email' id='email' size='25'>
	<td id='obligatorio'>(*)
<tr>
	<td colspan='3' align='center'>
		<a href='javascript:document.forms.editar.submit()' title='Aceptar'
		onClick='if(validar_registrar()){return true;}else{return false;}'>
		<img src='imagenes/botones/btn_aceptar.png' 
		onmouseover="this.src='imagenes/botones/btn_aceptar_over.png';" 
		onmouseout="this.src='imagenes/botones/btn_aceptar.png';">
		</a>
</table>