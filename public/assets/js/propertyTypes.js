/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
$('#propertytype')[0].options.length = 0;
 $('#propertytype').append('<option>Type Of Property</option>');
  $.ajax({
     type: "GET",
     url: "http://localhost/Globalfuel/public/admin/propertyType/",
     datatype: 'json',
     success: function(data){
       var obj=jQuery.parseJSON(data);
       $.each(obj,function(id,value){
                  $('#propertytype').append('<option value='+value.propertype_id+'>'+value.propertype_name+'</option>');
       });
     }
   });
}); 

function getPropertySubType(id)
{
    $('#propertysubtype')[0].options.length = 0;
    $('#propertysubtype').append('<option>Type Of Property</option>');
    $.ajax({
     type: "GET",
     url: "http://localhost/Globalfuel/public/admin/propertySubType/"+id,
     datatype: 'json',
     success: function(data){
       var obj=jQuery.parseJSON(data);
       $.each(obj,function(id,value){
                  $('#propertysubtype').append('<option value='+value.property_subtype_id+'>'+value.property_name+'</option>');
       });
     }
   });
}