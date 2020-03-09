<?php
error_reporting(0);
function mulai(){
	$tulis = readline("Find : ");
	$url = 'https://loripsum.net/api/'.$tulis;
	$result = file_get_contents($url);
	echo $result;
}
function banner(){
	echo "
  ╦  ┌─┐┬─┐╔═╗┬ ┬┌┬┐  
  ║  │ │├┬┘╚═╗│ ││││  
  ╩═╝└─┘┴└─╚═╝└─┘┴ ┴  
Lorem Ipsum Generator
------Tegal1337------
Usage : 
	--help 
	--run

~/LorSum$ ";
}

function help(){
	echo "

List of command :

(integer) - The number of paragraphs to generate.
short, medium, long, verylong - The average length of a paragraph.
decorate - Add bold, italic and marked text.
link - Add links.
ul - Add unordered lists.
ol - Add numbered lists.
dl - Add description lists.
bq - Add blockquotes.
code - Add code samples.
headers - Add headers.
allcaps - Use ALL CAPS.
prude - Prude version.
plaintext - Return plain text, no HTML.
	
use '/'' to be specific
example : 20/allcaps

~/LorSum$ ";
}
banner();
while (true) {
	$command = trim(fgets(STDIN));
	if(strstr("--run", $command) or strtr("run", $command)){
		mulai();
	}elseif (strstr("--help", $command) or strtr("help", $command)){
		help();
	}else {
		echo "Command not found \n~/LorSum$ ";;
	}
}
