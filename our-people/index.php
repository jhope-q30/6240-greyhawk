<?php

$page_name = 'Our people';
include('../includes/people.inc.php');

if( isset( $_GET['person'] ) ){

    $po = gf_list_person( $_GET['person'], $gf_people );

    if( !$po->name ){

        header( "Location: ./" );
        die();

    }

}

include('../includes/header.inc.php');

?>
<main>
<?php

if( isset( $_GET['person'] ) ): /* get person html */

?>

<section>
    <div class="gh-bkg-ltgrey">
        <div class="gh-container">
            <div class="gh-person-hero">
                <div class="gh-item">
                    <img src="<?php echo docroot . $po->image; ?>" alt="">
                </div>
                <div class="gh-item">
                    <div class="gh-person-info">
                        <h1><?php echo $po->name; ?></h1>
                        <p><?php echo $po->title; ?></p>

                        <?php

                            foreach( $po->social as $key => $value ):

?>

<a href="<?php echo $value; ?>" class="gh-social"><img src="<?php echo docroot; ?>img/<?php echo $key; ?>.svg"></a>

<?php

                            endforeach;

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gh-container">
        <div class="gh-panel-4">
            <div class="gh-person-content">
                <div class="gh-item">
                    <blockquote><?php echo $po->quote; ?></blockquote>
                </div>
                <div class="gh-item">

                    <?php echo $po->bio; ?>
                    
                    &nbsp;

                    <p>&lt;&nbsp;<a href="<?php echo docroot; ?>our-people/">Back to Our People</a></p>

                </div>
            </div>
        </div>
    </div>
</section>

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
        <div class="gh-people-column">
            <h2>Board of Directors</h2>
            <div class="gh_grid gh_grid-1-3 gh_grid-nogap">

                <?php echo gf_list_people( 'Board of Directors', $gf_people ); ?>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="gh-container">
        <div class="gh-panel-4">
            <div class="gh_grid gh_grid-1-2 gh_grid-nogap">
                <div class="gh-item">
                    <img src="<?php echo docroot; ?>img/temp-flair-img.jpg" alt="">
                </div>
                <div class="gh-item">
                    <img src="<?php echo docroot; ?>img/temp-flair-img.jpg" alt="">
                </div>
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