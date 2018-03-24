<?php
include_once "../config.php";

$v='+';

$pdf = $connection->prepare("
select
a.id as 'id',
a.name as 'name',
b.name as 'alingment',
c.name as 'background',
c.feature as 'backgroundFT',
c.equipment as 'equipmentBG',
c.language as 'languageBG',
c.tool as 'toolsBG',
d.name as 'class',
d.feature as 'classFT',
d.hitdice as 'hitDice',
d.hp1st as 'hp1st',
e.name as 'race',
e.trait as 'subraceFT',
f.speed as 'speed',
f.trait as 'raceFT',
f.language as 'languageRace',
g.firstName as 'player',
a.strenghtScore as 'strScore',
a.strenghtMod as 'strMod',
a.dexterityScore as 'dexScore',
a.dexterityMod as 'dexMod',
a.constitutionScore as 'conScore',
a.constitutionMod as 'conMod',
a.intelligenceScore as 'intScore',
a.intelligenceMod as 'intMod',
a.wisdomScore as 'wisScore',
a.wisdomMod as 'wisMod',
a.charismaScore as 'chaScore',
a.charismaMod as 'chaMod',
h.Acrobatics as 'Acrobatics',
h.AnimalHandling as 'AnimalHandling',
h.Arcana as 'Arcana',
h.Athletics as 'Athletics',
h.Deception as 'Deception',
h.History as 'History',
h.Insight as 'Insight',
h.Intimidation as 'Intimidation',
h.Investigation as 'Investigation',
h.Medicine as 'Medicine',
h.Nature as 'Nature',
h.Perception as 'Perception',
h.Performance as 'Performance',
h.Persuasion as 'Persuasion',
h.Religion as 'Religion',
h.SleightOfHand as 'SleightOfHand',
h.Stealth as 'Stealth',
h.Survival as 'Survival',
i.Strenght as 'StrST',
i.Dexterity as 'DexST',
i.Constitution as 'ConST',
i.Intelligence as 'IntST',
i.Wisdom as 'WisST',
i.Charisma as 'ChaST',
j.armor as 'ArmorProf',
j.weapon as 'WeaponProf',
j.tool as 'ToolProf'
from characterdnd a inner join alingment b on a.alingment=b.id
inner join background c on a.background=c.id
inner join class d on a.class=d.id
inner join subrace e on a.subrace=e.id
inner join race f on e.race=f.id
inner join user g on a.user=g.id
inner join characterSkills h on h.characterdnd=a.id
inner join savingthrow i on i.class=d.id
inner join proficiency j on j.class=d.id
where a.id= :characterID and h.characterdnd= :characterID;");
$pdf->bindParam(":characterID", $_GET["characterID"]);
$pdf->execute($_GET);
$results = $pdf->fetchAll(PDO::FETCH_OBJ);
foreach($results as $option):

require("../fpdf/fpdf.php");
$image="sheet1.png";
$pdf =new FPDF();
$pdf-> AddPage();
$pdf-> Image($image,-5,5,220,290);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(82,42, $option->name, 0, 0, 'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(32,27, $option->class, 0, 0, 'L');
$pdf->Cell(40,27, $option->background, 0, 0, 'C');
$pdf->Cell(40,27, $option->player, 0, 1, 'C');
$pdf->Cell(82);
$pdf->Cell(28,1, $option->race, 0, 0, 'L');
$pdf->Cell(10,1, $option->speed, 0, 0, 'C');
$pdf->Cell(10);
$pdf->Cell(30,1, $option->alingment, 0, 1, 'C');
$pdf->Ln(25);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(9,10, $option->strScore, 0, 2, 'C');
$pdf->Cell(9,4, ($option->strMod >= 0) ?  $v.$option->strMod : $option->strMod, 0, 2, 'C');
$pdf->Ln(11);
$pdf->Cell(9,10, $option->dexScore, 0, 2, 'C');
$pdf->Cell(9,4, ($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 2, 'C');
$pdf->Ln(11);
$pdf->Cell(9,10, $option->conScore, 0, 2, 'C');
$pdf->Cell(9,4, ($option->conMod >= 0) ?  $v.$option->conMod : $option->conMod, 0, 2, 'C');
$pdf->Ln(11);
$pdf->Cell(9,10, $option->intScore, 0, 2, 'C');
$pdf->Cell(9,4, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, 'C');
$pdf->Ln(11);
$pdf->Cell(9,10, $option->wisScore, 0, 2, 'C');
$pdf->Cell(9,4, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, 'C');
$pdf->Ln(11);
$pdf->Cell(9,10, $option->chaScore, 0, 2, 'C');
$pdf->Cell(9,5, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 2, 'C');
$pdf->Cell(18);
$pdf->Cell(9,5,($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 0,'C');
$pdf->Ln(-115);
$pdf->Cell(63.5);
$pdf->Cell(10,5,"+2", 0, 2, "C");
$pdf->SetFont('Arial','',10);
$pdf->setXY(75,226);
$pdf->MultiCell(65,4.8, $option->equipmentBG, 0, 'L',false);
$pdf->setXY(152,54);
$pdf->MultiCell(50,5, $option->toolsBG . "\n" . $option->ToolProf, 0, 'L');
$pdf->setXY(152,105);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(52,5.1, $option->classFT . "\n" . $option->backgroundFT . "\n" . $option->raceFT . "\n" . $option->subraceFT, 0, 'L');
$pdf->SetFont('Arial','',10);
$pdf->setXY(152,260);
$pdf->MultiCell(50,4.9, $option->languageRace . "\n" . $option->languageBG, 0, 'L');
$pdf->SetFont('Arial','B',12);
$pdf->setXY(127,58);
$pdf->Cell(10,5,$option->hitDice, 0, 2, "C");
$pdf->SetFont('Arial','B',16);
$pdf->setXY(100,77);
$pdf->Cell(10,5, $option->hp1st+$option->conMod, 0, 2, "C");
$pdf->SetFont('Arial','',9);
$pdf->setXY(55,57);
$pdf->Cell(5,3.3, ($option->StrST==1 ? (($option->strMod+2) >= 0 ?  $v.($option->strMod+2) : ($option->strMod+2)) : ($option->strMod >= 0 ?  $v.($option->strMod) : $option->strMod)), 0, 2, "C");
$pdf->Cell(5,3.3, ($option->DexST==1 ? (($option->dexMod+2) >= 0 ?  $v.($option->dexMod+2) : ($option->dexMod+2)) : ($option->dexMod >= 0 ?  $v.($option->dexMod) : $option->dexMod)), 0, 2, "C");
$pdf->Cell(5,3.3, ($option->ConST==1 ? (($option->conMod+2) >= 0 ?  $v.($option->conMod+2) : ($option->conMod+2)) : ($option->conMod >= 0 ?  $v.($option->conMod) : $option->conMod)), 0, 2, "C");
$pdf->Cell(5,3.3, ($option->IntST==1 ? (($option->intMod+2) >= 0 ?  $v.($option->intMod+2) : ($option->intMod+2)) : ($option->intMod >= 0 ?  $v.($option->intMod) : $option->intMod)), 0, 2, "C");
$pdf->Cell(5,3.3, ($option->WisST==1 ? (($option->wisMod+2) >= 0 ?  $v.($option->wisMod+2) : ($option->wisMod+2)) : ($option->wisMod >= 0 ?  $v.($option->wisMod) : $option->wisMod)), 0, 2, "C");
$pdf->Cell(5,3.3, ($option->ChaST==1 ? (($option->chaMod+2) >= 0 ?  $v.($option->chaMod+2) : ($option->chaMod+2)) : ($option->chaMod >= 0 ?  $v.($option->chaMod) : $option->chaMod)), 0, 2, "C");
$pdf->setXY(55,86.3);
$pdf->Cell(5,3.3, ($option->Athletics==1 ? (($option->strMod+2) >= 0 ?  $v.($option->strMod+2) : ($option->strMod+2)) : ($option->strMod >= 0 ?  $v.($option->strMod) : $option->strMod)), 0, 2, "C");
$pdf->setXY(55,95.3);
$pdf->Cell(5,3.7, $option->Acrobatics==1 ? (($option->dexMod+2) >= 0 ?  $v.($option->dexMod+2) : $option->dexMod+2) : ($option->dexMod >= 0 ?  $v.($option->dexMod) : $option->dexMod), 0, 2, "C");
$pdf->Cell(5,3.7, $option->SleightOfHand==1 ? (($option->dexMod+2) >= 0 ?  $v.($option->dexMod+2) : $option->dexMod+2) : ($option->dexMod >= 0 ?  $v.($option->dexMod) : $option->dexMod), 0, 2, "C");
$pdf->Cell(5,3.7, $option->Stealth==1 ? (($option->dexMod+2) >= 0 ?  $v.($option->dexMod+2) : $option->dexMod+2) : ($option->dexMod >= 0 ?  $v.($option->dexMod) : $option->dexMod), 0, 2, "C");
$pdf->setXY(55,111.6);
$pdf->Cell(5,3.7, ($option->Arcana==1) ? (($option->intMod+2) >= 0 ?  $v.($option->intMod+2) : $option->intMod+2) : (($option->intMod >= 0) ?  $v.($option->intMod) : $option->intMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->History==1) ? (($option->intMod+2) >= 0 ?  $v.($option->intMod+2) : $option->intMod+2) : (($option->intMod >= 0) ?  $v.($option->intMod) : $option->intMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Investigation==1) ? (($option->intMod+2) >= 0 ?  $v.($option->intMod+2) : $option->intMod+2) : (($option->intMod >= 0) ?  $v.($option->intMod) : $option->intMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Nature==1) ? (($option->intMod+2) >= 0 ?  $v.($option->intMod+2) : $option->intMod+2) : (($option->intMod >= 0) ?  $v.($option->intMod) : $option->intMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Religion==1) ? (($option->intMod+2) >= 0 ?  $v.($option->intMod+2) : $option->intMod+2) : (($option->intMod >= 0) ?  $v.($option->intMod) : $option->intMod), 0, 2, "C");
$pdf->setXY(55,135.6);
$pdf->Cell(5,3.7, ($option->AnimalHandling==1) ? (($option->wisMod+2) >= 0 ?  $v.($option->wisMod+2) : $option->wisMod+2) : (($option->wisMod >= 0) ?  $v.($option->wisMod) : $option->wisMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Insight==1) ? (($option->wisMod+2) >= 0 ?  $v.($option->wisMod+2) : $option->wisMod+2) : (($option->wisMod >= 0) ?  $v.($option->wisMod) : $option->wisMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Medicine==1) ? (($option->wisMod+2) >= 0 ?  $v.($option->wisMod+2) : $option->wisMod+2) : (($option->wisMod >= 0) ?  $v.($option->wisMod) : $option->wisMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Perception==1) ? (($option->wisMod+2) >= 0 ?  $v.($option->wisMod+2) : $option->wisMod+2) : (($option->wisMod >= 0) ?  $v.($option->wisMod) : $option->wisMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Survival==1) ? (($option->wisMod+2) >= 0 ?  $v.($option->wisMod+2) : $option->wisMod+2) : (($option->wisMod >= 0) ?  $v.($option->wisMod) : $option->wisMod), 0, 2, "C");
$pdf->setXY(55,160);
$pdf->Cell(5,3.7, ($option->Deception==1) ? (($option->chaMod+2) >= 0 ?  $v.($option->chaMod+2) : $option->chaMod+2) : (($option->chaMod >= 0) ?  $v.($option->chaMod) : $option->chaMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Intimidation==1) ? (($option->chaMod+2) >= 0 ?  $v.($option->chaMod+2) : $option->chaMod+2) : (($option->chaMod >= 0) ?  $v.($option->chaMod) : $option->chaMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Performance==1) ? (($option->chaMod+2) >= 0 ?  $v.($option->chaMod+2) : $option->chaMod+2) : (($option->chaMod >= 0) ?  $v.($option->chaMod) : $option->chaMod), 0, 2, "C");
$pdf->Cell(5,3.7, ($option->Persuasion==1) ? (($option->chaMod+2) >= 0 ?  $v.($option->chaMod+2) : $option->chaMod+2) : (($option->chaMod >= 0) ?  $v.($option->chaMod) : $option->chaMod), 0, 2, "C");
$pdf->setXY(48.6,86.2);
$pdf->SetFont('Arial','B',13);
$pdf->SetFillColor(255,255,0);
$pdf->Cell(5,3.7,$option->Athletics==1 ? 'o' : '',0,2,'C');
$pdf->setXY(48.6,95.4);
$pdf->Cell(5,3.7,$option->Acrobatics==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->SleightOfHand==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Stealth==1 ? 'o' : '',0,2,'C');
$pdf->setXY(48.6,111.6);
$pdf->Cell(5,3.7,$option->Arcana==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->History==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Investigation==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Nature==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Religion==1 ? 'o' : '',0,2,'C');
$pdf->setXY(48.6,135.7);
$pdf->Cell(5,3.7,$option->AnimalHandling==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Insight==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Medicine==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Perception==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Survival==1 ? 'o' : '',0,2,'C');
$pdf->setXY(48.6,160);
$pdf->Cell(5,3.7,$option->Deception==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Intimidation==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Performance==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.7,$option->Persuasion==1 ? 'o' : '',0,2,'C');
$pdf->setXY(49.2,56.9);
$pdf->Cell(5,3.3,$option->StrST==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.3,$option->DexST==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.3,$option->ConST==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.3,$option->IntST==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.3,$option->WisST==1 ? 'o' : '',0,2,'C');
$pdf->Cell(5,3.3,$option->ChaST==1 ? 'o' : '',0,2,'C');
$pdf->SetFont('Arial','',9);
$pdf->setXY(5,245);
$pdf->MultiCell(50,5, 'Weapons: ' . $option->WeaponProf . "\n \n" . 'Armor: ' . $option->ArmorProf, 0, 'L');
$pdf->setXY(125,5);
$pdf->SetTextColor(211,211,211);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,3.7, 'Created with: ' . $nameAPP, 0, 2, "R");
$pdf->Output('I','download.pdf',true);

endforeach;
?>