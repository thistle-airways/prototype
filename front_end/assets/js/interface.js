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

function highlightSelect(inbOutb, id) {
	//var thisFlight = evt.target;
	var thisFlight = document.getElementById(id);
	var inOut = "";
	if (inbOutb == 0) { inOut = "out"; }
	if (inbOutb == 1) { inOut = "in"; }
	
	if (thisFlight.className == inOut) {
		var rows = document.getElementsByClassName(inOut);
		for (var i=0; i < rows.length; i++) {
			rows[i].className = inOut;
		}
		thisFlight.className = inOut + " pickedFlt";
	} else {
		thisFlight.className = inOut;
	}
}