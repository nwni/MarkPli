<!DOCTYPE html>
<html>
<head>

  <title>MarkPli</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="<?php echo base_url() ?>js/jquery.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js" integrity="sha256-t3+U9BqykoMN9cqZmJ5Z53TvPv4V7S9AmjUcIWNNyxo=" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>js/nwni/moment.js"></script>
<script src="<?php echo base_url() ?>js/nwni/moment-timezone.js"></script>
<!-- <script type="text/javascript" src="js/nwni/syncCall.js"></script> -->
<!-- <script language="javascript" src="js/nwni/dbview-TEST.js"></script> -->
<script type="text/javascript" src="js/nwni/lib.js"></script>
</head>
<body>


<script>
/*
This part goes at the beginning because it need to load
the library, generate the access_token(s)
fetch the live data, etc...

TODO.. 
Maybe something less shitty
*/
window.fbAsyncInit = function() {
  FB.init({
    //appId      : '1721673437905271', //original
    appId      : '1721673437905271',
    xfbml      : true,
    version    : 'v2.11'
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    console.log(response);
  });

  
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "https://connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
   //getInfo();
}(document, 'script', 'facebook-jssdk'));


function statusChangeCallback(response){
  if(response.status === 'connected'){
    console.log('logged in and authenticated');
    setElements(true);
    getInfo();
  }
  else{
    console.log('Not authenticated')
    setElements(false);
  }
}


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>



 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">MarkPli</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>campanas">Gestionar Campañas</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Cupload">Gestionar Contenido</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Contenidos">Crear Publicacion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts">Ultimos posts creados</a>
          </li>                              
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>validacion">Dashboard</a>
          </li> 
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>calendar">Agendar Publicaciones</a>
          </li> 
        </ul>

      </div>
        <fb:login-button id="fb-btn" scope="manage_pages,publish_pages,public_profile,email,user_birthday,user_location,user_posts" onlogin="checkLoginState();">
        </fb:login-button>
          <button type="button" class="btn btn-danger btn-sm" id="logout" href="#" onclick="logout()">logout</button>
            
    </nav>

    <div class="container">
      <div class="row">
      </div>