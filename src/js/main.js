//    * DT173G - Webbutveckling III 
//    * Main JS-file
//    * Mittuniversitetet 
//    * Amanda Matti, 2018 

"use strict";

var URL = "http://localhost/workout/pub/workouts.php/workouts"; 

// DOM onload
document.addEventListener("DOMContentLoaded", function(){ // Wait for DOM tree to get parsed

  // Click on radera-button - DELETE
    document.getElementById("workoutlist").addEventListener("click", function(ev){ 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("DELETE", URL+"/"+ev.target.id, true);
        xmlhttp.send();

        xmlhttp.onload = function() {
            location.reload();
        }
    })


// Click on add activity button "Lägg till" - POST
document.getElementById("add").addEventListener("click", function(ev){
    let date = document.getElementById("date").value;
    let activity = document.getElementById("activity").value;
    let time = document.getElementById("time").value;
    if( !(date != '' && activity != '' && time != '') ) location.reload();
    let json =  {"date": date, "activity": activity, "time": time};
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", URL, true);
    xmlhttp.setRequestHeader('Content-Type', 'application/json');
    xmlhttp.send( JSON.stringify(json) );

    xmlhttp.onload = function() {
        location.reload();
    }
})

// Show all workouts in a table - GET
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
       if (xmlhttp.status == 200) {

            var jsonData = JSON.parse( xmlhttp.responseText );
            for(var i=0; i < jsonData.length; i++){

               document.getElementById("workoutlist").innerHTML += "</td><tr><td>"+jsonData[i].date+"</td><td>" + jsonData[i].activity + "</td><td>" + jsonData[i].time + " min</td><td><button id='"+jsonData[i].ID+"'>Radera</button></td></tr>";    
            }
       }
       else if (xmlhttp.status == 400) {
          alert('Error 400');
       }
       else {
           alert('Något annat än 200 hände');
       }
    }
};

xmlhttp.open("GET", URL, true);
xmlhttp.send();

}); 

//Display todays date in .activityform
document.querySelector("#date").valueAsDate = new Date();



