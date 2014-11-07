/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function loadCityArea(id){
    
    $('#location')[0].options.length = 0;
    $('#location').append('<option>Location</option>');
  $.ajax({
     type: "GET",
     url: "http://localhost/Globalfuel/public/welcome/getcity/"+id,
     datatype: 'json',
     success: function(data){

       var obj=jQuery.parseJSON(data);
       $.each(obj,function(id,value){
           
                   $('#location').append('<option value='+value.city_area_id+'>'+value.locality_name+'</option>');
       });
     }
   });
}
function loadlocality(id){
    $('#area')[0].options.length = 0;
    $('#area').append('<option>Area</option>');
  $.ajax({
     type: "GET",
     url: "http://localhost/Globalfuel/public/welcome/getcityarea/"+id,
     datatype: 'json',
     success: function(data){
       var obj=jQuery.parseJSON(data);
       $.each(obj,function(id,value){
           
                   $('#area').append('<option value='+value.locality_id+'>'+value.name+'</option>');
       });
     }
   });
}