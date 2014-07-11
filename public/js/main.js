var side_open = false;
var is_mobile = false;

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 	is_mobile = true;
}

if(is_mobile){
  $("#side").css("width","80%");
}

function toggle_side(){
	if($("#side").css("display") !== "none"){
		side_open = false;
		close_side();
	}
	else{
		side_open = true;
		open_side();
	}
}

function close_side(){
	side_open = false;
	$("#side").animate({
		marginLeft: "-100%"
	}, {
		duration: 1000,
		queue: false,
		complete: function(){
			$("#side").css("display","none");
		}
	});
	$("#detect").fadeOut();

}

function open_side(){
	side_open = true;
	$("#side").css("margin-left","-100%");
	$("#side").css("display","block");

	$("#side").animate({
  		marginLeft: "0%"
  	}, {
  		duration: 1000,
  		queue: false
  	});
  	$("#detect").fadeIn();
}
$("#detect").click(function(){
  	if(side_open){
  		side_open = false;
  		close_side();
  	}
});
$("#detect").click(function(){
	if($("#side").css("display") !== "none"){
		side_open = false;
		close_side();
	}
});
