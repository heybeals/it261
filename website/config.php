<?php
ob_start();
 
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
    case 'index.php':
       $title= 'Home page of the website project';
       $body= 'home';
       break;

    case 'about.php':
       $title= 'About page of the website project';
       $body= 'about inner';
       break;
       
    case 'daily.php':
       $title= 'Daily page of the website project';
       $body= 'daily inner';
       break;
       
    case 'project.php':
       $title= 'Project page of the website project';
       $body= 'project inner';
       break;
       
    case 'contact.php':
       $title= 'Contact page of the website project';
       $body= 'contact inner';
       break;
       
    case 'gallery.php':
       $title= 'Gallery page of the website project';
       $body= 'gallery inner';
       break;   
}
//navigational array
$nav= array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
function make_links($nav) {
    $my_return = '';
    foreach ($nav as $key => $value) { 
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:#f76c5e;" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a style="color:#6d696a;" href="'.$key.'">'.$value.'</a></li>';
        }
    }
    return $my_return;
}

//switch (HW3)
date_default_timezone_set('America/Los_Angeles');
if (isset($_GET['today'])) {
    $today= $_GET['today'];
} else {
    $today= date('l');
}

switch ($today) {
    case 'Sunday':
        $hili= 'gold';
        $day= 'Sunday is a <em>Free</em> day.';
        $pic= 'legends.jpg'; 
        $alt= 'Legends and Lattes';
        $content= "<p>A free day is a day not really beholden to many rules. The morning is our household's routine deep clean
        day where we all clean our rooms, wash all the bedding, and get the house in order for the week. After that's done the day is free to be a lazy day.
        I recently have had to use the time for schoolwork, but tend to spend my free time reading. <br><br> The current book series I just started reading is:
        Legends and Lattes.<br><br><b><em>Legends & Lattes</em></b> is a tale about Viv the orc barbarian, worn out after decades of packing steel and raising 
        hell, that she cashes out of the warrior's life with one final score. A forgotten legend, a fabled artifact, and an unreasonable amount of hope lead 
        her to the streets of Thune, where she plans to open the first coffee shop the city has ever seen.<br><br>However, her dreams of a fresh start calling the 
        shots instead of swinging swords are hardly a sure bet. Old frenemies and Thune's shady underbelly may just upset her plans.</p>";
        break;

    case 'Monday':
        $hili= 'midnightblue';
        $day= 'Monday is Married at First Sight day.';
        $pic= 'married.jpg'; 
        $alt= 'Married at First Sight';
        $content= '<p><b><em>Married at First Sight</em></b> is a series in the 16th season, whereby a 
        team of relationship experts (including a sociology professor at UW) aim to match three couples to get 
        legally married at first sight when they meet at the altar.</p>';
        break;
        
    case 'Tuesday':
        $hili= 'green';
        $day= 'Tuesday is Mythic Quest day.';
        $pic= 'mythic-quest.jpg'; 
        $alt= 'Mythic Quest';
        $content= '<p><b><em>Mythic Quest</em></b> is a series, in the 3rd season, which follows a fictional video game studio that produces Mythic Quest, 
        a popular MMORPG, run by the game creator and creative director: Ian Grimm. At the start of the series, the studio is about to release a major 
        expansion pack to the game, titled Ravens Banquet. Grimm argues with lead engineer Poppy Li, head of monetization Brad Bakshi, and head writer C.W. Longbottom.</p>';
        break;
    
    case 'Wednesday':
        $hili= 'purple';
        $day= 'Wednesday is Eminence in Shadow day.';
        $pic= 'eminence.jpg'; 
        $alt= 'Eminence in Shadow';
        $content= '<p><b><em>Eminence in Shadow</em></b> is an isekai anime based on the Japanese light novel. In it, a boy in modern-day Japan desires 
        to be a mastermind who exerts power from the shadows, but in the process of training, gets hit by a truck and dies. He is reborn in a fantasy world 
        as Cid Kagenou, where he maintains a perfectly mediocre appearance as to not stand out and pursue his dream of manipulating from the shadows. <br><br>One day, 
        he stumbles upon an elven girl infected by a mysterious disease and cures her. Cid makes up a story, explaining this world is secretly run by the Cult of Diablos, 
        and his secret organization, "Shadow Garden", are the only ones that can fight them. <br><br>The elven girl, now named Alpha, joins this organization and begins 
        recruiting new members. However, the stories Cid made up were actually true, but he believes it to be total delusion. Cid continues fighting the Cult of Diablos 
        under the alias "Shadow", completely unaware that he is involved in a complicated power struggle.</p>';
        break;

    case 'Thursday':
        $hili= 'darkred';
        $day= 'Thursday is Tale of Outcasts day.';
        $pic= 'outcasts.jpe'; 
        $alt= 'Tale of Outcasts Anime';
        $content= '<p><b><em>Tale of Outcasts</em></b> is Japanese manga-based anime. Wisteria is an orphan girl living in a corner of the British Empire at the end of 
        the 19th century. Her life is desolate and bleak, until she encounters Marbas. <br><br>Able to see through demon disguises, she befriends the immortal Marbas, equally lonely 
        after centuries of solitude. He finds kinship with the human girl, even while evading the brutal Sword Cross Knights, including the brother of Wisteria. 
        Together, Wisteria and Marbas roam the Empire, populated by humans and human-like beasts, in search of a place where they can live together in peace.</p>';
        break;

    case 'Friday':
        $hili= 'pink';
        $day= 'Friday is Giant Beasts of Ars day.';
        $pic= 'giant-beasts.jpg'; 
        $alt= 'Giant Beasts of Ars';
        $content = '<p><b><em>Giant Beasts of Ars</em></b> is an anime where Great Beasts created the land, but humans stole it from them. Angered, the beasts 
        began eating humans, who, in turn, called upon the gods to fight the beasts. <br><br>In the age of the sword, heroes, and mythology, giant beasts are hunted by 
        humans for profit. Jiro, who makes his living hunting beasts, encounters Kuumi, who is being chases, and in that moment he decides to save her. As rumors 
        spread about humanity and a mysterious experiment, they seek to discover the secrets of the world.</p>';
        break;

    case 'Saturday':
        $hili= 'navajowhite';
        $day = 'Saturday is Ru Paul\'s Drag Race day.';
        $pic = 'drag-race.jpeg'; 
        $alt = "Ru Paul's Drag Race";
        $content = '<p><b><em>Drag Race</em></b> is a series in the 15th season, where drag queens from across the country face off in feats of fashion, acting, 
        comedy and more in hopes of winning the title of the Next Drag Superstar.</p>';
        break;
}

//Forms PHP
   
$first_name = '';
$last_name = '';
$email = '';
$frequency = '';
$phone = '';
$genre = '';
$schedule = '';
$comments = '';
$privacy = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$frequency_err = '';
$phone_err = '';
$genre_err = '';
$schedule_err = '';
$comments_err = '';
$privacy_err = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please provide your first name';
    } else {
        $first_name = $_POST['first_name'];
    } if (empty($_POST['last_name'])) {
        $last_name_err = 'Please provide your last name';
    } else {
        $last_name = $_POST['last_name'];
    } if (empty($_POST['email'])) {
        $email_err = 'Please provide your email';
    } else {
        $email = $_POST['email'];
    } if (empty($_POST['frequency'])) {
        $frequency_err = 'Please specify your preferred frequency';
    } else {
        $frequency = $_POST['frequency'];
    } if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Please provide your phone number';
    } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
               $phone_err = 'Invalid format!';
         } else {
                $phone = $_POST['phone'];
         }     
    } if (empty($_POST['genre'])) {
        $genre_err = 'Please share what you\'re into... No judgements here!';
    } else {
        $genre = $_POST['genre'];
    } if ($_POST['schedule'] == NULL) {
        $schedule_err = 'Please select a day/time';
    } else {
        $schedule = $_POST['schedule'];
    } if (empty($_POST['comments'])) {
        $comments_err = 'Please enter your comments';
    } else {
        $comments = $_POST['comments'];
    } if (empty($_POST['privacy'])) {
        $privacy_err = 'Confirm you\'ve read and agree to privacy policy';
    } else {
        $privacy = $_POST['privacy'];
    } function my_genre($genre) {
        $my_return = '';
        if (!empty($_POST['genre'])) {
            $my_return = implode(', ', $_POST['genre']);
        } else {
            $genre_err = 'Please share what you\'re into... No judgements here!';
        }
        return $my_return;
    }
    
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['frequency'], $_POST['phone'], $_POST['genre'], $_POST['schedule'], $_POST['comments'], $_POST['privacy'])) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Book Club Email on ' .date('m/d/y, h:i A');
        $body = 
        '
        First Name: '.$first_name.' '.PHP_EOL.'
        Last Name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Frequency: '.$frequency.' '.PHP_EOL.'
        Schedule: '.$schedule.' '.PHP_EOL.'
        Categories: '.my_genre($genre).' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';
        $headers = array(
            'From' => 'noreply@rarebirdparties.com'
        );
        
        if (!empty($first_name && $last_name && $email && $frequency && $phone && $genre && $schedule && $comments) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    }
}
