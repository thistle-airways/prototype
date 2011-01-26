function fltsInit() {
	//for (var i=1; i<5; i++) {
		//document.getElementById(i).className = "";
		//document.getElementById(i).onmousedown = highlightSelect;
	//}
}

function select(key, type)
{
	/*if(type == '1')
	{
		var d = document.getElementById("display-selected");
		d.className("outbound").innerHTML = "Outbound Flight<br />10/02/11 @ 11:35 - £40";
	}
	*/

}

function highlightSelect(id) {
	//var thisFlight = evt.target;
	var thisFlight = document.getElementById(id);
	if (thisFlight.className == "") {
		thisFlight.className = "pickedFlt";
	} else {
		thisFlight.className = "";
	}
}