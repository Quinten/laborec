$(document).ready(function(){
	$("#loaddialogbox").hide();
});

function showLoadMsg(msg){
		$("#loaddialogbox").show();
		$("#loaddialogbox").dialog({
			modal: true, overlay: { opacity: 0.5, background: "white" }, height: 70, width: 240, minWidth: 200, title: msg
		});
}