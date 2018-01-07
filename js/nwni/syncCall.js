var RequestObject = false;

var file = 'queries_response.php'; //En donde esta mi archivo PHP que va a manejar las consultas a la BD,

//Ese archivo me debe de ejecutar las funciones para subir contenido a facebook
//También me puede regresar un 

window.setInterval("timeUpdate()", 1000);
if (window.XMLHttpRequest) RequestObject = new XMLHttpRequest();
if (window.ActiveXObject) RequestObject = new ActiveXObject("Microsoft.XMLHTTP");

function ReqChange() {
    //console.log("ssssss");
    // Si se ha recibido la información correctamente
    if (RequestObject.readyState == 4) {
        // si la información es válida
        if (RequestObject.responseText.indexOf('invalid') == -1) {
        // Buscamos la div con id online
        //document.getElementById("online").innerHTML = RequestObject.responseText;
        console.log(RequestObject.responseText);
        } else {
        // Por si hay algun error document.getElementById("online").innerHTML = "Error llamando";
        }
    }
}
//function ajaxCall() {
// Mensaje a mostrar mientras se obtiene la información remota...
   // document.getElementById("online").innerHTML = "";
// Preparamos la obtención de datos
//    RequestObject.open("GET", file + "?" + Math.random(), true);
 //   RequestObject.onreadystatechange = ReqChange;
// Enviamos
 //   RequestObject.send(null);

    // $.ajax({
    //     type: 'GET',
    //     url: file + "?" + Math.random(),
    //     success: function(response){
    //         //console.log("si");
    //         console.log(response);
    //         if(response != "0"){
    //             RequestObject.onreadystatechange = ReqChange;
    //             RequestObject.send(null);   
    //             post(response)
    //         }
    //     }
    // });


    //console.log("Update: ");
//}
function ajaxCall() {
    // Mensaje a mostrar mientras se obtiene la información remota...
       // document.getElementById("online").innerHTML = "";
    // Preparamos la obtención de datos
    // Enviamos
    var i = 0;
$.ajax({
    type: 'GET',
    url: file + "?" + Math.random(),
    success: function(response){
        //console.log("si");
        //console.log(response);
        switch(response){
            case 'photo':
            post(response);
                console.log("Fotillo");
            break;
            case 'status':
            post(response);
                console.log("Estado");
            break;
            case 'video':
            post(response);
                console.log("Videossss");
            break;
            default:
                console.log("JAJAJA nada");
            break;
        }

    }
});
    
    
        //console.log("Update: ");
    }
function timeUpdate() {
    ajaxCall();

}

function postStatus(){
    //Uncomment the following to initialize the authResp
    //var authResp = FB.getAuthResponse();

    FB.api('/me/accounts', 'get', {
        access_token : authResp.accessToken
    }, function(response){

    console.log(response); // this returns an object with the accounts
    FB.api('/me/permissions', 'get', {
        access_token : pageAccessToken
    }, function(resp){console.log(resp)});

      // find the page access token for the page we want to admin, same as my PHP script
      var pageAccessToken = ''; 
      for(i in response.data){
          if(response.data[i].id == pageId) {
              pageAccessToken = response.data[i].access_token;
              // do the actual post now
              FB.api('/' + pageId + '/feed', 'post', {
                  message: "Automática",
                  access_token : pageAccessToken
              }, function(info){
                  console.log(info);
                  if (info.id != 'undefined') {
                      $('#exampleModal').modal('hide');
                      alert("Posteado en Facebook! ");
                      console.log("ID-POST-> " + id_post);
                      location.reload(true);
                  }
              });
          }
      }
  });
}

function postPhoto(){
    //Tomar el url
    FB.api('/me/accounts', 'get', {
        access_token : authResp.accessToken
    }, function(response){

    console.log(response); // this is returning an object with the accounts
    FB.api('/me/permissions', 'get', {
        access_token : pageAccessToken
    }, function(resp){console.log(resp)});

        // find the page access token for the page we want to admin, same as my PHP script
        var pageAccessToken = ''; 
        for(i in response.data){
            if(response.data[i].id == pageId) {
                pageAccessToken = response.data[i].access_token;
                // do the actual post now
                FB.api('/' + pageId + '/photos', 'post', {
                    title: title,
                    message: message,
                    url: url,
                    access_token : pageAccessToken
                }, function(info){
                    console.log(info);
                    if (info.id != 'undefined') {
                        $('#exampleModal').modal('hide');
                        alert("Posteado en Facebook! ");
                        console.log(id_post);
                        //AQUI SUBIR LA IMAGEN
                    }	      				
                });
            }
        }
    });     
}

function postVideo(){
    FB.api('/me/accounts', 'get', {
        access_token : authResp.accessToken
    }, function(response){

    console.log(response); // this is returning an object with the accounts
    FB.api('/me/permissions', 'get', {
        access_token : pageAccessToken
    }, function(resp){console.log(resp)});

      // find the page access token for the page we want to admin, same as my PHP script
      var pageAccessToken = ''; 
      for(i in response.data){
          if(response.data[i].id == pageId) {
              pageAccessToken = response.data[i].access_token;
              // do the actual post now
              FB.api('/' + pageId + '/videos', 'post', {
                  title: title,
                  description: description,
                  file_url: file_url,
                  access_token : pageAccessToken
              }, function(info){
                  console.log(info);
                  if (info.id != 'undefined') {
                      $('#exampleModal').modal('hide');	
                      alert("Posteado en Facebook! ");
                      console.log(id_post);
                  }      				
              });
          }
      }
  }); 	    
}