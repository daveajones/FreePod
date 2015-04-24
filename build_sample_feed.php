<?php
/*
	This is a sample script that builds the No Agenda show podcast feed.  It's a complex feed
	so it's good to use as an example. #itm
/*


//Bring in the FreePod classes
include_once "Podcast.php";

//Create a new Podcast
$podcast = new Podcast("No Agenda", "A show about politics with No Agenda, by Adam Curry and John C. Dvorak", "http://noagendashow.com/");

//Set individual item values with setValue
$podcast->setValue("generator", "FreePod");

//Add some feed level categories
$podcast->addCategory("News & Politics");
$podcast->addCategory("Comedy");

//Add a copyright
$podcast->addCopyright("No Agenda - Open Source");

//Creator info
$podcast->webMaster = "adam@curry.com";
$podcast->managingEditor = "adam@curry.com";

//Feed level itunes stuff
$podcast->itunes_subtitle = "The No Agenda Show - Media Deconstruction";
$podcast->itunes_image = "http://adam.curry.com/enc/20150402155420_na709artsm.jpg";
$podcast->itunes_explicit = "yes";

//Override the auto-determined album art size
$podcast->image['width'] = 144;
$podcast->image['height'] = 144;

//Add individual shows and set their attributes like you do with the feed itself
$item1 = $podcast->newItem("NA-709-2015-04-02", 'No Agenda Episode 709 - "Terror Factory"', "http://709.noagendanotes.com/", "1733C4C8-47BE-4EBA-A759-DBF6ED7ABF9B-937-00000ECF3409EFA6-FFA");
$item1->description = "CDATA";
$item1->author = "adam@curry.com";
$item1->itunes_keywords = array("curry","dvorak","no","agenda","politics","douchebag");
$item1->itunes_author = "Adam Curry & John Dvorak";
$item1->itunes_subtitle = "Terror Factory";
$item1->itunes_image = "http://adam.curry.com/enc/20150402155420_na709artsm.jpg";
$item1->itunes_duration = "2:54:05";
$item1->itunes_summary = "CDATA";
$item1->addEnclosure('http://mp3s.nashownotes.com/NA-709-2015-04-02-Final.mp3');

$item2 = $podcast->newItem("NA-708-2015-03-29", 'No Agenda Episode 708 - "Power & Gossip"', "http://708.noagendanotes.com/", "03468468-F44C-4D0C-B4A9-27F3CD54C86C-1039-00000EE2D1D0014B-FFA");
$item2->description = "CDATA";
$item2->author = "adam@curry.com";
$item2->itunes_keywords = array("curry","dvorak","no","agenda","politics","douchebag");
$item2->itunes_author = "Adam Curry & John Dvorak";
$item2->itunes_subtitle = "Power & Gossip";
$item2->itunes_image = "http://adam.curry.com/enc/20150329160353_na708artsm.jpg";
$item2->itunes_duration = "3:00:20";
$item2->itunes_summary = "CDATA";
$item2->addEnclosure('http://mp3s.nashownotes.com/NA-708-2015-03-29-Final.mp3');

//Dump the xml and make it pretty
echo $podcast->xml(TRUE);
