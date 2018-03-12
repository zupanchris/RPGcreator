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
d.name as 'class',
e.name as 'race',
f.speed as 'speed',
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
inner join user g on a.user=g.id;");
$pdf->bindParam(":id", $_POST["id"]);
$pdf->execute();
$results = $pdf->fetchAll(PDO::FETCH_OBJ);
foreach($results as $option):

require("../fpdf/fpdf.php");
$image="sheet1.png";
$pdf =new FPDF();
$pdf-> AddPage();
$pdf-> SetFont("Arial","B",10);
$pdf-> Image($image,-5,5,220,290);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,42, $option->name, 0, 1, 'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(348,-58, $option->player, 0, 1, 'C');
$pdf->Cell(187,87, $option->race, 0, 1, 'C');
$pdf->Cell(180,-116, $option->class, 0, 1, 'C');
$pdf->Cell(268,116, $option->background, 0, 1, 'C');
$pdf->Cell(289,-87, $option->alingment, 0, 1, 'C');
$pdf->Cell(230,87, $option->speed, 0, 1, 'C');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(9,-28, $option->strScore, 0, 1, 'C');
$pdf->Cell(9,44, ($option->strMod >= 0) ?  $v.$option->strMod : $option->strMod, 0, 1, 'C');
$pdf->Cell(9,-10, $option->dexScore, 0, 1, 'C');
$pdf->Cell(9,26, ($option->dexMod >= 0) ?  $v.$option->dexMod : $option->dexMod, 0, 1, 'C');
$pdf->Cell(9,9, $option->conScore, 0, 1, 'C');
$pdf->Cell(9,6, ($option->conMod >= 0) ?  $v.$option->conMod : $option->conMod, 0, 1, 'C');
$pdf->Cell(9,29, $option->intScore, 0, 1, 'C');
$pdf->Cell(9,-13, ($option->intMod >= 0) ?  $v.$option->intMod : $option->intMod, 0, 1, 'C');
$pdf->Cell(9,47, $option->wisScore, 0, 1, 'C');
$pdf->Cell(9,-30, ($option->wisMod >= 0) ?  $v.$option->wisMod : $option->wisMod, 0, 1, 'C');
$pdf->Cell(9,63, $option->chaScore, 0, 1, 'C');
$pdf->Cell(9,-46, ($option->chaMod >= 0) ?  $v.$option->chaMod : $option->chaMod, 0, 1, 'C');
$pdf->Output();

endforeach;
?>