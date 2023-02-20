<?php 
    include ('config.php');
    include ('./includes/header.php');

$anime['Sword_Art_Online'] = 'sword_<b>Action/Fantasy |</b> Synopsis: In the near future, a Virtual Reality Massive Multiplayer Online Role-Playing Game (VRMMORPG) called Sword Art Online has been released where players control their avatars with their bodies using a piece of technology called: Nerve Gear. One day, players discover they cannot log out, as the game creator is holding them captive unless they reach the 100th floor of the game\'s tower and defeat the final boss. However, if they die in the game, they die in real life. Their struggle for survival starts now...';
$anime['Tower_of_God'] = 'tower_<b>Action/Dark Fantasy |</b> Synopsis: Reach the top, and everything will be yours. At the top of the tower exists everything in this world, and all of it can be yours.  You can become a god. This is the story of the beginning and the end of Rachel, the girl who climbed the tower so she could see the stars, and Bam, the boy who needed nothing but her.';
$anime['Jujutsu_Kaisen'] = 'jujut_<b>Action/Dark Fantasy |</b> Synopsis: Yuji Itadori is a boy with tremendous physical strength, though he lives a completely ordinary high school life. One day, to save a classmate who has been attacked by curses, he eats the finger of Ryomen Sukuna, taking the curse into his own soul. From then on, he shares one body with Ryomen Sukuna. Guided by the most powerful of sorcerers, Satoru Gojo, Itadori is admitted to Tokyo Jujutsu High School, an organization that fights the curses... and thus begins the heroic tale of a boy who became a curse to exorcise a curse, a life from which he could never turn back.';
$anime['Fruits_Basket'] = 'fruit_<b>Romance/Comedy |</b> Synopsis: Tohru Honda thought her life was headed for misfortune when a family tragedy left her living in a tent. When her small home is discovered by the mysterious Soma clan, she suddenly finds herself living with Yuki, Kyo, and Shigure Soma. But she quickly learns their family has a bizarre secret of their own: when hugged by the opposite sex, they turn into the animals of the Zodiac!';
$anime['Toradora!'] = 'torad_<b>Romance/Comedy |</b> Synopsis: It\'s Ryuji\'s first day as a junior in high school and it seems as if things are looking up. He gets to sit in between his only friend, Yusaku, and, more importantly, the girl he\'s secretly crushing on, Minori Kushieda. But just when he thinks the stars are aligned in his favor, he unwittingly crosses the most feared girl in school, Taiga Aisaku, making her onto his arch enemy. To top it off, Taiga has moved in right next door to Ryuji and happens to be Minori\'s best friend! Can this school year possibly get any worse?!';
$anime['Reincarnated_as_a_Sword'] = 'reinc_<b>Isekai/Fantasy |</b> Synopsis: After our protagonist is reborn in another world as a sentient sword, he encounters a girl fleeing a band of evil slavers. Young Fran takes him up to defend herself, and together they\'ll liberate those in need and exact justice on the cruel of heart.';
$anime['Mushoku_Tensei'] = 'musho_<b>Isekai/Fantasy |</b> Synopsis: When a 34-year-old underachiever gets run over by a truck, his story doesn\'t end there. Reincarnated in a new world as an infant, Rudy will seize every opportunity to live the life he\'s always wanted. Armed with new friends, some freshly acquired magical abilities, and the courage to do the things he\'s always dreamed of, he\'s embarking on an epic adventure—with all of his past experience intact!';
$anime['Demon_Slayer'] = 'demon_<b>Action/Dark Fantasy |</b> Synopsis: It is the Taisho Period in Japan. Tanjiro, a kindhearted boy who sells charcoal for a living, finds his family slaughtered by a demon. To make matters worse, his younger sister Nezuko, the sole survivor, has been transformed into a demon herself. Though devastated by this grim reality, Tanjiro resolves to become a “demon slayer” so that he can turn his sister back into a human, and kill the demon that massacred his family..';
$anime['Spy_x_Family'] = 'spyxf_<b>Action/Comedy |</b> Synopsis: World peace is at stake and secret agent Twilight must undergo his most difficult mission yet—pretend to be a family man. Posing as a loving husband and father, he\'ll infiltrate an elite school to get close to a high-profile politician. He has the perfect cover, except his wife\'s a deadly assassin and neither knows each other\'s identity. But someone does, his adopted daughter who\'s a telepath!';
$anime['Horimiya'] = 'horim_<b>Romance/Comedy |</b> Synopsis: When the popular Hori and the gloomy Miyamura meet, they reveal another side of themselves. Could this be the start of something new?';

$photos [0] = 'sword';
$photos [1] = 'tower';
$photos [2] = 'jujut';
$photos [3] = 'fruit';
$photos [4] = 'torad';
$photos [5] = 'reinc';
$photos [6] = 'musho';
$photos [7] = 'demon';
$photos [8] = 'spyxf';
$photos [9] = 'horim';

?>

<div id="wrapper">
    <div id="hero">
    <?php 
        function random_img($photos) {
        $my_return = '';
        $i = rand(0, 9);
        $sel_img = ''.$photos[$i].'.jpg';
        $my_return = '<img src="images/'.$sel_img.'" alt="'.$photos[$i].'">';
        return $my_return;
        }
        echo random_img($photos);
    ?>
    </div>
<!--end hero-->
<main class="blurb">
    <h1>Welcome to my Webpage!</h1>
    <h2>Here's some info about the anime you'll see looping through</h2>
    <?php foreach($anime as $name => $image): ?>
        <p><b><?php echo str_replace('_', ' ', $name);?></b></p>
        <p><em><?php echo substr($image, 6);?></em></p>
    <?php endforeach; ?>
</main>
<aside class="blurb">
    <h3>Here's More Fun Ipsum</h3>
    <p>Cupcake ipsum dolor sit amet lemon drops tiramisu biscuit. Tootsie roll cupcake icing cake lemon drops wafer. Toffee tootsie roll tootsie roll gingerbread icing cookie biscuit sugar plum biscuit. Powder gingerbread cake bonbon candy jelly beans. Jelly cookie pie chocolate cake marzipan croissant. Shortbread halvah cookie halvah candy macaroon tootsie roll croissant. Pie jelly beans jujubes soufflé muffin biscuit tiramisu toffee liquorice. Sesame snaps cookie wafer marzipan icing. Biscuit oat cake sesame snaps bear claw bonbon pudding toffee. Tootsie roll cheesecake marshmallow apple pie sesame snaps chupa chups.</p>
</aside>
</div>
<!--end wrapper-->

<?php include ('./includes/footer.php'); ?>
