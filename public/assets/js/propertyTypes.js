/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
 
  $.ajax({
      
     type: "POST",
     url: "http://localhost/Globalfuel/public/admin/propertyType/"+id,
     datatype: 'json',
     success: function(data){

       var obj=jQuery.parseJSON(data);
       $.each(obj,function(id,value){
           
                   $('#propertytype').append('<option value='+value.city_area_id+'>'+value.locality_name+'</option>');
       });
     }
   });
   
   
}); 