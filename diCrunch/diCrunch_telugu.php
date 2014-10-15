﻿<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "్"; // Virama

/* Main arrays */

$num['tra'] = array(
	60 => "0",
	61 => "1",
	62 => "2",
	63 => "3",
	64 => "4",
	65 => "5",
	66 => "6",
	67 => "7",
	68 => "8",
	69 => "9",
);

$main['tra'] = array(

	//20 => "t ", // t end
		
	40 => "'", // apostrophe (avagraha)
	41 => "`", // Latin apostrophe (’)
	42 => "#", // Abbreviation

	200 => "n2a",
	202 => "r2a",
	203 => "Za",

	205 => "*ga",
//	206 => "jJa",
	207 => "*ja",
	208 => "*Da",
	209 => "*da",
	210 => "*ba",
	211 => "fa",

	212 => "qha", 
	213 => "khha",
	214 => "ghha",
	215 => "xa",
	216 => "Dhha",
	217 => "rhha",
	
	116 => "kha",
	115 => "ka",
	118 => "gha",
	117 => "ga",
	119 => "Ga",

	121 => "cha",
	120 => "ca",
	123 => "jha",
	122 => "ja",
	124 => "Ja",

	126 => "Tha",
	125 => "Ta",
	128 => "Dha",
	127 => "Da",
	129 => "Na",

	131 => "tha",
	130 => "ta",
	133 => "dha",
	132 => "da",
	134 => "na",

	136 => "pha",
	135 => "pa",
	138 => "bha",
	137 => "ba",
	139 => "ma",
	
	141 => "Ya",
	140 => "ya",
	142 => "ra",
	143 => "la",
	144 => "va",
	
	145 => "za",
	146 => "Sa",
	147 => "sa",


	199 => "K",
	
	149 => "M",
	150 => "H",
	151 => "~",
	152 => "||", // ||
	153 => "|", // |
	154 => "Q", // Nukta
	155 => "@", // Abbreviation
//	156 => "", // Udatta
//	157 => "", // Anudatta (svarita)

	
	201 => "La",
	
	148 => "ha",
);

$vow['tra'] = array(

	
	269 => " aE",
	270 => " AE",
	271 => " aO",

	257 => " R",
	258 => " q",
	259 => " w",
	260 => " W",
	
	261 => " e",
	262 => " ai",
	263 => " o",
	264 => " au",
	
	251 => " a",
	252 => " A",
	253 => " i",
	254 => " I",
	255 => " u",
	256 => " U",

	265 => " E",
	266 => " O",

	267 => "oM",
);


$yukta['tra'] = array(

	317 => "aE",
	318 => "AE",
	319 => "aO",

	307 => "R", // joint
	308 => "q", // joint
	309 => "w", // joint
	310 => "W", // joint
	
	311 => "e", // joint
	312 => "ai", // joint
	313 => "o", // joint
	314 => "au", // joint
	
	301 => "a", // joint
	302 => "A", // joint
	303 => "i", // joint
	304 => "I", // joint
	305 => "u", // joint
	306 => "U", // joint

	315 => "E",
	316 => "O",
);


$num['scr'] = array(
	60 => "0", // 0
	61 => "1", // 1
	62 => "2", // 2
	63 => "3", // 3
	64 => "4", // 4
	65 => "5", // 5
	66 => "6", // 6
	67 => "7", // 7
	68 => "8", // 8
	69 => "9", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end
	
	40 => "ఽ", // apostrophe (avagraha)
	41 => "’", // Latin apostrophe (’)
	42 => "॰", // Abbreviation

	200 => "న·",
	202 => "ఱ",
	203 => "ళ·",

	205 => "ఁ‌ˆగ",
//	206 => "జ్ఞ",
	207 => "ఁ‌ˆజ",
	208 => "ఁˆ‌డ",
	209 => "ఁ‌ˆద",
	210 => "ఁ‌ˆబ",
	211 => "ఫ·",

	212 => "క·", 
	213 => "ఖ·",
	214 => "గ·",
	215 => "జ·",
	216 => "డ·",
	217 => "ఢ·",
	
	116 => "ఖ", // kha
	115 => "క", // ka
	118 => "ఘ", // gha
	117 => "గ", // ga
	119 => "ఙ", // Ga
	
	121 => "ఛ", // cha
	120 => "చ", // ca
	123 => "ఝ", // jha
	122 => "జ", // ja
	124 => "ఞ", // Ja
	
	126 => "ఠ", // Tha
	125 => "ట", // Ta
	128 => "ఢ", // Dha
	127 => "డ", // Da
	129 => "ణ", // Na
	
	131 => "థ", // tha
	130 => "త", // ta
	133 => "ధ", // dha
	132 => "ద", // da
	134 => "న", // na
	
	136 => "ఫ", // pha
	135 => "ప", // pa
	138 => "భ", // bha
	137 => "బ", // ba
	139 => "మ", // ma
	
	141 => "య·", // Ya
	140 => "య", // ya
	142 => "ర", // ra
	143 => "ల", // la
	144 => "వ", // va
	
	145 => "శ", // za
	146 => "ష", // Sa
	147 => "స", // sa
	
	199 => "ఃʼ",
	
	149 => "ం", // M
	150 => "ః", // H
	151 => "ఁ", // ~
	152 => "॥", // ||
	153 => "।", // |
	154 => "·", // . Nukta
	155 => "॰", // Abbreviation
//	156 => "", // Udatta
//	157 => "", // Anudatta (svarita)
	
	201 => "ళ",
	
	148 => "హ", // ha
);

$vow['scr'] = array(

	269 => " ఎʼ",
	270 => " ఏʼ",
	271  => " ఆʼ",
	
	257 => " ఋ", // R
	258 => " ౠ", // q
	259 => " ఌ", // L
	260 => " ౡ", // W 
	
	261 => " ఏ", // e
	262 => " ఐ", // ai
	263 => " ఓ", // o
	264 => " ఔ", // au
	
	251 => " అ", // a
	252 => " ఆ", // A
	253 => " ఇ", // i
	254 => " ఈ", // I
	255 => " ఉ", // u
	256 => " ఊ", // U
	
	265 => " ఎ",
	266 => " ఒ",

	267 => "ఓం",

	
);

$yukta['scr'] = array(

	317 => "ెʼ",
	318 => "ేʼ",
	319 => "ాʼ",
	
	307 => "ృ", // R joint
	308 => "ౄ", // q joint
	309 => "ౢ", // L joint
	310 => "ౣ", // W  joint
	
	311 => "ే", // e joint
	312 => "ై", // ai joint
	313 => "ో", // o joint
	314 => "ౌ", // au joint
	
	301 => "&#8205;", // a joint
	302 => "ా", // A joint
	303 => "ి", // i joint
	304 => "ీ", // I joint
	305 => "ు", // u joint
	306 => "ూ", // U joint

	315 => "ె",
	316 => "ొ",
);

?>