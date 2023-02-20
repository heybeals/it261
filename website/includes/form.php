<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend>Contact Danielle - <em>* indicates required field</em></legend>
        <label>First Name*:</label>
        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <span class="error"><?php echo $first_name_err ?></span>
        <label>Last Name*:</label>
        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <span class="error"><?php echo $last_name_err ?></span>
        <label>Email*:</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error"><?php echo $email_err ?></span>
        <label>Phone*:</label>
        <input type="tel" name="phone" placeholder=" xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span class="error"><?php echo $phone_err ?></span>
        <label>Preferred Meetup Frequency*:</label>
            <ul>
                <li><input type="radio" name="frequency" value="Once a week" <?php if (isset($_POST['frequency']) && $_POST['frequency'] == "Once a week") echo 'checked="checked"'; ?>> Once a week </li>
                <li><input type="radio" name="frequency" value="Every Other Week" <?php if (isset($_POST['frequency']) && $_POST['frequency'] == "Every Other Week") echo 'checked="checked"'; ?>> Every Other Week </li>
                <li><input type="radio" name="frequency" value="Once a Month" <?php if (isset($_POST['frequency']) && $_POST['frequency'] == "Once a Month") echo 'checked="checked"'; ?>> Once a Month </li>
                <li><input type="radio" name="frequency" value="Other" <?php if (isset($_POST['frequency']) && $_POST['frequency'] == "Other") echo 'checked="checked"'; ?>> Other - <em>Specify in comments</em> </li>
            </ul>
        <span class="error"><?php echo $frequency_err ?></span>
        <label>Preferred Day/Time of Meetup*:</label>
            <select name="schedule">
                <option value="" NULL <?php if (isset($_POST['schedule']) && $_POST['schedule'] == NULL) echo 'selected="unselected"'; ?>>Select One</option>
                <option value="Monday Evening" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Monday Evening') echo 'selected="selected"'; ?>>Monday Early Evening</option>
                <option value="Tuesday Evening" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Tuesday Evening') echo 'selected="selected"'; ?>>Tuesday Early Evening</option>
                <option value="Wednesday Evening" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Wednesday Evening') echo 'selected="selected"'; ?>>Wednesday Early Evening</option>
                <option value="Thursday Evening" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Thursday Evening') echo 'selected="selected"'; ?>>Thursday Early Evening</option>
                <option value="Friday Evening" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Friday Evening') echo 'selected="selected"'; ?>>Friday Early Evening</option>
                <option value="Saturday Brunch" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Saturday Brunch') echo 'selected="selected"'; ?>>Saturday Late Morning</option>
                <option value="Saturday Afternoon" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Saturday Afternoon') echo 'selected="selected"'; ?>>Saturday Afternoon</option>
                <option value="Sunday Brunch" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Sunday Brunch') echo 'selected="selected"'; ?>>Sunday Late Morning</option>
                <option value="Sunday Afternoon" <?php if (isset($_POST['schedule']) && $_POST['schedule'] == 'Sunday Afternoon') echo 'selected="selected"'; ?>>Sunday Afternoon</option>
            </select>
        <span class="error"><?php echo $schedule_err ?></span>
        <label>Genre Categories You'd Read*:</label>
            <ul class="columns">
                <li><input type="checkbox" name="genre[]" value="Action & Adventure" <?php if (isset($_POST['genre']) && in_array('Action & Adventure', $genre)) echo 'checked="checked"'; ?>> Action & Adventure </li>
                <li><input type="checkbox" name="genre[]" value="Colonization" <?php if (isset($_POST['genre']) && in_array('Colonization', $genre)) echo 'checked="checked"'; ?>> Colonization </li>
                <li><input type="checkbox" name="genre[]" value="Coming of Age" <?php if (isset($_POST['genre']) && in_array('Coming of Age', $genre)) echo 'checked="checked"'; ?>> Coming of Age </li>
                <li><input type="checkbox" name="genre[]" value="Contemporary" <?php if (isset($_POST['genre']) && in_array('Contemporary', $genre)) echo 'checked="checked"'; ?>> Contemporary </li>
                <li><input type="checkbox" name="genre[]" value="Crime & Mystery" <?php if (isset($_POST['genre']) && in_array('Crime & Mystery', $genre)) echo 'checked="checked"'; ?>> Crime & Mystery </li>
                <li><input type="checkbox" name="genre[]" value="Dark Fantasy" <?php if (isset($_POST['genre']) && in_array('Dark Fantasy', $genre)) echo 'checked="checked"'; ?>> Dark Fantasy </li>
                <li><input type="checkbox" name="genre[]" value="Dystopian" <?php if (isset($_POST['genre']) && in_array('Dystopian', $genre)) echo 'checked="checked"'; ?>> Dystopian </li>
                <li><input type="checkbox" name="genre[]" value="Epic/High Fantasy" <?php if (isset($_POST['genre']) && in_array('Epic/High Fantasy', $genre)) echo 'checked="checked"'; ?>> Epic/High Fantasy </li>
                <li><input type="checkbox" name="genre[]" value="Genetic Engineering" <?php if (isset($_POST['genre']) && in_array('Genetic Engineering', $genre)) echo 'checked="checked"'; ?>> Genetic Engineering </li>
                <li><input type="checkbox" name="genre[]" value="Humerous/Comedy" <?php if (isset($_POST['genre']) && in_array('Humerous/Comedy', $genre)) echo 'checked="checked"'; ?>> Humerous/Comedy </li>
                <li><input type="checkbox" name="genre[]" value="Mythical Creatures" <?php if (isset($_POST['genre']) && in_array('Mythical Creatures', $genre)) echo 'checked="checked"'; ?>> Mythical Creatures </li>
                <li><input type="checkbox" name="genre[]" value="Myths & Legends" <?php if (isset($_POST['genre']) && in_array('Myths & Legends', $genre)) echo 'checked="checked"'; ?>> Myths & Legends </li>
                <li><input type="checkbox" name="genre[]" value="New Adult & College" <?php if (isset($_POST['genre']) && in_array('New Adult & College', $genre)) echo 'checked="checked"'; ?>> New Adult & College </li>
                <li><input type="checkbox" name="genre[]" value="Paranormal & Urban" <?php if (isset($_POST['genre']) && in_array('Paranormal & Urban', $genre)) echo 'checked="checked"'; ?>> Paranormal & Urban </li>
                <li><input type="checkbox" name="genre[]" value="Post-Apocalyptic" <?php if (isset($_POST['genre']) && in_array('Post-Apocalyptic', $genre)) echo 'checked="checked"'; ?>> Post-Apocalyptic </li>
                <li><input type="checkbox" name="genre[]" value="Romance" <?php if (isset($_POST['genre']) && in_array('Romance', $genre)) echo 'checked="checked"'; ?>> Romance </li>
                <li><input type="checkbox" name="genre[]" value="Sociological" <?php if (isset($_POST['genre']) && in_array('Sociological', $genre)) echo 'checked="checked"'; ?>> Sociological </li>
                <li><input type="checkbox" name="genre[]" value="Slipstream" <?php if (isset($_POST['genre']) && in_array('Slipstream', $genre)) echo 'checked="checked"'; ?>> Slipstream </li>
                <li><input type="checkbox" name="genre[]" value="Space Exploration" <?php if (isset($_POST['genre']) && in_array('Space Exploration', $genre)) echo 'checked="checked"'; ?>> Space Exploration </li>
                <li><input type="checkbox" name="genre[]" value="Space Opera" <?php if (isset($_POST['genre']) && in_array('Space Opera', $genre)) echo 'checked="checked"'; ?>> Space Opera </li>
                <li><input type="checkbox" name="genre[]" value="Sword & Sorcery" <?php if (isset($_POST['genre']) && in_array('Sword & Sorcery', $genre)) echo 'checked="checked"'; ?>> Sword & Sorcery </li>
            </ul>
        <span class="error"><?php echo $genre_err ?></span>
        <label>Comments*:</label>
        <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);  ?></textarea>
        <span class="error"><?php echo $comments_err ?></span>
        <label>Privacy Policy*:</label>
            <ul>
                <li><input type="radio" name="privacy" value="agree" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == "agree") echo 'checked="checked"'; ?>> I Agree </li>
            </ul>
        <span class="error"><?php echo $privacy_err ?></span>
        <input type="submit" value="Send It">
        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];?>'" value="RESET"> 
    </fieldset>
</form>