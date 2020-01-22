<?php
	session_start();

	if (!isset($_POST['submit'])) {
		header("Location: ../feeds.php");
	} else {
		include_once 'dbh.inc.php';

		$addcomment = mysqli_real_escape_string($myConn, $_POST['addcomment']);
		$author = ($_SESSION['matric']);
		date_default_timezone_set('Africa/Lagos');
		$date = date("Y-m-d");
		$time = date("h:i:sa");
		$id_posts = mysqli_real_escape_string($myConn, $_POST['postId']);
		
		$search_words = ["fuck", "anal", "anus", "arse", "ass", "ass fuck", "ass hole", "assfucker", "asshole", "assshole", "bastard", "bitch", "black cock", "bloody", "boong", "boob", "boobs", "cock", "cockfucker", "cocksuck", "cocksucker", "coon", "coonnass", "crap", "cunt", "cyberfuck", "damn", "darn", "dick", "dirty", "douche", "dummy", "erect", "erection", "erotic", "escort", "fag", "faggot", "fuck", "Fuck off", "fuck you", "fuckass", "fuckhole", "god damn", "gook", "hard core", "hardcore", "homoerotic", "hore", "lesbian", "lesbians", "mother fucker", "motherfuck", "motherfucker", "negro", "nigger", "orgasim", "orgasm", "penis", "penisfucker", "piss", "porn", "porno", "pornography", "pussy", "retard", "sadist", "sex", "sexy", "shit", "slut", "suck", "tits", "viagra", "whore", "xxx", "Prick", "Bastard", "Bellend", "Dumbass", "Fucker", "Witch", "Dickhead", "Shit", "anal", "anus", "arse", "ass", "ballsack", "balls", "bastard", "bitch", "biatch", "bloody", "blowjob", "blow job", "bollock", "bollok", "boner", "boob", "bugger", "bum", "butt", "buttplug", "clitoris", "cock", "coon", "crap", "cunt", "damn", "dick", "dildo", "dyke", "fag", "feck", "fellate", "fellatio", "felching", "fuck", "f u c k", "fudgepacker", "fudge packer", "flange", "Goddamn", "God damn", "hell", "homo", "jerk", "jizz", "knobend", "knob end", "labia", "lmao", "lmfao", "muff", "nigger", "nigga", "omg", "penis", "piss", "poop", "prick", "pube", "pussy", "queer", "scrotum", "sex", "shit", "s hit", "sh1t", "slut", "smegma", "spunk", "tit", "tosser", "turd", "twat", "vagina", "wank", "whore", "wtf", "Idiot", "ill-mannered", "stupid", "asshole", "motherfucker", "bovine", "dullard", "bastard", "fool", "crazy", "incorrigible", "malcontent", "insolent", "senseless", "poor fish", "dazed", "dolt", "bovid", "bogus", "cocksucker", "dickhead", "son of a bitch", "whoreson", "impudent", "illiterate", "foolish", "animal"];
		$replace = "***";
		$save = str_ireplace($search_words, $replace, $addcomment);
		
		if (empty($addcomment)) {
			header("Location: ../feeds.php?emptyfield");
		} else {
			$sql = "INSERT INTO commenttable (comment, author, date, time, postid) value ('$save', '$author', '$date', '$time', '$id_posts');";
			$query = mysqli_query($myConn, $sql);
			header("Location: ../feeds.php?comment_successful");
		}
	}