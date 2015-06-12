<?php
/**
 * Template Name: contact us
 */

get_header(); ?>
<div id="c_form">
<h2 style="font-family:'Helvetica Neue','Helvetica',sans-serif">Contact Us</h2>
<?php
if ( isset($si_contact_form) ) {
 echo $si_contact_form->si_contact_form_short_code( array( 'form' => '1' ) );
}

?>
</div>
<br/>
<br/><br/>
<div id="mainwrapper2">
<div id="one_contact_us_person">
<img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/admin.jpg" />
<div id="one_details_">
<h2>Lahiru Karunaratne</h2>
<p><i class="phone1 fa fa-phone fa-3x"></i>&nbsp;&nbsp;071-9093926</p>
<p><i class="phone2 fa fa-phone fa-3x"></i>&nbsp;&nbsp;077-7740990 </p>
<p><i class="phone3 fa fa-mail-reply-all fa-2x"></i> &nbsp;&nbsp;&nbsp;<a href="mailto:admin@youngcrew.lk">admin@youngcrew.lk</a></p>
</div>
</div>
<div id="one_contact_us_person">
<img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/b0115sp.jpg"/>
<div id="one_details_">
<h2>Shiran Mannakkara</h2>
<p><i class="phone4 fa fa-phone fa-3x"></i>&nbsp;&nbsp;071-9335984</p>
</div>
</div>
<div id="middle_delatils" class="one_person_details">
<a href="http://www.youngcrew.lk"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/00.png"> youngcrew.lk</a> <br/><br/>
<a href="mailto:admin@youngcrew.lk" id="xxx_xxx"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/gmail-login-xxl.png"> admin@youngcrew.lk</a> <br/>
<a href="http://www.facebook.com/youngcrew.lk"><img class="ssssdes" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/f1.png"> facebook.com/youngcrew.lk</a> <br/>
<a href="http://www.twitter.com/youngcrewlk"><img class="ssssdes" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/t1.png"> twitter.com/youngcrewlk</a><br/>
</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>