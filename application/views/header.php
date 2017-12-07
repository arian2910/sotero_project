<!DOCTYPE html>
<html lan="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<link href="<?php echo base_url();?>css/Estilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Tablas.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styles.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>	

<title>Proyecto CRUD-Aritza A.S.R</title>
</head>
<body>
	<?php
		if ($this->session->userdata('is_logged_in')){
			echo '<h4 align="right">';
			echo '<small>';
			echo 'Bienvenido: <strong>'.$this->session->userdata('NOMBRE').' '.$this->session->userdata('APELLIDOS').'</strong>&nbsp;|&nbsp;';
			echo 'Tipo Usuario: <strong>'.$this->session->userdata('TIPOUSUARIO').'</strong>&nbsp;|&nbsp;';
			echo anchor("login/CerrarSesion/", "Salir").'&nbsp;&nbsp;</small></h4>';
			echo '<hr/>';
			echo '<p align="right">';
			echo '<table align="right">';
			echo '<tr>';
			foreach($this->session->userdata('Permisos') as $CrearMenu1){
                            
                            if($CrearMenu1["ID"]=="Error"){
                                echo '<td><font color="red">Sin Permisos para el Ver Menu. Solicita los Permisos con un Administrador</font></td>';
                             }else{   
                                  echo '<td><a href="'.base_url().'index.php'.$CrearMenu1["URL"].'">'.$CrearMenu1["DESCRIPCION"]."</a></td>";
                                  echo '<td>&nbsp;|&nbsp;</td>';
                            }
			}
            echo '</tr>';
			echo '</table>';			
			echo '</p>';
			echo '<hr/>';	
		
		}else{
			echo '<hr/>';
		}
		
	 ?>
	