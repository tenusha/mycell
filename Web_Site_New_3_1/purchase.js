function formValidate() 
    { 
        var cardno = document.forms["myForm"]["cno"].value; 
        var expdate = document.forms["myForm"]["expdate"].value; 
        var scode = document.forms["myForm"]["scode"].value; 
        var fname = document.forms["myForm"]["fname"].value; 
        var lname = document.forms["myForm"]["lname"].value; 
        var address = document.forms["myForm"]["address"].value; 
         
        if(isNum(cardno,"Card number")){
            if(!isEmpty(expdate,"Expiration date")){
                if(isNum(scode,"Security code")){
                    if(isAlpha(fname,"First name")){
                        if(isAlpha(lname,"Last name")){
                            if(!isEmpty(address,"Address")){   					
                                    alert("Successfully Submitted !");
                                    //window.location.assign("./purchase_Action.php?");
                                    return true;
                            }else return false;
                        }else return false;
                    }else return false;
                }else return false;
            }else return false;
        }else return false;

    } 
    
    
    function isEmpty(elemValue,field) { 
 		if(elemValue ==""  ||  elemValue == null) { 
		alert("You cannot have " + field + " empty");  
		return true; 
		} 
		else  
 		return false;  
    } 
    function isAlpha(val, fie){     /*fie is first name*/
	if(!isEmpty(val, fie)){
		var temp=/^[a-zA-z]+$/;
		if(val.match(temp)){
			return true;
		}
		else alert("Use only letters for "+fie+" field !");
		return false;
	}
	return false;
}
function isNum(val, fie){
	if(!isEmpty(val, fie)){
		var temp=/^[0-9]+$/;
		if(val.match(temp)){
			return true;
		}
		else alert("Use only numbers for "+fie+" field !");
		return false;
	}
	return false;
}
