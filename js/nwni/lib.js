
// Code from the facebook documentatino

//var pageId = '323272224748536'; //Página Restaurante

var pageId = '1761039707241834'; //Página Cano
var totalLikes = 0;
var totalComments = 0;
var totalCommentsPhotos = 0;
var totalCommentsStatus = 0;
var totalCommentsVideos = 0;
var totalViews = 0;
var totalLikesPhotos = 0;
var totalLikesStatus = 0;
var totalLikesVideos = 0;
var likes_Array;
likes_Array = [];
var posts_names_array = ["Fotos", "Estados", "Videos"];
var datesMonths;
datesDays = [];
var datesDays;
datesMonths = [];	
var datesYear;
datesYear = [];
/*window.fbAsyncInit = function() {
	FB.init({
	  appId      : '1721673437905271',
	  xfbml      : true,
	  version    : 'v2.11'
	});
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});

	console.log("HOLA");
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
}*/

///////////////////////////////////////////////////////////////////////////
 /*
 	CUSTOM CODE; Don´t believe the hype
 */
function getInfo(){
	//Fetch the user's data
	FB.api('/me?fields=name,email,birthday,location', function(response){
		if (response && !response.error){
			//console.log(response);
			buildProfile(response);
		}
	});
/*		FB.api('/323272224748536/feed', function(response){
		if (response && !response.error){
			console.log(response);
			buildFeed(response);
		}
		})*/

	//Stores the response from the authentication request
	var authResp = FB.getAuthResponse();
	//Access the user´s pages 
    FB.api('/me/accounts', 'get', {
    	//Select the accessToken from the response
      access_token : authResp.accessToken
    }, function(response){ //This one right here

	    //console.log(response); // this is returning an object with the accounts
	    //Returns the persmissions available
	    FB.api('/me/permissions', 'get', {
	    	//
	      access_token : pageAccessToken
	    }, function(resp){
	    	//console.log(resp)
	    });

	      // find the page access token for the page we want to admin, same as my PHP script
	      var pageAccessToken = ''; 
	      for(i in response.data){
	        if(response.data[i].id == pageId) {
	        	//Stores the pageAccess token when finds the Page that matches the ID
	          pageAccessToken = response.data[i].access_token;

	          var picture = 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Facebook_logo_thumbs_up_like_transparent_SVG.svg/220px-Facebook_logo_thumbs_up_like_transparent_SVG.svg.png';
	          // do the actual post now
	          FB.api('/' + pageId + '?fields=id,name,fan_count,category,phone,emails,price_range', 'get', {
	            access_token : pageAccessToken
	          }, function(info){
	            //console.log(info);
	            buildProfilePage(info);
	          });

	          //VIDEO FEED REQUEST
	          FB.api('/' + pageId + '/videos/' + '?fields=' + 
	          	'id,source,description,created_time,permalink_url,title,likes.limit(10).summary(true),comments.limit(10).summary(true),video_insights{values{value}}', 
	          	'get', {
	          	access_token : pageAccessToken
	          }, function(info){
	          	//console.log(info);
	          	buildPostsVideos(info);
	          });

	          //Image and text REQUEST
	          FB.api('/' + pageId + '?fields=' + 
	          	'feed.limit(100){type,message,created_time,full_picture,name,likes.limit(10).summary(true),comments.limit(10).summary(true)}',
	          	'get', {
	          	access_token : pageAccessToken
	          	}, function(info){
	          		//console.log(info.feed.data[0].type);
	          		//console.log(info.feed.data[2].type);
	          		buildPosts(info);
	          	});
			  }
			  
		  }
		 
	  });  
	  
}


/*
	Interface interaction	
*/

function setElements(isLoggedIn){
	if (isLoggedIn) {
		document.getElementById('logout').style.display = 'block';
		document.getElementById('card1').style.display = 'block';
		document.getElementById('card2').style.display = 'block';
		//document.getElementById('feed').style.display = 'block';
		document.getElementById('fb-btn').style.display = 'none';
		//document.getElementById('heading').style.display = 'none';
	}else{
		document.getElementById('logout').style.display = 'none';
		document.getElementById('card1').style.display = 'none';
		document.getElementById('card2').style.display = 'none';
		//document.getElementById('feed').style.display = 'none';
		document.getElementById('fb-btn').style.display = 'block';
		//document.getElementById('heading').style.display = 'block';
	}
}

//Builds the card with the user/page info
function buildProfile(obj){
	let title = obj.name;
	let profile = `
	<ul class="list-group">
	<li class="list-group-item">User ID: ${obj.id}</li>
	<li class="list-group-item">Email: ${obj.email}</li>
	<li class="list-group-item">Birthday: ${obj.birthday}</li>
	<li class="list-group-item">Location: ${obj.location.name}</li>
	<li class="list-group-item"><br></li>
	</ul>
	`;

	//console.log(profile);
	document.getElementById('cardInfo').innerHTML = title;
	document.getElementById('profile').innerHTML = profile;
	
}

function buildProfilePage(obj){
	//console.log(obj.name);
	let title = obj.name;
	// <li class="list-group-item">Seguidores: ${obj.fan_count}</li>
	let profile = `
	<ul class="list-group">
	<li class="list-group-item">Page ID: ${obj.id}</li>
	
	<li class="list-group-item">Emails: ${obj.emails}</li>
	<li class="list-group-item">Category: ${obj.category}</li>
	<li class="list-group-item">Phone: ${obj.phone}</li>
	<li class="list-group-item">Price: ${obj.price_range}</li>
	</ul>
	`;
	document.getElementById('cardPage').innerHTML = title;
	document.getElementById('infoPage').innerHTML = profile;

}

function buildPosts(obj) {
	let divCardi = `<div class="card" style="width: 20rem;">`;
	let divCardf = `</div>`;

	let cardContenti = '';
	let cardContents = '';

	var date;
	var momentDate;

	for(let i in obj.feed.data) {
		//console.log(obj.feed.data[0].type);
		var total_likes  = obj.feed.data[i].likes.summary.total_count;

		var total_comments  = obj.feed.data[i].comments.summary.total_count;	

		date = new Date((obj.feed.data[i].created_time));
		momentDate = moment(date);
		console.log(moment(momentDate));
		console.log(date.getDay());
		
		if (obj.feed.data[i].type === 'photo') {
			//console.log("imagen");
//					<h4 class="card-title">${obj.feed.data[i].name}</h4>
			cardContenti += `
				<img src="${obj.feed.data[i].full_picture}" class="card-img-top" alt="Image from facebook"></img>
				<div class="card-body">

					<h6 class="card-subtitle mb-2 text-muted">${momentDate}</h6>
					<p class="card-text">${obj.feed.data[i].message}</p>
					<p class="card-text">${total_likes} likes ${total_comments} comentarios</p>
					<br>
				</div>				
			`;
			totalLikesPhotos += total_likes;
			totalCommentsPhotos += total_comments;

			//console.log("Photos: " + totalLikesPhotos);
		} else {
			//var date = new Date((obj.feed.data[i].created_time));
			//<h4 class="card-title">${obj.feed.data[i].name}</h4>
			//No es imagen
			//console.log("Status");
			cardContents += `
				  <div class="card-body">
				    
				    <h6 class="card-subtitle mb-2 text-muted">${momentDate}</h6>
					<p class="card-text">${obj.feed.data[i].message}</p>
					<p class="card-text">${total_likes} likes ${total_comments} comentarios</p>
				  </div>				
			`;
			totalLikesStatus += total_likes;
			totalCommentsStatus += total_comments;
			//console.log("Status: " + totalLikesStatus);
		}
		//Stores the total of likes the page has		
		totalLikes += total_likes;
		//console.log(totalLikes);		
		//datesMonths.push(date.getMonth());
		//datesDays.push(date.getDay());
		datesMonths.push(momentDate.date());
		datesDays.push(momentDate.day());
	}
	let cardi = divCardi + cardContenti + divCardf;
	let cards = divCardi + cardContents + divCardf;
	//console.log(card);	
	document.getElementById('feedPhotos').innerHTML = cardi;
	document.getElementById('feedStatus').innerHTML = cards;

//	console.log("Status: " + totalLikesStatus);
	likes_Array.push(totalLikesStatus);
//	console.log("Photos: " + totalLikesPhotos);
	likes_Array.push(totalLikesPhotos);


	
	//createStats();
}


function buildPostsVideos(obj) {
	let divCardi = `<div class="card" style="width: 20rem;">`;
	let divCardf = `</div>`;
	var date;
	var momentDate;
	//alert(momentDate);
	let cardContent = '';
	for(let i in obj.data) {
		date = new Date((obj.data[i].created_time));
		momentDate = moment(date);
		if (obj.data[i].source) {
			
			var total_likes  = obj.data[i].likes.summary.total_count;
			var total_comments  = obj.data[i].comments.summary.total_count;
			//var total_views = obj.data[i].video_insights.data[0].values[0].value;
			var total_views = obj.data[i].video_insights.data[0].values[0].value;

		//console.log("Likes: " + total_likes + " Comments: " + total_comments);
			//console.log(obj.data[i].source);
			cardContent += `
				<video src="${obj.data[i].source}" class="card-img-top" alt="Video from facebook" controls none></video>
				<div class="card-body">
					<h4 class="card-title">${obj.data[i].title}</h4>
					<h6 class="card-subtitle mb-2 text-muted">${momentDate}</h6>
					<p class="card-text">${obj.data[i].description}</p>
					<p class="card-text">${total_likes} likes ${total_comments} comentarios ${total_views} Vistas</p>
					<br>
				</div>				
			`;
			totalLikesVideos += total_likes;
			totalCommentsVideos += total_comments;
			totalViews += total_views;
			//datesMonths.push(date.getMonth());
			//datesDays.push(date.getDay());

			//console.log(date.getDay());
			//console.log("Videos: " + totalLikesVideos);
			datesMonths.push(momentDate.date());
			datesDays.push(momentDate.day());
		} else {
			console.log("??????????????????");
		}

	}

	let cardv = divCardi + cardContent + divCardf;
	//console.log(cardv);	
	document.getElementById('feedVideos').innerHTML = cardv;
	//console.log("Videos: " + totalLikesVideos);
	likes_Array.push(totalLikesVideos);

	console.log(likes_Array);

}

function createStats(){
	likesChart();
	commentsChart();
	postsDayChart();
	console.log(datesMonths);
	console.log(datesDays);
	console.log("TOTAL VIEWS: " + totalViews)
	document.getElementById('videoViews').innerHTML = totalViews;
	var currentText = document.getElementById('videoViews').innerHTML;
	document.getElementById('videoViews').innerHTML = currentText + " vistas de video!";
}

function countDays(){
	var lun=0, mar=0, mie=0, jue=0, vie=0, sab=0, dom=0;
	for (let index = 0; index < datesDays.length; index++) {
		//console.log("tamaño"+datesDays.length);
		//console.log("0"+datesDays[0]);
		switch (datesDays[index]) {
			case 0: dom++;
			console.log("dom"+dom);
			break;
			case 1: lun++;
			console.log("lu"+lun);
			break;
			case 2: mar++;
			console.log("ma"+mar);
			break;
			case 3: mie++;
			console.log("mie"+mie);
			break;
			case 4: jue++;
			console.log("jue"+jue);
			break;
			case 5: vie++;
			console.log("vie"+vie);
			break;
			case 6: sab++;
			console.log("sab"+sab);
			break;
			default:
				console.log("NO");
			break;
		}
		console.log(lun, mar, mie, jue, vie, sab, dom);
	}

	return [lun, mar, mie, jue, vie, sab, dom];
}

function postsDayChart(){
	var dataDays = countDays();
	var ctx = document.getElementById("chartPostsDays").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
			//labels: posts_names_array,
			datasets: [{
				label: 'Post',
				//data: [12, 19, 3, 5, 2, 3],
				data: dataDays,
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Posts por dia'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	});	
}


function likesChart(){
	var ctx = document.getElementById("chartLikes").getContext('2d');
	var myPieChart = new Chart(ctx,{
		type: 'pie',
		data : {
			labels: posts_names_array,
			datasets:[{
				data: [totalLikesPhotos, totalLikesStatus, totalLikesVideos],
				backgroundColor: [
/* 					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)' */
					"#F7464A",
					"#46BFBD",
					"#FDB45C"
				],
				borderColor: [
/* 					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)' */
					"white",
					"white",
					"white"
				],
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Likes por Tipo de publicación'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	});
}

function commentsChart(){
	var ctx = document.getElementById("chartCommentsDays").getContext('2d');
	var myPieChart = new Chart(ctx,{
		type: 'pie',
		data : {
			labels: posts_names_array,
			datasets:[{
				data: [totalCommentsPhotos, totalCommentsStatus, totalCommentsVideos],
				backgroundColor: [
/* 					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)' */
					"#F7464A",
					"#46BFBD",
					"#FDB45C"
				],
				borderColor: [
/* 					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)' */
					"white",
					"white",
					"white"
				],
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Comentarios por Tipo de publicación'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	});
}



function logout(){
	FB.logout(function(response){
			setElements(false);
	});
}

