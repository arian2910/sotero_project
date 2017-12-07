
<center>
    
<?php 
           $usuario = array(
              'name'        => "username",
              'id'          => "username",
              'size'        => "50",
              'value'       => set_value("username"),
             );
           $password = array(
              'name'        => "password",
              'id'          => "password",
              'size'        => "50",
              'value'       => set_value("password"),
              'type'        => "password",
             );
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/ValidarAcceso", $attributes);
?>
<table width='450' border='0' class='ventanas' cellspacing='0' cellpadding='0'>
<tr>
     <td colspan='3'  height='10' colspan='3'><legend>Iniciar Sesión</legend></td>

</tr>
<tr><td colspan=3><br/></td></tr>
<tr>
<td colspan='3'>
     <center>
     <table>
     <tr>
          <td><?php echo form_label("E-mail","lblEmail"); ?></td>
          <td>
               <?php echo form_input($usuario); ?>
               <font color="red"><?php echo form_error('username'); ?></font>
          </td> 

     </tr>
     <tr>
          <td><?php echo form_label("Password:","lblPassword"); ?></td>
          <td>
               <?php echo form_input($password); ?>
               <font color="red"><?php echo form_error('password'); ?></font>
          </td>

     </tr>
     </table>
     </center>
</td>
</tr>
<tr>
<td colspan="3" align ='center'>
        <input id="btn_login" name="btn_login" type="submit" class="btn btn-sm btn-success" value="Login">
</td>
</tr>
<tr>
     <td colspan="3" align ='center'>
          <table>
          <tr>
          <td>
               <?php echo $this->session->flashdata('msg'); ?>
          </td>
          </tr>
          </table>
     </td>
</tr>
</table>
 <?php echo form_close(); ?>
          
</center>
