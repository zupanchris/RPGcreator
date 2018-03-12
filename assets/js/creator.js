document.getElementById("StrenghtAbility").addEventListener("change",function(){	
	var StrenghtAbility = parseInt(document.getElementById("StrenghtAbility").value);	
	var strenghtBonus = parseInt(document.getElementById("strenghtBonus").value);	
	document.getElementById("strenghtScore").value=StrenghtAbility+strenghtBonus;
});

document.getElementById("DexterityAbility").addEventListener("change",function(){	
	var DexterityAbility = parseInt(document.getElementById("DexterityAbility").value);	
	var dexterityBonus = parseInt(document.getElementById("dexterityBonus").value);	
	document.getElementById("dexterityScore").value=DexterityAbility+dexterityBonus;
});

document.getElementById("ConstitutionAbility").addEventListener("change",function(){	
	var ConstitutionAbility = parseInt(document.getElementById("ConstitutionAbility").value);	
	var constitutionBonus = parseInt(document.getElementById("constitutionBonus").value);	
	document.getElementById("constitutionScore").value=ConstitutionAbility+constitutionBonus;
});

document.getElementById("IntelligenceAbility").addEventListener("change",function(){	
	var IntelligenceAbility = parseInt(document.getElementById("IntelligenceAbility").value);	
	var intelligenceBonus = parseInt(document.getElementById("intelligenceBonus").value);	
	document.getElementById("intelligenceScore").value=IntelligenceAbility+intelligenceBonus;
});

document.getElementById("WisdomAbility").addEventListener("change",function(){	
	var WisdomAbility = parseInt(document.getElementById("WisdomAbility").value);	
	var wisdomBonus = parseInt(document.getElementById("wisdomBonus").value);	
	document.getElementById("wisdomScore").value=WisdomAbility+wisdomBonus;
});

document.getElementById("CharismaAbility").addEventListener("change",function(){	
	var CharismaAbility = parseInt(document.getElementById("CharismaAbility").value);	
	var charismaBonus = parseInt(document.getElementById("charismaBonus").value);	
	document.getElementById("charismaScore").value=CharismaAbility+charismaBonus;
});

document.getElementById("StrenghtAbility").addEventListener("change",function(){
	var strenghtScore = parseInt(document.getElementById("strenghtScore").value);
	if(strenghtScore==1){
	document.getElementById("strenghtMod").value= -5;
	}else if(strenghtScore == 2 || strenghtScore == 3){
	document.getElementById("strenghtMod").value= -4;
	}else if(strenghtScore == 4 || strenghtScore == 5){
	document.getElementById("strenghtMod").value=  -3;
	}else if(strenghtScore == 6 || strenghtScore == 7){
	document.getElementById("strenghtMod").value=  -2;
	}else if(strenghtScore == 8 || strenghtScore == 9){
	document.getElementById("strenghtMod").value=  -1;
	}else if(strenghtScore == 10 || strenghtScore == 11){
	document.getElementById("strenghtMod").value=  0;
	}else if(strenghtScore == 12 || strenghtScore == 13){
	document.getElementById("strenghtMod").value=  1;
	}else if(strenghtScore == 14 || strenghtScore == 15){
	document.getElementById("strenghtMod").value=  2;
	}else if(strenghtScore == 16 || strenghtScore == 17){
	document.getElementById("strenghtMod").value=  3;
	}else if(strenghtScore == 18 || strenghtScore == 19){
	document.getElementById("strenghtMod").value=  4;
	}else if(strenghtScore == 20 || strenghtScore == 21){
	document.getElementById("strenghtMod").value=  5;
	}else if(strenghtScore == 22 || strenghtScore == 23){
	document.getElementById("strenghtMod").value=  6;
	}else if(strenghtScore == 24 || strenghtScore == 25){
	document.getElementById("strenghtMod").value=  7;
	}else if(strenghtScore == 26 || strenghtScore == 27){
	document.getElementById("strenghtMod").value=  8;
	}else if(strenghtScore == 28 || strenghtScore == 29){
	document.getElementById("strenghtMod").value=  9;
	}else if(strenghtScore == 30){
	document.getElementById("strenghtMod").value=  10;
	}else{
	document.getElementById("strenghtMod").value=  "";
}
});

document.getElementById("DexterityAbility").addEventListener("change",function(){
	var dexterityScore = parseInt(document.getElementById("dexterityScore").value);
	if(dexterityScore==1){
	document.getElementById("dexterityMod").value= -5;
	}else if(dexterityScore == 2 || dexterityScore == 3){
	document.getElementById("dexterityMod").value= -4;
	}else if(dexterityScore == 4 || dexterityScore == 5){
	document.getElementById("dexterityMod").value=  -3;
	}else if(dexterityScore == 6 || dexterityScore == 7){
	document.getElementById("dexterityMod").value=  -2;
	}else if(dexterityScore == 8 || dexterityScore == 9){
	document.getElementById("dexterityMod").value=  -1;
	}else if(dexterityScore == 10 || dexterityScore == 11){
	document.getElementById("dexterityMod").value=  0;
	}else if(dexterityScore == 12 || dexterityScore == 13){
	document.getElementById("dexterityMod").value=  1;
	}else if(dexterityScore == 14 || dexterityScore == 15){
	document.getElementById("dexterityMod").value=  2;
	}else if(dexterityScore == 16 || dexterityScore == 17){
	document.getElementById("dexterityMod").value=  3;
	}else if(dexterityScore == 18 || dexterityScore == 19){
	document.getElementById("dexterityMod").value=  4;
	}else if(dexterityScore == 20 || dexterityScore == 21){
	document.getElementById("dexterityMod").value=  5;
	}else if(dexterityScore == 22 || dexterityScore == 23){
	document.getElementById("dexterityMod").value=  6;
	}else if(dexterityScore == 24 || dexterityScore == 25){
	document.getElementById("dexterityMod").value=  7;
	}else if(dexterityScore == 26 || dexterityScore == 27){
	document.getElementById("dexterityMod").value=  8;
	}else if(dexterityScore == 28 || dexterityScore == 29){
	document.getElementById("dexterityMod").value=  9;
	}else if(dexterityScore == 30){
	document.getElementById("dexterityMod").value=  10;
	}else{
	document.getElementById("dexterityMod").value=  "";
}
});

document.getElementById("ConstitutionAbility").addEventListener("change",function(){
	var constitutionScore = parseInt(document.getElementById("constitutionScore").value);
	if(constitutionScore==1){
	document.getElementById("constitutionMod").value= -5;
	}else if(constitutionScore == 2 || constitutionScore == 3){
	document.getElementById("constitutionMod").value= -4;
	}else if(constitutionScore == 4 || constitutionScore == 5){
	document.getElementById("constitutionMod").value=  -3;
	}else if(constitutionScore == 6 || constitutionScore == 7){
	document.getElementById("constitutionMod").value=  -2;
	}else if(constitutionScore == 8 || constitutionScore == 9){
	document.getElementById("constitutionMod").value=  -1;
	}else if(constitutionScore == 10 || constitutionScore == 11){
	document.getElementById("constitutionMod").value=  0;
	}else if(constitutionScore == 12 || constitutionScore == 13){
	document.getElementById("constitutionMod").value=  1;
	}else if(constitutionScore == 14 || constitutionScore == 15){
	document.getElementById("constitutionMod").value=  2;
	}else if(constitutionScore == 16 || constitutionScore == 17){
	document.getElementById("constitutionMod").value=  3;
	}else if(constitutionScore == 18 || constitutionScore == 19){
	document.getElementById("constitutionMod").value=  4;
	}else if(constitutionScore == 20 || constitutionScore == 21){
	document.getElementById("constitutionMod").value=  5;
	}else if(constitutionScore == 22 || constitutionScore == 23){
	document.getElementById("constitutionMod").value=  6;
	}else if(constitutionScore == 24 || constitutionScore == 25){
	document.getElementById("constitutionMod").value=  7;
	}else if(constitutionScore == 26 || constitutionScore == 27){
	document.getElementById("constitutionMod").value=  8;
	}else if(constitutionScore == 28 || constitutionScore == 29){
	document.getElementById("constitutionMod").value=  9;
	}else if(constitutionScore == 30){
	document.getElementById("constitutionMod").value=  10;
	}else{
	document.getElementById("constitutionMod").value=  "";
}
});

document.getElementById("IntelligenceAbility").addEventListener("change",function(){
	var intelligenceScore = parseInt(document.getElementById("intelligenceScore").value);
	if(intelligenceScore==1){
	document.getElementById("intelligenceMod").value= -5;
	}else if(intelligenceScore == 2 || intelligenceScore == 3){
	document.getElementById("intelligenceMod").value= -4;
	}else if(intelligenceScore == 4 || intelligenceScore == 5){
	document.getElementById("intelligenceMod").value=  -3;
	}else if(intelligenceScore == 6 || intelligenceScore == 7){
	document.getElementById("intelligenceMod").value=  -2;
	}else if(intelligenceScore == 8 || intelligenceScore == 9){
	document.getElementById("intelligenceMod").value=  -1;
	}else if(intelligenceScore == 10 || intelligenceScore == 11){
	document.getElementById("intelligenceMod").value=  0;
	}else if(intelligenceScore == 12 || intelligenceScore == 13){
	document.getElementById("intelligenceMod").value=  1;
	}else if(intelligenceScore == 14 || intelligenceScore == 15){
	document.getElementById("intelligenceMod").value=  2;
	}else if(intelligenceScore == 16 || intelligenceScore == 17){
	document.getElementById("intelligenceMod").value=  3;
	}else if(intelligenceScore == 18 || intelligenceScore == 19){
	document.getElementById("intelligenceMod").value=  4;
	}else if(intelligenceScore == 20 || intelligenceScore == 21){
	document.getElementById("intelligenceMod").value=  5;
	}else if(intelligenceScore == 22 || intelligenceScore == 23){
	document.getElementById("intelligenceMod").value=  6;
	}else if(intelligenceScore == 24 || intelligenceScore == 25){
	document.getElementById("intelligenceMod").value=  7;
	}else if(intelligenceScore == 26 || intelligenceScore == 27){
	document.getElementById("intelligenceMod").value=  8;
	}else if(intelligenceScore == 28 || intelligenceScore == 29){
	document.getElementById("intelligenceMod").value=  9;
	}else if(intelligenceScore == 30){
	document.getElementById("intelligenceMod").value=  10;
	}else{
	document.getElementById("intelligenceMod").value=  "";
}
});

document.getElementById("WisdomAbility").addEventListener("change",function(){
	var wisdomScore = parseInt(document.getElementById("wisdomScore").value);
	if(wisdomScore==1){
	document.getElementById("wisdomMod").value= -5;
	}else if(wisdomScore == 2 || wisdomScore == 3){
	document.getElementById("wisdomMod").value= -4;
	}else if(wisdomScore == 4 || wisdomScore == 5){
	document.getElementById("wisdomMod").value=  -3;
	}else if(wisdomScore == 6 || wisdomScore == 7){
	document.getElementById("wisdomMod").value=  -2;
	}else if(wisdomScore == 8 || wisdomScore == 9){
	document.getElementById("wisdomMod").value=  -1;
	}else if(wisdomScore == 10 || wisdomScore == 11){
	document.getElementById("wisdomMod").value=  0;
	}else if(wisdomScore == 12 || wisdomScore == 13){
	document.getElementById("wisdomMod").value=  1;
	}else if(wisdomScore == 14 || wisdomScore == 15){
	document.getElementById("wisdomMod").value=  2;
	}else if(wisdomScore == 16 || wisdomScore == 17){
	document.getElementById("wisdomMod").value=  3;
	}else if(wisdomScore == 18 || wisdomScore == 19){
	document.getElementById("wisdomMod").value=  4;
	}else if(wisdomScore == 20 || wisdomScore == 21){
	document.getElementById("wisdomMod").value=  5;
	}else if(wisdomScore == 22 || wisdomScore == 23){
	document.getElementById("wisdomMod").value=  6;
	}else if(wisdomScore == 24 || wisdomScore == 25){
	document.getElementById("wisdomMod").value=  7;
	}else if(wisdomScore == 26 || wisdomScore == 27){
	document.getElementById("wisdomMod").value=  8;
	}else if(wisdomScore == 28 || wisdomScore == 29){
	document.getElementById("wisdomMod").value=  9;
	}else if(wisdomScore == 30){
	document.getElementById("wisdomMod").value=  10;
	}else{
	document.getElementById("wisdomMod").value=  "";
}
});

document.getElementById("CharismaAbility").addEventListener("change",function(){
	var charismaScore = parseInt(document.getElementById("charismaScore").value);
	if(charismaScore==1){
	document.getElementById("charismaMod").value= -5;
	}else if(charismaScore == 2 || charismaScore == 3){
	document.getElementById("charismaMod").value= -4;
	}else if(charismaScore == 4 || charismaScore == 5){
	document.getElementById("charismaMod").value=  -3;
	}else if(charismaScore == 6 || charismaScore == 7){
	document.getElementById("charismaMod").value=  -2;
	}else if(charismaScore == 8 || charismaScore == 9){
	document.getElementById("charismaMod").value=  -1;
	}else if(charismaScore == 10 || charismaScore == 11){
	document.getElementById("charismaMod").value=  0;
	}else if(charismaScore == 12 || charismaScore == 13){
	document.getElementById("charismaMod").value=  1;
	}else if(charismaScore == 14 || charismaScore == 15){
	document.getElementById("charismaMod").value=  2;
	}else if(charismaScore == 16 || charismaScore == 17){
	document.getElementById("charismaMod").value=  3;
	}else if(charismaScore == 18 || charismaScore == 19){
	document.getElementById("charismaMod").value=  4;
	}else if(charismaScore == 20 || charismaScore == 21){
	document.getElementById("charismaMod").value=  5;
	}else if(charismaScore == 22 || charismaScore == 23){
	document.getElementById("charismaMod").value=  6;
	}else if(charismaScore == 24 || charismaScore == 25){
	document.getElementById("charismaMod").value=  7;
	}else if(charismaScore == 26 || charismaScore == 27){
	document.getElementById("charismaMod").value=  8;
	}else if(charismaScore == 28 || charismaScore == 29){
	document.getElementById("charismaMod").value=  9;
	}else if(charismaScore == 30){
	document.getElementById("charismaMod").value=  10;
	}else{
	document.getElementById("charismaMod").value=  "";
}
});
























