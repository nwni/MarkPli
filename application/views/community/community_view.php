
<div class="row">

  <div class="container">
    <br>  
    <br>  
    <br> 
     <?php 
                    $usu = $this->session->userdata('tipo_usuario_nombre');
                    if($usu != null){
             
                     //echo "<p>".$this->session->userdata('nick_usuario')."</p>";
                    }
                ?> 
    <h2>Bienvenido <?php echo $usu ?>, a la plataforma Community Manager</h2>

     

    

    <br>
    <br>
    <h3>¿Qué desea hacer hoy?</h3>

    <div class="row">
      

    </div>

  </div>

</div>