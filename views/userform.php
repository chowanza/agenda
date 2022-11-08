<div class="col-md-8">
  
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>Registro de Usuario</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>views/process.php?cmd=create" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <span id="sprytf_name">
		<input type="text" name="name" class="form-control input-sm" placeholder="Nombre de Usuario">
		<span class="textfieldRequiredMsg">Es necesario el Usuario</span>
		<span class="textfieldMinCharsMsg">El nombre debe especificar al menos 6 caracteres.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Dirección</label>
		<span id="sprytf_address">
        <textarea name="address" class="form-control input-sm" placeholder="Dirección"></textarea>
		<span class="textareaRequiredMsg">Es necesario la Dirección</span>
		<span class="textareaMinCharsMsg">La Dirección debe especificar al menos 10 caracteres.</span>	
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Teléfono</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder="Número de teléfono">
		<span class="textfieldRequiredMsg">Es necesario el Teléfono</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Ingrese correo">
		<span class="textfieldRequiredMsg">Es necesario el Correo</span>
		<span class="textfieldInvalidFormatMsg">Por favor introduzca una dirección de correo electrónico válida (user@domain.com).</span>
		</span>
      </div>
	  

	<div class="form-group">
        <label for="exampleInputEmail1">Tipo de Usuario</label>
		<span id="sprytf_type">
        <select name="type"  class="form-control input-sm">
			<option value=""> -- seleccione el tipo de usuario --</option>
			<option value="student">Estudiante</option>
			<option value="teacher">Profesor</option>
		</select>
		<span class="selectRequiredMsg">Seleccione Tipo de Usuario</span>
		</span>
		
      </div>
	  		  
	  
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
<!-- /.box -->
<script type="text/javascript">
<!--
var sprytf_name 	= new Spry.Widget.ValidationTextField("sprytf_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_address 	= new Spry.Widget.ValidationTextarea("sprytf_address", {minChars:10, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
//var sprytf_rdate 	= new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
//var sprytf_rtime 	= new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {hint:"i.e 20:10", useCharacterMasking: true, validateOn:["blur", "change"]});
//var sprytf_ucount 	= new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {validateOn:["blur", "change"]});
var sprytf_type 	= new Spry.Widget.ValidationSelect("sprytf_type");
//-->
</script>
</div>