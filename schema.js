//Group Members:
//Tassan Stewart 620108238
//Tonian Hyman 620108397
//Abigail Miles 620097489

window.onload = myFunction;


function myFunction() {
    
    var content = document.getElementById("section");
    clickFunction("home.php");
    
    
	var home = document.getElementById("home");
	var user = document.getElementById("user");
	var issue = document.getElementById("issue");
	var logout = document.getElementById("logout");
	var new_issue = document.getElementById("new_issue");
	
	
	
	var url;
	
	
	
    new_issue.onclick = function(){
    	url = "createIssue.php";
    	clickFunction(url);
    };

    home.onclick = function(){
    	
        url = "home.php";
    	clickFunction(url);

    };
    
    user.onclick = function(){
        
    	url = "newUser.php";
    	clickFunction(url);
    };
    
    issue.onclick = function(){
    	url = "createIssue.php";
    	clickFunction(url);
    };
    
   logout.onclick = function(){

    	url = "logout.php";
    	clickFunction(url);
    };
    
    
    function clickFunction(url){
   
    var request = new XMLHttpRequest();
	
	
	request.open("GET", url, true);
	request.send();	
	
    request.onreadystatechange = function(){
		if(this.readyState === 4 && this.status === 200) {
			    
			var response = request.responseText;
			content.innerHTML = response;
		}
		else{
			content.innerHTML = "Error";
		}
	};
	
}
}