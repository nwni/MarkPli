

var file = 'queries_response.php';
window.setInterval("timeUpdate()", 1000);







function timeUpdate() {
    ajaxCall();

}

function ajaxCall() {
	var i = 0;
	$.ajax({
		type: 'GET',
		url: file + "?" + Math.random(),
		success: function(response){
            var id_post = response;
            //console.log(response);
            var a = document.getElementById("feed"+id_post);
            //console.log(a);
            let closestTr = $(a).closest('tr');
            
            var id_post_t = closestTr.find('.cid_post').text().trim();
            var nombre_campana = closestTr.find('.cnombre_campana').text().trim();
            let nombre_contenido = closestTr.find('.cnombre_contenido').text().trim();
            let descripcion = closestTr.find('.cdescripcion').text().trim();
            let tipo = closestTr.find('.ctipo').text().trim();
            let estado = closestTr.find('.cestado').text().trim();
            let hashtags = closestTr.find('.chashtags').text().trim();
            let link_img = closestTr.find('.clink_img').text().trim();
            //console.log(nombre_campana);
            var message = descripcion + "\n" + hashtags + "\n" + nombre_campana;
			switch(tipo){
				case 'photo':
                    //postPhoto(message, link_img);
                        console.log(message, link_img);
				break;
                case 'status':
                    console.log("Estado");
                    //console.log(message);
                    postStatus(message);
                        //console.log("Estado: " + nombre_campana + descripcion + hashtags);
				break;
				case 'video':
                    //postVideo(message, link_img);
                    console.log(message, link_img);
				break;
				default:
					console.log("JAJAJA nada");
				break;
			}
		}
	});
}






//------------------------------------
//$(document).ready(function(){
//test2

	//Click on 'PREVIEW'
	$('.bForm').on('click', function(e){

        let closestTr = $(this).closest('tr');

        let mTitle = document.getElementById('idcampana');
        let mBody = document.getElementById('idModalBody');
    
        var id_post = closestTr.find('.cid_post').text().trim();
        var nombre_campana = closestTr.find('.cnombre_campana').text().trim();
        let nombre_contenido = closestTr.find('.cnombre_contenido').text().trim();
        let descripcion = closestTr.find('.cdescripcion').text().trim();
        let tipo = closestTr.find('.ctipo').text().trim();
        let estado = closestTr.find('.cestado').text().trim();
        let hashtags = closestTr.find('.chashtags').text().trim();
        let link_img = closestTr.find('.clink_img').text().trim();

		
		

/*
	C L E A N    T H I S   S H I T   A S A P

*/
	//Creates the body of the post with the information from the table
	//This goes inside the modal
	//<p class="tags" id="tags-post">${tags}</p>
	if (tipo == 'video') {
		var modalBody = `
			<video src="${link_img}" id="url-post" class="img-responsive" style="padding-left: 0px;  padding-right: 0px; width: 100%;" controls none></video>
			
			<div class="modalText">
				<h3 class="nombre-contenido" id="title-post">${nombre_contenido}</h3>
				<h6 class="fecha">${id_post}</h6>				
				<p class="texto" id="text-post">${descripcion}</p>
				<p class="hashtags" id="hashtags-post">${hashtags}</p>

				<span style="display:none" id="tipo-post">${tipo}</span>
				<span style="display:none" id="id-post">${id_post}</span>
				<span style="display:none" id="estado-post">${estado}</span>

			</div>
		`;			
	} else if(tipo == 'photo'){
		var modalBody = `
			
			<img src="${link_img}" id="url-post" alt="imagen" class="img-responsive" style="padding-left: 0px;  padding-right: 0px; width: 100%;>
			<div class="modalText">
				<h3 class="nombre-contenido" id="title-post">${nombre_contenido}</h3>
				<h6 class="fecha">${id_post}</h6>
				<p class="texto" id="text-post">${descripcion}</p>
				<p class="hashtags" id="hashtags-post">${hashtags}</p>

				<span style="display:none" id="tipo-post">${tipo}</span>
				<span style="display:none" id="id-post">${id_post}</span>
				<span style="display:none" id="estado-post">${estado}</span>

			</div>
		`;
	} else{
		var modalBody = `
			
			<div class="modalText">
				<h3 class="nombre-contenido" id="title-post">${nombre_contenido}</h3>
				<h6 class="fecha">${id_post}</h6>
				<p class="texto" id="text-post">${descripcion}</p>
				<p class="hashtags" id="hashtags-post">${hashtags}</p>

				<span style="display:none" id="tipo-post">${tipo}</span>
				<span style="display:none" id="id-post">${id_post}</span>
				<span style="display:none" id="estado-post">${estado}</span>

			</div>
		`;		
	}

	$('#exampleModal').modal('show');

	document.getElementById('idcampana').innerHTML = nombre_campana;
	document.getElementById('modal-body').innerHTML = modalBody;


	

	});	

/*	
Once the post is created and displayed in the modal, we want to either Accept it and post it on Facebook or rejected both of this options will modify a NON EXISTING VALUE (at the moment tho) which is it's state, meaning update the post state on it's table
*/

$('.bPost').on('click', function(e){
	var estado = document.getElementById('estado-post').innerHTML;
	//alert("->>> " + estado);

	switch (estado) {
		case 'aceptado':
		acceptedFunction();
		break;
		
		case 'rechazado':
		alert("Cambia el estado del post!");
		break;

		case 'pendiente':
		alert("Cambia el estado del post!");
		break;
		
		default:
		alert("Invalid option");
		break;
	}
});

function acceptedFunction(){
	// var rn = new Date();

	// var timeTo = new Date(rn.getFullYear(), rn.getMonth(), rn.getDate(), 23,38,0,0) - rn;
	// if(timeTo < 0){
	// 	timeTo += 86400000; //IDK
	// }
	
	// setTimeout(function(){
	// 	alert("NOW!")
	// 	console.log("jajaajajaja");
	// }, timeTo);

	var postType = document.getElementById('tipo-post').innerHTML;
	var id_post = document.getElementById('id-post').innerHTML;

	var title = document.getElementById('title-post').innerHTML;
	//var tags = document.getElementById('tags-post').innerHTML;
	var hashtags = document.getElementById('hashtags-post').innerHTML;
	var message, url, description, file_url;
	var confirmation = confirm("Presiona 'Ok' para postear");
	if (confirmation) {
		switch(postType){
			case 'photo':
				message = (document.getElementById('text-post').innerHTML) + '\n' + hashtags;
				url = document.getElementById('url-post').getAttribute('src');
				postFB(postType, title, message, url, null, null, id_post);
			break;
			case 'status':
				message = (document.getElementById('text-post').innerHTML)  + '\n' + hashtags;
				postFB(postType, title, message, null, null, null, id_post);
			break;
			case 'video':
				description = (document.getElementById('text-post').innerHTML)  + '\n' + hashtags;
				file_url = document.getElementById('url-post').getAttribute('src');
				postFB(postType, title, null, null, description, file_url, id_post);
			break;
			default:
				console.log("nowhereman");
			break;
		}
	} else{
		alert("Cancelado");
	}
}

	$('.bPost1').on('click', function(e){
		var postType = document.getElementById('tipo-post').innerHTML;
		var id_post = document.getElementById('id-post').innerHTML;

		var title = document.getElementById('title-post').innerHTML;
		//var tags = document.getElementById('tags-post').innerHTML;
		var hashtags = document.getElementById('hashtags-post').innerHTML;
		var message, url, description, file_url;
		var confirmation = confirm("Presiona 'Ok' para postear");
		if (confirmation) {
			switch(postType){
				case 'photo':
					message = (document.getElementById('text-post').innerHTML) + '\n' + hashtags;
					url = document.getElementById('url-post').getAttribute('src');
					postFB(postType, title, message, url, null, null, id_post);
				break;
				case 'status':
					message = (document.getElementById('text-post').innerHTML)  + '\n' + hashtags;
					postFB(postType, title, message, null, null, null, id_post);
				break;
				case 'video':
					description = (document.getElementById('text-post').innerHTML)  + '\n' + hashtags;
					file_url = document.getElementById('url-post').getAttribute('src');
					postFB(postType, title, null, null, description, file_url, id_post);
				break;
				default:
					console.log("nowhereman");
				break;
			}
		} else{
			alert("Cancelado");
		}
	});

//}); //FIN document.ready


/*
	C L E A N    T H I S     A S A P
*/

function postFB(postType, title, message, url, description, file_url, id_post) {
	var authResp = FB.getAuthResponse();
	if (authResp === null) {
		alert("ERROR\n Primero Valida tus credenciales\n en el boton superior derecho");
	}
	switch(postType){

		case 'photo':
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
		break;
		case 'status':
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
	      				message: message,
	      				access_token : pageAccessToken
	      			}, function(info){
	      				console.log(info);
	      				if (info.id != 'undefined') {
	      					//var baseUrl = "<?php echo json_encode(base_url()); ?>";
	      					$.ajax({
	      						type: 'POST',
	      						url: baseUrl + 'Pages/updateState/',
	      						data: {
	      							'id' : id_post
	      						},
	      						success: function(id){
	      							console.log("ok" + id);
	      						}
	      					});
	      					$('#exampleModal').modal('hide');
	      					alert("Posteado en Facebook! ");
	      					console.log("ID-POST-> " + id_post);
	      					location.reload(true);
	      				}
	      			});
	      		}
	      	}
	      });	
		break;
		case 'video':
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
		break;
		default:
			alert("NOT A VALID OPTION");
		break;
	}
}


//This part handles the events for the Modal buttons
//This events change the post state in the DB and therefore the table

$('.btn-Aceptar').on('click', function(e){
	//alert("Accept->" + id_post);

	var id_post = document.getElementById('id-post').innerHTML;
	//var baseUrl = '<?php echo json_encode(base_url()); ?>';
	console.log(baseUrl);
	$.ajax({
		type: 'POST',
		url: baseUrl + 'Pages/accept/',
		data: {
			'id' : id_post
		},
		success: function(id){
			console.log("Aceptar" + id);
			$('#exampleModal').modal('hide');
			//alert("Posteado en Facebook! ");
			console.log("ID-POST-> " + id);
			location.reload(true);					
		},
		error: function(err){
			console.log(err);
		}	
	});


});

$('.btn-Pausar').on('click', function(e){
	//alert("Pausar->" + id_post);
	//var id_post = document.getElementById('id-post').innerHTML;

	var id_post = document.getElementById('id-post').innerHTML;
	//var baseUrl = "<?php echo json_encode(base_url()); ?>";
	console.log(baseUrl);
	$.ajax({
		type: 'POST',
		url: baseUrl + 'Pages/pending/',
		data: {
			'id' : id_post
		},
		success: function(id){
			console.log("Pendiente" + id);
			$('#exampleModal').modal('hide');
			//alert("Posteado en Facebook! ");
			console.log("ID-POST-> " + id);
			location.reload(true);	
		},
		error: function(err){
			console.log(err);
		}	
	});
});

$('.btn-Rechazar').on('click', function(e){
	//alert("Rechazar->" + id_post);
	//var id_post = document.getElementById('id-post').innerHTML;

	var id_post = document.getElementById('id-post').innerHTML;
	//var baseUrl = "<?php echo json_encode(base_url()); ?>";
console.log(baseUrl);
	$.ajax({
		type: 'POST',
		url: baseUrl + 'Pages/reject/',
		data: {
			'id' : id_post
		},
		success: function(id){
			console.log("Rechazar" + id);
			$('#exampleModal').modal('hide');
			//alert("Posteado en Facebook! ");
			console.log("ID-POST-> " + id);
			location.reload(true);	
		},
		error: function(err){
			console.log(err);
		}	
	});	
});




function deletePost(id){
	console.log("CLICK! " + id);
	console.log(baseUrl);
	$.ajax({
		type: 'POST',
		url: baseUrl + 'Pages/delete/',
		data: {
			'id' : id
		},
		success: function(res){
			console.log("Borrado" + res);
			location.reload(true);
		},
		error: function(err){
			console.log(err);
		}		
	});	
}

function postStatus(message){
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
                  message: message,
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