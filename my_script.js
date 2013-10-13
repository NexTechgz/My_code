$(document).ready(function(){
done();
});

function done(){
setTimeout(function(){
update();
done();
},200);
}

function update(){
$.getJSON("fetch_exact.php",function(data){
$("tr").empty();
 
$.each(data.Programs,function(){
 

 $("tr").append("<td>VIEWER No:"+this['CId']+"</td><td>LOCATION:"+this['CLocation']+"</td><td>DETAILS:"+this['CDetails']+"</td><td>DATE::"+this['Date']+"</td><td>TIME:"+this['Time']+"</td><br/>");

} );

});

}
