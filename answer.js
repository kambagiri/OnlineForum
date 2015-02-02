


function addAnswer()
{
	document.getElementById("button_click").play();
	document.getElementById("addanswer").style.display = "inherit";
	document.getElementById("answer").style.display ="none";
}

function resettextarea()
{
	document.getElementById("postanswer").innerHTML ="reset is working";
}

function answersubmit()
{
	var ans = document.getElementById("postanswer").innerHTML;
	document.getElementById("answerforum").innerHTML += ans;
}