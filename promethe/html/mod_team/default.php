<?php
defined('_JEXEC') or die('Restricted access');
echo '<div class="mod_team">';
$p = 0;
for ($i = 0; $i <= 20; $i++) {
    $name = $params->get('name' . $i);
    $lastname = $params->get('lastname' . $i);
    $image = trim($params->get('img' . $i));
    $person_description = $params->get('person_description' . $i);
    $person_position = $params->get('person_position' . $i);
    $fblink = $params->get('fblink' . $i);
    $link = $params->get('link' . $i);
    $li_link = $params->get('li_link' . $i);
    $mobile = $params->get('mobile' . $i);
    $email = $params->get('email' . $i);

//
    $itemid = JRequest::getInt('Itemid');
    if (!empty($image)) {
        $image = GoodWebSiteHelper::getImageInSize('team', $image);
        ?>


        <div class="personal_item ">
            <div class="personal_item_in">
                <div class="member-img">
                    <div class="member_img_in">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name . " " . $lastname; ?>"/>
                    </div>
                    <div class="team-info">
                        <div class="member-name"> 
                            <?php if ($link) { ?>
                                <a href="<?php echo $link ?>">
                                    <span class="person_name"><?php echo $name; ?></span>
                                    <span class="person_lastname">
                                        <?php echo $lastname; ?>
                                    </span>
                                </a>
                            <?php } else { ?>
                                <span class="person_name">
                                    <?php echo $name; ?>

                                </span>
                                <span class="person_lastname">
                                    <?php echo $lastname; ?>
                                </span>

                            <?php } ?>
                        </div>  
                        <div class="member-pos"><?php echo $person_position; ?></div>

                        <?php if ($person_description) { ?>
                            <div class="member-desc">
                                <p> <?php echo $person_description; ?></p>
                            </div>
                        <?php } ?>


                    </div>
                    <div class="team_overlay"></div>
                </div>
            </div>
            <div class="team_popup_overlay"> 
                <div class="tm_arrows">
                    <div class="tm_prev">
                        <span></span>
                    </div>
                    <div class="tm_next">
                        <span></span>
                    </div>
                    <div class="cls"></div>
                </div>

            </div>
            <div class="tm_popup_holder">
                <div class="tm_popup_box">
                    <div class="pop_img_holder">
                        <img src="<?php echo $image; ?>"/>
                    </div>
                    <div class="team_info_popup">
                        <div class="member-name">
                            <?php if ($link) { ?>
                                <a href="<?php echo $link ?>">
                                    <span class="person_name"><?php echo $name; ?></span>
                                    <span class="person_lastname">
                                        <?php echo $lastname; ?>
                                    </span>
                                </a>
                            <?php } else { ?>
                                <span class="person_name">
                                    <?php echo $name; ?>

                                </span>
                                <span class="person_lastname">
                                    <?php echo $lastname; ?>
                                </span>

                            <?php } ?>
                        </div>
                        <div class="member-pos"><?php echo $person_position; ?></div>

                    </div>
                    <?php if ($person_description) { ?>
                        <div class="member-desc">
                            <p> <?php echo $person_description; ?></p>
                        </div>
                    <?php } ?>
                    
                     <div class="tm_arrows_copy">
                    <div class="tm_prev">
                        <span></span>
                    </div>
                    <div class="tm_next">
                        <span></span>
                    </div>
                    <div class="cls"></div>
                </div>


                    <!--arrows were here-->
                    <div class="cls"></div>
                </div>
                <div class="cls"></div>
                <button class="popup_close">
                    <span></span>
                </button>
            </div>
        </div>
        <?php
        $p++;
        if ($p == 4) {

            $p = 0;
        }
    }
}
echo '<div class="clr"></div></div>';
