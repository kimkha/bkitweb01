// JavaScript Document
//function trim(stringToTrim) {
//	return stringToTrim.replace(/^\s+|\s+$/g,"");
//}

function validate(){
	var name=document.getElementById("name").value;
	//name=trim(name);
	var title=document.getElementById("title").value;
	//value=trim(value);
	var image=document.getElementById("image").value;
	//image=trim(image);
	var headline=document.getElementById("headline").value;
	//headline=trim(headline);
	var content=document.getElementById("contentf").value;
	//content=trim(content);
	var submitOK="true";
	if (name==null||name==""){
		alert("Please enter your name!");
		submitOK="false";
	}
	if (title==null||title==""){
		alert("Please enter your title!");
		submitOK="false";
	}
	if (image==null||image==""){
		alert("Please enter your image!");
		submitOK="false";
	}	
	if (headline==null||headline==""){
		alert("Please enter your headline!");
		submitOK="false";
	}

	if (content==null||content==""){
		alert("Please enter your content!");
		submitOK="false";
	}
	if (submitOK=="false"){
		return false;
		}
}

f
