$(document).ready(function(){
  //sliding images
  $('.bxslider').bxSlider({
    adaptiveHeight: true,
    mode: 'fade',
    auto: true,
    captions: true
  });



  //etkinlik table


  var etkinlikler = {} ;
  $.ajax({
    dataType: "json",
    url: "php/etkinlikler.json",
    success: function (data) {
        etkinlikler = data;

        console.log(data);
		
		for(var i in etkinlikler){
		  if(etkinlikler[i] !== 0){
			  console.log(etkinlikler[i]);
			  $("table.etkinlik").append("<tr class='"+ i +"'></tr>");
			  $("table.etkinlik tr."+ i +"").append("<td class='"+ i +"_img'><img src='"+ etkinlikler[i].url +"'></img></td>");
			  $("table.etkinlik tr."+ i +"").append("<td class=+'"+ i +"_text'><p>"+ etkinlikler[i].context +"</p></td>");
		
			}
		}
    }
  });

});
