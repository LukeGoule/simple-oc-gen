<?php

/*
 I could have easily done this WAY faster using string manipulation, but in the grand scheme of things that
 seems dumb since this is a page which has to perform operations on the serverside every time a user loads it, so
 that would be genuinely more inefficient thinking from a CPU time standpoint..
 Key   = Code form
 Value = English form
*/

function _get_template() {
	return array(
		// Basics
		"name"				=> "Name",
		"nickname"			=> "Nickname",
		"age"				=> "Age",
		"gender"			=> "Gender",
		"dob"				=> "Date Of Birth",
		"pob"				=> "Place Of Birth",
		"sexuality"			=> "Sexuality",

		// Overview / Appearance
		"height"			=> "Height",
		"weight"			=> "Weight",
		"build"				=> "Build",
		"skin_colour"		=> "Skin Colour",
		"hair_colour"		=> "Hair Colour",
		"hair_style"		=> "Hair Style",
		"eye_colour"		=> "Eye Colour",
		"tattoos_markings"	=> ["Tattoos / Markings", true],
		"clothing"			=> ["Clothing", true],
		"accessories"		=> ["Accessories", true],

		// Personal(ity)
		"traits"			=> ["Traits", true],
		"likes"				=> ["Likes", true],
		"dislikes"			=> ["Dislikes", true],

		// (Mental) Health
		"fears"				=> "Fears",
		"disorders"			=> "Disorders",
		"mental_state"		=> "Mental State",
		"injuries"			=> "Injuries",

		// Other
		"specialisations"	=> ["Character Specialisation(s)", true],
		"weapons"			=> ["Character Weapon(s)", true],
		"quote"				=> "Character Quote(s)",
		"backstory"			=> ["Backstory", true]
);
}
?>