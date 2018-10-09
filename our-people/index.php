<?php

$page_name = 'Our people';
include('../includes/header.inc.php');
include('../includes/people.inc.php');

?>
<main>
<?php

if( isset( $_GET['person'] ) ): /* show person html */

    gf_list_person( $_GET['person'], $gf_people );

?>
<?php

else: /* show our people html */

?>
<section>
    <div class="gh-hero gh-hero-full">
        <span class="gh-caption">
            <h1>A headline about our people</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </span>
    </div>
</section>
<section>
    <div class="gh-container">
        <div class="gh_grid gh_grid-1-2 gh_grid-nogap">
            <div class="gh-item">
                <img src="<?php echo docroot; ?>img/temp-flair-img.jpg" alt="">
            </div>
            <div class="gh-item">
                <img src="<?php echo docroot; ?>img/temp-flair-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="gh-container">
        <div class="gh-people-column">
            <h2>Our Team</h2>
            <div class="gh_grid gh_grid-1-3 gh_grid-nogap">

                <?php echo gf_list_people( 'Our Team', $gf_people ); ?>

            </div>
        </div>
    </div>
</section>

<?php endif; ?>
</main>

<?php include('../includes/footer.inc.php'); ?>