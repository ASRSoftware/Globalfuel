/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function loadCityArea(cityID){
//    var dataString = cityID;
       // html('Please wait... <img src="image/loading.gif" />');
       alert('CityArea');
  $.ajax({
     type: "POST",
     url: "welcome/getCityArea/"+cityID,
     data: cityID,
     cache: false,
     success: function(result){
       $("#"+location+"_loader").hide();
       $("#"+location+"_dropdown").
       html("<option value='-1'>Select "+location+"</option>");
       $("#"+location+"_dropdown").append(result);
     }
   });
}