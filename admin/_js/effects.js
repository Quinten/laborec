function showTable(id){
	$("#subcat"+id).toggle();
	$("#subhead"+id).hide();
	$("#subtitle"+id).show();
	submemory[id]['display'] = 1;
	switchHeadLabel(id);
}

function hideTable(id){
	$("#subcat"+id).toggle();
	$("#subhead"+id).show();
	$("#subtitle"+id).hide();
	submemory[id]['display'] = 0;
	switchHeadLabel(id);
}

function showAll(id){
	$("#subcat"+id).show();
	$("#subhead"+id).hide();
	$("#subtitle"+id).show();
	submemory[id]['display'] = 1;
	switchHeadLabel(id);
}

function hideAll(id){
	$("#subcat"+id).hide();
	$("#subhead"+id).show();
	$("#subtitle"+id).hide();
	submemory[id]['display'] = 0;
	switchHeadLabel(id);
}

function switchHead(id){
	$("#headhead"+id).toggle();
	$("#headtitle"+id).toggle();
}

function switchHeadLabel(id){
	var hideLabel = false;
	var currentCat = submemory[id]['cat'];
	for (i in submemory){
		if(submemory[i]['display'] == 1 && submemory[i]['cat'] == currentCat){
			hideLabel = true;
		}
	}
	if(hideLabel){
		$("#headlabel"+currentCat).hide();
		$("#emptylabel"+currentCat).show();
	}else{
		$("#headlabel"+currentCat).show();
		$("#emptylabel"+currentCat).hide();
	}
}

function disp_confirm(clicked_button) {
	var f = clicked_button.parentNode;
	var c = confirm("Are you sure?");
	if (c == true) {
		f.submit();	
	}
}

function getbox(q_string){
$.ajax({
  url: "getbox.php?q="+q_string,
  cache: false,
  success: function(html){
		$(".dialogbox").dialog("close");
		$("#receiver").append(html);
			var boxheight = $("#receiver").height() + 50;
			var boxwidth = 400;
			$("#versionsdialogbox").dialog({
			modal: true, overlay: { opacity: 0.5, background: "white" }, height: boxheight, width: boxwidth, minWidth: 200
		});				
  }
});
}

function check_ext(field){
	var imgsrc = field.value;
	if(!imgsrc.match("[^.]+?\\.((jpg)|(jpeg)|(gif)|(png))")){
		alert("Only .jpg, .jpeg, .gif or .png extensions are allowed.");
	}
}

var po_added = 1;
function addPO(){
	$("#linkPO").before("PO (price):<br /><input type='text' name='po_price_"+po_added+"' size='10' /><br /><br />PO (freetext):<br /><input type='text' name='potext_"+po_added+"' size='25' /><br /><br />");
	po_added++;
}

function saveSubMemory(){
	var qurl = "savesubmemory.php?q=";
	for (i in submemory){
		qurl += i + "_" + submemory[i]['display'] + "/";
	}
	$.ajax({url: qurl});
}