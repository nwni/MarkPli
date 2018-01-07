//Scheduled functions, test goes here
//It works with the 24 hour format
var rn = new Date();

var timeTo = new Date(rn.getFullYear(), rn.getMonth(), rn.getDate(), 23,38,0,0) - rn;
if(timeTo < 0){
    timeTo += 86400000; //IDK
}

setTimeout(function(){
    alert("NOW!")
    console.log("jajaajajaja");
}, timeTo);