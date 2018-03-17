<?php
include_once "../config.php";
validation();

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
g.username as 'player',
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
a.charismaMod as 'chaMod'
from characterdnd a inner join alingment b on a.alingment=b.id
inner join background c on a.background=c.id
inner join class d on a.class=d.id
inner join subrace e on a.subrace=e.id
inner join race f on e.race=f.id
inner join user g on a.user=g.id
where a.id= :characterID;");
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
$pdf->Cell(9,5,($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 0,"C");
$pdf->Ln(-115);
$pdf->Cell(63.5);
$pdf->Cell(10,5,"+2", 0, 2, "C");
$pdf->SetFont('Arial','',10);
$pdf->setXY(75,226);
$pdf->MultiCell(65,4.8, $option->equipmentBG, 0, 'L',false);
$pdf->setXY(152,54);
$pdf->MultiCell(50,5, $option->toolsBG, 0, 'L');
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
$pdf->Cell(5,3.3, ($option->strMod >= 0) ?  $v.$option->strMod : $option->strMod, 0, 2, "C");
$pdf->Cell(5,3.3, ($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 2, "C");
$pdf->Cell(5,3.3, ($option->conMod >= 0) ?  $v.$option->conMod : $option->conMod, 0, 2, "C");
$pdf->Cell(5,3.3, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, "C");
$pdf->Cell(5,3.3, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, "C");
$pdf->Cell(5,3.3, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 2, "C");
$pdf->setXY(55,86.3);
$pdf->Cell(5,3.3, ($option->strMod >= 0) ?  $v.$option->strMod : $option->strMod, 0, 2, "C");
$pdf->setXY(55,95.3);
$pdf->Cell(5,3.7, ($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 2, "C");
$pdf->setXY(55,111.6);
$pdf->Cell(5,3.7, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 2, "C");
$pdf->setXY(55,135.6);
$pdf->Cell(5,3.7, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 2, "C");
$pdf->setXY(55,160);
$pdf->Cell(5,3.7, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 2, "C");
$pdf->Cell(5,3.7, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 2, "C");
$pdf->Output('I','download.pdf',true);

endforeach;
?>