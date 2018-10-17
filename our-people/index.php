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
                        <h1>
                            
                            <?php echo $po->name; ?>

                            <?php if( $po->certification != ""): ?>

                            <small><?php echo $po->certification; ?></small>

                            <?php endif; ?>
                    
                        </h1>
                        <p><?php echo $po->title; ?></p>
                        
                        <?php if( $po->phone ): ?>

                        <?php if( !is_array( $po->phone ) ): ?>

                        <p><small>Direct: <?php echo $po->phone; ?></small></p>

                        <?php else: ?>

                        <p><small>

                        <?php
                        
                            foreach( $po->phone as $k => $v ){

                                echo $k . ': ' . $v . '<br>';

                            }

                        ?>

                        </small></p>

                        <?php endif; ?>

                        <?php endif; ?>

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

                <?php if( $po->quote != "" ): ?>

                <div class="gh-item">
                    <blockquote><?php echo $po->quote; ?></blockquote>
                </div>
                <div class="gh-item">

                    <?php echo $po->bio; ?>
                    
                    &nbsp;

                    <p>&lt;&nbsp;<a href="<?php echo docroot; ?>our-people/">Back to Our People</a></p>

                </div>

                <?php else: ?>

                <div class="gh-person-single gh-cspan-2 text-left">

                <?php echo $po->bio; ?>

                &nbsp;

                <p>&lt;&nbsp;<a href="<?php echo docroot; ?>our-people/">Back to Our People</a></p>

                </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php

else: /* show our people html */

?>
<section>
    <div class="gh-hero">
        <img src="<?php echo docroot; ?>img/people/Grayhawk_Bios-Group_2U1A1280.jpg" alt="">
        <div class="gh-caption">
            <div class="gh-caption-container">
                <h1>Our People</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="gh-container">
        <div class="gh-people-column">
            <div class="gh_grid">
                <h2>Our Team</h2>
            </div>
            <div class="gh_grid gh_grid-1-3">

                <?php echo gf_list_people( 'Our Team', $gf_people ); ?>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="gh-container">
        <div class="gh-panel-4">
            <div class="gh_grid gh_grid-1-2 gh_grid-nogap">
                <div class="gh-item">
                    <img src="<?php echo docroot; ?>img/people/Grayhawk_Bios-Group_960x640-LEFT_FA.jpg" alt="">
                </div>
                <div class="gh-item">
                    <img src="<?php echo docroot; ?>img/people/Grayhawk_Bios-Group_960x640-RIGHT_FA.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="gh-container">
        <div class="gh-people-column">
            <div class="gh_grid">
                <h2>Board of Directors</h2>
            </div>
            <div class="gh_grid gh_grid-1-3">

                <?php echo gf_list_people( 'Board of Directors', $gf_people ); ?>

            </div>
        </div>
    </div>
</section>

<?php endif; ?>
</main>

<?php include('../includes/footer.inc.php'); ?>