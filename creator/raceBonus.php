<?php
include_once "../config.php";
validation();

$race = $connection->prepare("select
					b.id as 'subraceID',
                    a.strenght + b.strenght as 'strenght',
                    a.dexterity + b.dexterity as 'dexterity',
                    a.constitution + b.constitution as 'constitution',
                    a.intelligence + b.intelligence as 'intelligence',
                    a.wisdom + b.wisdom as 'wisdom',
                    a.charisma + b.charisma as 'charisma'
                    from race a inner join subrace b on a.id=b.race where b.id=:subraceID");
$race->execute($_POST);
$results = $race->fetchAll(PDO::FETCH_OBJ);

echo json_encode($results);

