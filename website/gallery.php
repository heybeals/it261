<?php

include ('config.php');
include ('./includes/header.php');

$people['Robert_Smalls'] = 'small_Former slave who became a captain at sea and a politician who successfully helped convince President Abraham Lincoln to accept Blacks in the Union army.';
$people['Rebecca_Lee_Crumpler'] = 'crump_Not only was Dr. Lee Crumpler the first female African-American physician, but her work led her to publish what is widely regarded as one of the first medical texts written by an African American author.';
$people['Fred_Jones'] = 'jones_A naturally gifted mechanic, invented a portable air-conditioning unit and refrigeration unit for trucks in 1938. His inventions were increasing vital during WWII when they were used to transport blood and medicine to battlefields and hospitals.';
$people['Marsha_P_Johnson'] = 'johns_A Black trans woman and activist, was at the forefront of fighting for LGBTQ rights in the 1960s and 70s (including partaking in the resistance at Stonewall). In addition to being the cofounder of STAR, an organization that housed homeless queer youth, Johnson also fought for equality through the Gay Liberation Front.';
$people['Shirley_Chisholm'] = 'chish_The first Black woman elected to Congress (1968) and the first woman and African American to seek the nomination for president of the United States from one of the two major political parties (1972). Her motto and title of her autobiography: Unbought and Unbossed — illustrates her outspoken advocacy for women and minorities during her seven terms in the U.S. House of Representatives.';
$people['George_Washington_Carver'] = 'carve_One of the most highly regarded scientists in American History, Carver was a leader in environmentalism and promoted the usage of alternative crops.';
$people['Claudette_Colvin'] = 'colvi_Then fifteen-year-old Claudette Colvin, nine months before Rosa Parks, was arrested for refusing to give her seat to a standing white woman after school. She later became one of the principal plaintiffs in the Supreme Court case Browder vs. Gayle, which declared bus segregation unconstitutional under the fourteenth amendment.';
$people['Matthew_Henson'] = 'henso_A gifted seaman, learned in principles of navigation and other vital knowledge to working as a crewman. Henson later went on to accompany Commander Robert E. Peary to his many expeditions to the Arctic, including the 1909 expedition where their team discovered the North Pole, and Henson planted the American flag.';
$people['Maggie_Lena_Walker'] = 'walke_In 1903, she opened the St. Luke Penny Savings Bank, and became the first African American woman to charter a bank. Walker noticed how Black people struggled to get loans from white-owned banks and sought to empower them through financial freedom.The bank continued to thrive as the oldest continually African American-operated bank in the U.S. until 2009.';
$people['Mary_Kenner'] = 'kenne_In the 1920s she came up with the idea of a sanitation belt to hold a menstrual towel in place, the precursor to today\'s sanitary pads, but it wasn\'t until the 1950s that she would be able to afford the patent process. Upon learning she was black companies declined to use or market her invention, but she continued to invent solutions to everyday problems. Eventually, Kenner would be granted five patents, the most of any Black woman in U.S. history.';
$people['Alice_Coachman'] = 'coach_The first Black woman from any country to win a gold medal at the Olympics.  Despite being discouraged from playing sports and not having equal access to training facilities, she was able to excel in track and field, and won the national title in the high jump event each year from 1939 to 1948. In 1948, she entered the Olympics and shattered the high jump record by clearing the 5 feet 6 1/8-inch bar, earning her gold.';
// Notable figures of Black History
// variable -> key -> value
// $name -> image
?>

<div id="wrapper">
    <table style="width:100%; border-spacing: 10px;">
        <caption><h2>Black Historical Figures of American History</h2></caption>
        <thead style="background-color:#a2a7a5;">
            <tr>
                <th colspan="2">Notable Figure</th>
                <th>Notable Contribution</th>
            </tr>
        </thead>
        <?php foreach($people as $name => $image): ?>
            <tbody >
                <tr>
                    <td><img src="images/<?php echo substr($image, 0,5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
                    <td><?php echo str_replace('_', ' ', $name);?></td>
                    <td><em><?php echo substr($image, 6);?></em></td>
                </tr>
        <?php endforeach; ?>
    </table>    
</div>
<!--end wrapper-->
<?php include ('./includes/footer.php'); ?>