<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- BACK TOP TOP BUTTON -->
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-caret-up"></i></button>
</div>

<!-- BACK TO TOP BUTTON -->

<!-- FOOTER -->
<footer id="t3-footer" style = "color: white; background-color: rgb(7, 113, 221);" class="wrap t3-footer">

	<?php if ($this->checkSpotlight('footer-sl', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6')) : ?>
		<!-- FOOTER SPOTLIGHT -->
		<div class="container hidden-xs">
			<?php $this->spotlight('footer-sl', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
		</div>
		<!-- //FOOTER SPOTLIGHT -->
	<?php endif ?>

	<!-- <section class="t3-copyright"> -->
    <section>
		<div class="container">
			<div class="row">
				<div class="<?php echo $this->getParam('t3-rmvlogo', 1) ? 'col-md-8' : 'col-md-12' ?> copyright <?php $this->_c('footer') ?>">
					<jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
          <small>
              <p id="footer-copyright" style="margin-top: 14px;"></p>
              <a id="footer-legal-warning"style="color:white;" href="http://rumarcedeira.com/es/9-pages/298-aviso-legal"></a>
              <div class="row" style="padding-top:1%;">
                  <div id="footer-phone" class="col-md-4"><img style="height:28px;" src="/templates/purity_iii/images/ico/icon-phone.png"/>Tel. / Fax: +34 918 49 01 04</div>       
                  <div class="col-md-8" style="margin-top:-7px;">
					<img style="height:40px;" src="/templates/purity_iii/images/ico/icon-mail.png"/> 
					<a style="color:white;" href="mailto:rumarcedeira@rumarcedeira.com">rumarcedeira@rumarcedeira.com</a>
				  </div>
              </div>     
          </small>
				</div>
			</div>
		</div>
	</section>

</footer>
<!-- //FOOTER -->

<script type="text/javascript">
(function($) {
	// Back to top
	$('#back-to-top').on('click', function(){
		$("html, body").animate({scrollTop: 0}, 500);
		return false;
	});
	var url = window.location.pathname;
		var segments = url.split( '/' );
		var language = segments[1];
		console.log(language);
		if(language == 'es') {
			console.log("español");
			$('#footer-copyright').html('Copyright © 2016 RUMAR. Todos los derechos reservados.');
			$('#footer-legal-warning').html('Aviso Legal');
			$('#footer-legal-warning').attr('href', 'http://rumarcedeira.com/es/aviso-legal');
			$('#footer-legal-warning')
		} else {
			console.log("english");
			$('#footer-copyright').html('Copyright © 2016 RUMAR. All right reserved.');
			$('#footer-legal-warning').html('Legal Warning');
			$('#footer-legal-warning').attr('href', 'http://rumarcedeira.com/en/legal-warning');
		}

    $(window).load(function(){
        // hide button to top if the document height not greater than window height*2;using window load for more accurate calculate.    
        if ((parseInt($(window).height())*2)>(parseInt($(document).height()))) {
            $('#back-to-top').hide();
        } 
    });
})(jQuery);
</script>
