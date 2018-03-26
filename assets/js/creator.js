function scores(name){
	document.getElementById(name.substring(0,1).toUpperCase() + name.substring(1) + "Ability").addEventListener("change",function(){	
	var Ability = parseInt(document.getElementById(name.substring(0,1).toUpperCase() + name.substring(1) + "Ability").value);	
	var Bonus = parseInt(document.getElementById(name + "Bonus").value);	
	document.getElementById(name + "Score").value=Ability+Bonus;
});
}

scores("strenght");
scores("dexterity");
scores("constitution");
scores("intelligence");
scores("wisdom");
scores("charisma");


function modifiers(name){
	document.getElementById(name.substring(0,1).toUpperCase() + name.substring(1) + "Ability").addEventListener("change",function(){
	var Score = parseInt(document.getElementById(name + "Score").value);
	if(Score==1){
	document.getElementById(name + "Mod").value= -5;
	}else if(Score == 2 || Score == 3){
	document.getElementById(name + "Mod").value= -4;
	}else if(Score == 4 || Score == 5){
	document.getElementById(name + "Mod").value=  -3;
	}else if(Score == 6 || Score == 7){
	document.getElementById(name + "Mod").value=  -2;
	}else if(Score == 8 || Score == 9){
	document.getElementById(name + "Mod").value=  -1;
	}else if(Score == 10 || Score == 11){
	document.getElementById(name + "Mod").value=  0;
	}else if(Score == 12 || Score == 13){
	document.getElementById(name + "Mod").value=  1;
	}else if(Score == 14 || Score == 15){
	document.getElementById(name + "Mod").value=  2;
	}else if(Score == 16 || Score == 17){
	document.getElementById(name + "Mod").value=  3;
	}else if(Score == 18 || Score == 19){
	document.getElementById(name + "Mod").value=  4;
	}else if(Score == 20 || Score == 21){
	document.getElementById(name + "Mod").value=  5;
	}else if(Score == 22 || Score == 23){
	document.getElementById(name + "Mod").value=  6;
	}else if(Score == 24 || Score == 25){
	document.getElementById(name + "Mod").value=  7;
	}else if(Score == 26 || Score == 27){
	document.getElementById(name + "Mod").value=  8;
	}else if(Score == 28 || Score == 29){
	document.getElementById(name + "Mod").value=  9;
	}else if(Score == 30){
	document.getElementById(name + "Mod").value=  10;
	}else{
	document.getElementById(name + "Mod").value=  "";
	}
	});	
}

modifiers("strenght");
modifiers("dexterity");
modifiers("constitution");
modifiers("intelligence");
modifiers("wisdom");
modifiers("charisma");
