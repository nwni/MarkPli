var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/dcnx5ee9r/upload';
var CLOUDINARY_PRESET = 'dlnjgllb';	

var fileUpload = document.getElementById('file_id');

fileUpload.addEventListener('change', function(event){
    var file = event.target.files[0];
    var formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', CLOUDINARY_PRESET);


    axios.post(CLOUDINARY_URL, formData, {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',				
        }
    }).then(function(res){
        console.log(res);
        //console.log(res.data.secure_url);
        var url = res.data.secure_url;
        console.log(url);
        document.getElementById('userfile').value = url;
        
    }).catch(function(err){
        console.log(err);
    });
});