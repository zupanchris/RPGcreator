drop database if exists dndchar;
create database dndchar character set utf8 collate utf8_croatian_ci;

use dndchar;

create table user(
id int not null primary key auto_increment,
firstName varchar(250) not null,
lastName varchar(250) not null,
username char(50) not null,
password varchar(250) not null,
email varchar(250) not null,
level varchar(250) not null
);


create table characterdnd(
id int not null primary key auto_increment,
name varchar(250),
subrace int not null,
class int not null,
background int not null,
alingment int not null,
user int not null
);

create table race(
id int not null primary key auto_increment,
name varchar(250) not null,
strenght int not null,
dexterity int not null,
constitution int not null,
intelligence int not null,
wisdom int not null,
charisma int not null,
age varchar(250),
height varchar(250),
weight varchar(250),
size varchar(250) not null,
speed int not null,
language varchar(250) not null,
trait varchar(250) not null
);

create table subrace(
id int not null primary key auto_increment,
race int not null,
name varchar(250) not null,
strenght int not null,
dexterity int not null,
constitution int not null,
intelligence int not null,
wisdom int not null,
charisma int not null,
abilityscoreBonus int not null,
trait varchar(250) not null
);

create table background(
id int not null primary key auto_increment,
name varchar(250) not null,
skill varchar(250) not null,
tool varchar(250),
language varchar(250),
equipment varchar(250) not null,
feature varchar(250) not null
);


create table class(
id int not null primary key auto_increment,
name varchar(250) not null,
hitdice varchar(250) not null,
hp1st varchar(250) not null,
hplater varchar(250) not null,
feature varchar(250) not null
);

create table subclass(
id int not null primary key auto_increment,
class int not null,
name varchar(250) not null,
feature varchar(250) not null
);

create table proficiency(
id int not null primary key auto_increment,
class int not null,
armor varchar(250),
weapon varchar(250) not null,
tool varchar(250),
skill varchar(250) not null
);

create table alingment(
id int not null primary key auto_increment,
name varchar(250) not null
);

create table savingthrow(
id int not null primary key auto_increment,
name varchar(250) not null,
checkbox boolean,
modifier int
);

create table skill(
id int not null primary key auto_increment,
name varchar(250) not null,
checkbox boolean,
modifier int
);

create table abilityscore(
id int not null primary key auto_increment,
name varchar(250) not null,
score int not null
);


alter table characterdnd add foreign key (alingment) references alingment(id);
alter table characterdnd add foreign key (subrace) references subrace(id);
alter table characterdnd add foreign key (background) references background(id);
alter table characterdnd add foreign key (user) references user(id);
alter table characterdnd add foreign key (class) references class(id);

alter table subclass add foreign key (class) references class(id);
alter table proficiency add foreign key (class) references class(id);

alter table subrace add foreign key (race) references race(id);


insert into abilityscore
(id, name) values
(null, "Strenght"),
(null, "Dexterity"),
(null, "Constitution"),
(null, "Intelligence"),
(null, "Wisdom"),
(null, "Charisma");


insert into skill
(id, name) values
(null, "Acrobatics"),
(null, "Animal Handling"),
(null, "Arcana"),
(null, "Athletics"),
(null, "Deception"),
(null, "History"),
(null, "Insight"),
(null, "Intimidation"),
(null, "Investigation"),
(null, "Medicine"),
(null, "Nature"),
(null, "Perception"),
(null, "Performance"),
(null, "Persuasion"),
(null, "Religion"),
(null, "Sleight Of Hand"),
(null, "Stealth"),
(null, "Survival");



insert into alingment
(id, name) values
(null, "Lawful Good"),
(null, "Lawful Neutral"),
(null, "Lawful Evil"),
(null, "Neutral Good"),
(null, "True Neutral"),
(null, "Neutral Evil"),
(null, "Chaotic Good"),
(null, "Chaotic Neutral"),
(null, "Chaotic Evil");

insert into race
(id,name,strenght,dexterity,constitution,intelligence,wisdom,charisma,age,height,weight,size,speed,language,trait) values

(null,'Dwarf',0,0,2,0,0,0,'50-350','4-5 ft','150 lb','Medium',25,'Common, Dwarvish',
'Darkvision, Dwarven Resilience, Dwarven Combat Training, Tool Proficiency, Stonecunning'),
(null,'Elf',0,2,0,0,0,0,'100-750','5-6 ft','slender','Medium',30,'Common, Elvish',
'Darkvision, Keen Senses, Fey Ancestry, Trance'),
(null,'Halfling',0,2,0,0,0,0,'20-150','3 ft','40 lb','Small',25,'Common, Halfling',
'Lucky, Brave, Halfling Nimbleness'),
(null,'Human',1,1,1,1,1,1,'18-100','5-6 ft','vary','Medium',30,
'Common, One extra language','None'),
(null,'Dragonborn',2,0,0,0,0,1,'15-80','6-7 ft','250 lb','Medium',30,
'Common, Draconic','Draconic Ancestry, Breath Weapon, Damage Resistance'),
(null,'Gnome',0,0,0,2,0,0,'40-450','3-4 ft','40 lb','Small',25,'Common, Gnomish',
'Gnome Cunning'),
(null,'Half-Elf',0,0,0,0,0,2,'20-180','5-6 ft','vary','Medium',30,
'Common, Elvish, One extra language','Darkvision, Fey Ancestry, Skill Versatility'),
(null,'Half-Orc',2,1,0,0,0,0,'14-75','5-7 ft','heavy','Medium',30,
'Common, Orc','Darkvision, Menacing, Relentless Endurance, Savage Attacks'),
(null,'Tiefling',0,0,0,1,0,2,'20-110','5-6 ft','vary','Medium',30,
'Common, Infernal','Darkvision, Hellish Resistance, Infernal Legacy');


insert into subrace
(id,race,name,strenght,dexterity,constitution,intelligence,wisdom,charisma,trait) values

(null,1,'Dwarf - Hill',0,0,0,0,1,0,'Dwarven Toughness'),
(null,1,'Dwarf - Mountain',2,0,0,0,0,0,'Dwarven Armor Training'),
(null,2,'Elf - High',0,0,0,1,0,0,'Elf Weapon Training, Cantrip, Extra Language'),
(null,2,'Elf - Wood',0,0,0,0,1,0,'Elf Weapon Training, Fleet of Foot, Mask of the Wild'),
(null,2,'Elf - Dark (Drow)',0,0,0,0,0,1,'Superior Darkvision, Sunlight Sensitivity, Drow Magic, Drow Weapon Training'),
(null,3,'Halfling - Lightfoot',0,0,0,0,0,1,'Naturally Stealthy'),
(null,3,'Halfling - Stout',0,0,1,0,0,0,'Stout Resilience'),
(null,4,'Human - no Subrace',0,0,0,0,0,0,""),
(null,5,'Dragonborn - no Subrace',0,0,0,0,0,0,""),
(null,6,'Gnome - Forest',0,1,0,0,0,0,'Natural Illusionist, Speak with Small Beasts'),
(null,6,'Gnome - Rock',0,0,1,0,0,0,'Artificers Lore, Tinker'),
(null,7,'Half-Elf - no Subrace',0,0,0,0,0,0,""),
(null,8,'Half-Orc - no Subrace',0,0,0,0,0,0,""),
(null,9,'Tiefling - no Subrace',0,0,0,0,0,0,"");


insert into class
(id,name,hitdice,hp1st,hplater,feature) values

(null,'Barbarian','d12','12+Constitution modifier','1d12(or 7)+Constitution modifier',
'(1)Rage,Unarmored Defense (2)Reckless Attack,Danger Sense (3)Primal Path'),
(null,'Bard','d8','8+Constitution modifier','1d8(or 5)+Constitution modifier',
'(1)Spellcasting,Bardic Inspiration (2)Jack Of All Trades,Song Of Rest (3)Bard College,Expertise'),
(null,'Cleric','d8','8+Constitution modifier','1d8(or 5)+Constitution modifier',
'(1)Spellcasting,Divine Domain (2)Channel Divinity, Divine Domain Feature (3)-'),
(null,'Druid','d8','8+Constitution modifier','1d8(or 5)+Constitution modifier',
'(1)Druidic,Spellcasting (2)Wild Shape,Druid Circle (3)-'),
(null,'Fighter','d10','10+Constitution modifier','1d10(or 6)+Constitution modifier',
'(1)Fighting Style,Second Wind (2)Action Surge (3)Martial Archtype'),
(null,'Monk','d8','8+Constitution modifier','1d8(od 5)+Constitution modifier',
'(1)Unarmored Defense,Martial Arts (2)Ki,Unarmored Movement (3)Monastic Tradition,Deflect Missiles'),
(null,'Paladin','d10','10+Constitution modifier','1d10(or 6)+Constitution modifier',
'(1)Divine Sense,Lay On Hands (2)Fighting Style,Spellcasting,Divine Smite (3)Divine Health,Sacred Oath'),
(null,'Ranger','d10','10+Constitution modifier','1d10(or 6)+Constitution modifier',
'(1)Favored Enemy,Natural Explorer (2)Fighting Style,Spellcasting (3)Ranger Archtype,Primeval Awareness'),
(null,'Rogue','d8','8+Constitution modifier','1d8(or 5)+Constitution modifier',
'(1)Expertise,Sneak Attack,Thieves Cant (2)Cunning Action (3)Roguish Archtype'),
(null,'Sorcerer','d6','6+Constitution modifier','1d6(or 4)+Constitution modifier',
'(1)Spellcasting,Sorcerous Origin (2)Font Of Magic (3)Metamagic'),
(null,'Warlock','d8','8+Constitution modifier','1d8(or 5)+Constitution modifier',
'(1)Otherworldly Patron,Pact Magic (2)Eldritch Invocations (3)Pact Boon'),
(null,'Wizard','d6','6+Constitution modifier','1d6(or 4)+Constitution modifier',
'(1)Spellcasting,Arcane Recovery (2)Arcane Tradition (3)-');

insert into subclass
(id,class,name,feature) values
(null,1,'Path of Berserker','Frenzy'),
(null,1,'Path of Totem Warrior','Spirit Seeker, Totem Spirit'),
(null,2,'College of Lore','Bonus Proficiencies, Cutting Words'),
(null,2,'College of Valor','Bonus Proficiencies, Combat Inspiration'),
(null,3,'Knowledge Domain','Domain Spells, Blessing of Knowledge, Channel Divinity: Knowledge of the Ages'),
(null,3,'Life Domain','Domain Spells, Bonus Proficiency, Disciple of Life, Channel Divinity: Preserve Life'),
(null,3,'Light Domain','Domain Spells, Bonus Cantrip, Warding Flare, Channel Divinity: Radiance of the Dawn'),
(null,3,'Nature Domain','Domain Spells, Acolyte of Nature, Bonus Proficiency, Channel Divinity: Charm Animals and Plants'),
(null,3,'Tempest Domain','Domain Spells, Bonus Proficiencies, Wrath of the Storm, Channel Divinity: Destructive Wrath'),
(null,3,'Trickery Domain','Domain Spells, Blessing of the Trickster, Channel Divinity: Invoke Duplicity'),
(null,3,'War Domain','Domain Spells, Bonus Proficiencies, War Priest, Channel Divinity: Guided Strike'),
(null,4,'Circle of the Land','Circle Spells, Bonus Cantrip, Natural Recovery'),
(null,4,'Circle of the Moon','Combat Wild Shapes, Circle Forms'),
(null,5,'Champion','Improved Critical'),
(null,5,'Battle Master','Combat Superiority, Student of War'),
(null,5,'Eldritch Knight','Spellcasting, Weapon Bond'),
(null,6,'Way of the Open Hand','Open Hand Technique'),
(null,6,'Way of Shadow','Shadow Arts'),
(null,6,'Way of the Four Elements','Disciple of the Elements'),
(null,7,'Oath of Devotion','Oath Spells, Channel Divinity, Tenets of Devotion'),
(null,7,'Oath of Ancients','Oath Spells, Channel Divinity, Tenets of Ancients'),
(null,7,'Oath of Vengeance','Oath Spells, Channel Divinity, Tenets of Vengeance'),
(null,8,'Hunter','Hunters Pray'),
(null,8,'Beast Master','Rangers Companion'),
(null,9,'Thief','Fast Hands, Second-Story Work'),
(null,9,'Assassin','Bonus Proficiencies, Assassinate'),
(null,9,'Arcane Trickster','Spellcasting, Mage Hand Legerdemain'),
(null,10,'Draconic Bloodline','Dragon Ancestor, Draconic Resilience'),
(null,10,'Wild Magic','Wild Magic Surge, Tides of Chaos'),
(null,11,'The Archfey','Expanded Spell List, Fey Presence'),
(null,11,'The Fiend','Expended Spell List, Dark Ones Blessing'),
(null,11,'The Great Old One','Expended Spell List, Awakened Mind'),
(null,12,'School of Abjuration','Abjuration Savant, Arcane Ward'),
(null,12,'School of Conjuration','Conjuration Savant, Minor Conjuration'),
(null,12,'School of Divination','Divination Savant, Portent'),
(null,12,'School of Enchantment','Enchantment Savant, Hypnotic Gaze'),
(null,12,'School of Evocation','Evocation Savant, Sculpt Spells'),
(null,12,'School of Illusion','Illusion Savant, Improved Minor Illusion'),
(null,12,'School of Necromancy','Necromancy Savant, Grim Harvest'),
(null,12,'School of Transmutation','Transmutation Savant, Minor Alchemy');




insert into proficiency
(id,class,armor,weapon,tool,skill) values

(null,1,'Light armor, Medium armor, Shields','Simple weapons, Martial weapons','None',
'Choose two from Animal Handling, Athletics, Intimidation, Nature, Perception and Survival'),
(null,2,'Light armor','Simple weapons, Hand crossbows, Longswords, Rapiers, Shortswords',
'Three musical instruments of your choice','Choose any three'),
(null,3,'Light armor, Medium armor, Shields','All simple weapons','None',
'Choose two from History, Insight, Medicine, Persuasion and Religion'),
(null,4,'Light armor, Medium armor, Shields (Druids will not wear armor or use shields made of metal)',
'Clubs, Daggers, Darts, Javelins, Maces, Quarterstaffs, Scimitars, Sickles, Slings, Spears','Herbalism kit',
'Choose two from Arcana, Animal Handling, Insight, Medicine, Nature, Perception, Religion and Survival'),
(null,5,'All armor, Shields','Simple weapons, Martial weapons','None',
'Choose two skills from Acrobatics, Animal Handling, Athletics, History, Insight, Intimidation, Perception and Survival'),
(null,6,'None','Simple weapons, Shortswords','Choose one type of artisans tools or one musical instrument',
'Choose two from Acrobatics, Athletics, History, Insight, Religion and Stealth'),
(null,7,'All armor, Shields','Simple weapons, Martial weapons','NONE',
'Choose two from Athletics, Insight, Intimidation, Medicine, Persuasion and Religion'),
(null,8,'Light armor, Medium armor, Shields','Simple weapons, Marital weapons','None',
'Choose three from Animal Handling, Athletics, Insight, Investigation, Nature, Perception, Stealth and Survival'),
(null,9,'Light armor','Simple weapons, Hand crossbows, Longswords, Rapiers, Shortswords','Thieves tools',
'Choose four from Acrobatics, Athletics, Deception, Insight, Intimidation, Investigation, Perception, Performance, Persuasion, Sleight of Hand and Stealth'),
(null,10,'None','Daggers, Darts, Slings, Quarterstaffs, Light crossbows','None',
'Choose two from Arcana, Deception, Insight, Intimidation, Persuasion and Religion'),
(null,11,'Light armor','Simple weapons','None',
'Choose two skills from Arcana, Deception, History, Intimidation, Investigation, Nature and Religion'),
(null,12,'None','Daggers, Darts, Slings, Quarterstaffs, Light crossbows','None',
'Choose two from Arcana, History, Insight, Investigation, Medicine and Religion');

insert into savingthrow
(id, name) values
(null, "Strenght"),
(null, "Dexterity"),
(null, "Constitution"),
(null, "Intelligence"),
(null, "Wisdom"),
(null, "Charisma");


insert into background
(id,name,skill,tool,language,equipment,feature) values

(null,'Acolyte','Insight, Religion','None','Two of your choice',
'A holy symbol (a gift to you when you entered the priesthood), a prayer book or prayer wheel,
5 sticks of incense, vestments, a set of common clothes, and a belt pouch containing 15 gp','Shelter of the Faithful'),
(null,'Charlatan','Deception, Slight of Hand','Disguise kit, Forgery kit','None',
'A set of fine clothes, a disguise kit, tools of the con of your choice (ten stoppered bottles filled with colored liquid,
a set of weighted dice, a deck of marked cards, or a signet ring of an imaginary duke), and a belt pouch containing 15 gp','False Identity'),
(null,'Criminal','Deception, Stealht','One type of gaming set, Thieves tools','None',
'A crowbar, a set of dark common clothes including a hood, and a belt pouch containing 15 gp','Criminal Contact'),
(null,'Entertainer','Acrobatics, Performance','Disguise kit, One type of Musical Instrument','None',
'A musical instrument (one of your choice), the favor of an admirer (love letter, lock of hair, or trinket), a costume,
and a belt pouch containing 15 gp','By Popular Demand'),
(null,'Folk Hero','Animal Handling, Survival','One type of artisans tools, vehicles (land)','None',
'A set of artisans tools (one of your choice), a shovel, an iron pot, a set of common clothes, and a belt pouch containing 10 gp',
'Rustic Hospitality'),
(null,'Guild Artisan','Insigt, Persuasion','One type of artisans tools','One of your choice',
'A set of artisans tools (one of your choice), a letter of introduction from your guild, a set of travelers clothes, and a belt pouch
containing 15 gp','Guild Membership'),
(null,'Hermit','Medicine, Religion','Herbalism kit','One of your choice','A scroll case stuffed full of notes from your
studies or prayers, a winter blanket, a set of common clothes, an herbalism kit, and 5 gp','Discovery'),
(null,'Noble','History, Persuasion','One type of gaming set','One of your choice','A set of fine clothes, a signet ring, a scroll
of pedigree, and a purse containing 25 gp','Position of Privilege'),
(null,'Outlander','Athletics, Survival','One type of Musical Instrument','One of your choice','A staff, a hunting trap, a trophy from an
animal you killed, a set of travelers clothes, and a belt pouch containing 10 gp','Wanderer'),
(null,'Sage','Arcana, History','None','Two of your choice','A bottle of black ink, a quill, a small knife, a letter from a dead colleague
posing a question you have not yet been able to answer, a set of common clothes, and a belt pouch containing 10 gp','Resarcher'),
(null,'Sailor','Athletics, Perception','Navigators tools, vehicles (water)','None','A belaying pin (club), 50 feet of silk rope,
a lucky charm such as a rabbit foot or a small stone with a hole in the center (or you may roll for a random trinket on the Trinkets table
in chapter 5), a set of common clothes, and a belt pouch containing 10 gp','Ships Passage'),
(null,'Soldier','Athletics, Intimidation','One type of gaming set, vehicles (land)','None','An insignia of rank, a trophy taken from
a fallen enemy (a dagger, broken blade, or piece of a banner), a set of bone dice or deck of cards, a set of common clothes,
and a belt pouch containing 10 gp','Military Rank'),
(null,'Urchin','Sleight of Hand, Stealth','Disguise kit, Thieves tools','None','A small knife, a map of the city you grew up in,
a pet mouse, a token to remember your parents by, a set of common clothes, and a belt pouch containing 10 gp','City Secrets');

