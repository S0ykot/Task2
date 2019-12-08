function login_V() {
	var username = document.getElementById('uname').value;
	var password = document.getElementById('pass').value;

	if (username=="" || password=="") {
		alert("Null value submission");
	}
	else
	{

	}
}


function signup_V()
{
	var name = document.getElementById('name').value;
	var cno = document.getElementById('cno').value;
	var username = document.getElementById('uname').value;
	var password = document.getElementById('pass').value;


	if (name=="" || cno=="" ||username==""||password=="") {
		alert("Null submission");
	}
}

function search_emp()
{
	var re = document.getElementById('result');
	var dta = document.getElementById('src').value;

	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "../php/search_emp.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhttp.send("search="+dta);
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     	re.innerHTML = this.responseText;
	    }
	  };

}