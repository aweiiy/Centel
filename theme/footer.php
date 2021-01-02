<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost || $pageBlog && !$footerHideBlog || $pagePost && !$footerHidePost) { ?>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-628c">
  <div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-small-text u-text u-text-variant u-text-1">CenTel 2020</p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Browse Free Online Courses">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>CenTel</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="CenTel">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="CenTel" class="u-body">
    <section class="u-align-left u-clearfix u-image u-section-1" id="carousel_a5c1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/5cde63bc-95f9-4524-993e-e0c7d856abf8_200x200.png" alt="" class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1" data-image-width="200" data-image-height="200">
        <h1 class="u-custom-font u-font-ubuntu u-text u-text-body-alt-color u-text-1">Klientų aptarnavimas</h1>
        <p class="u-text u-text-body-alt-color u-text-2">“Patenkintas klientas yra visų laikų geriausia verslo strategija”<br>Michael LeBoeuf<br>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-5-light-1 u-section-2" id="carousel_5322">
      <div class="u-clearfix u-sheet u-valign-bottom-lg u-valign-bottom-xl u-sheet-1">
        <div class="u-container-style u-expanded-width u-gradient u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
        </div>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-xs u-container-style u-layout-cell u-left-cell u-size-30-xl u-size-32-lg u-size-32-md u-size-32-sm u-size-32-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-valign-top-sm u-container-layout-2">
                  <img class="u-expand-resize u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-1" src="images/billionphotos-1896073-min.png">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-28-lg u-size-28-md u-size-28-sm u-size-28-xs u-size-30-xl u-white u-layout-cell-2">
                <div class="u-container-layout u-container-layout-3">
                  <h1 class="u-custom-font u-font-montserrat u-text u-text-palette-5-dark-3 u-text-1">
                    <span style="font-weight: 700;">Apie mus</span>
                    <br>
                  </h1>
                  <p class="u-text u-text-2">UAB "CenTel" yra kontaktų centras (skambučių centras),&nbsp;įsteigta 2020 m. Šiuo metu turime 4 darbuotojus, kurie stengiasi prisidėti prie geresnio Jūsų klientų aptarnavimo, naujų&nbsp;pardavimų, apklausų,&nbsp;efektyvesnių vidinių procesų.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-3" id="sec-4a4b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-repeater u-list-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-icon-circle u-icon-1"><img src="images/animation_02_01_150.png" alt=""></span>
              <h3 class="u-text u-text-1">Pardavimai telefonu</h3>
              <p class="u-text u-text-2">Klientų paieška<br>Pardavimo vizitų organizavimas
              </p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-icon-2"><img src="images/34839875-0.png" alt=""></span>
              <h3 class="u-text u-text-3">Klientų aptarnavimas</h3>
              <p class="u-text u-text-4">Pagalba</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-icon-3"><img src="images/animation_03_01_150.png" alt=""></span>
              <h3 class="u-text u-text-5">Klientų apklausos ir lojalumas</h3>
              <p class="u-text u-text-6">Lojalumo skambučiai<br>Apklausos internetu
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-4" id="sec-6879">
      <div class="u-align-center u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-palette-4-dark-1 u-text-1">Susisiekite</h2>
        <a href="skype:Echo123" class="u-btn u-btn-round u-button-style u-palette-3-light-1 u-radius-24 u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""><span class="u-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" style="color: currentcolor; width: 1em; height: 1em;"><path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366.936.495 2.004.777 3.139.777 4.949 0 8.118-5.133 5.947-9.453zm-11.213 5.332c-2.342 0-4.63-.565-5.984-2.499-2.018-2.854.643-4.282 1.949-3.194 1.09.919.748 3.142 3.949 3.142 1.411 0 3.153-.602 3.153-2.001 0-2.815-6.245-1.483-8.728-4.552-.912-1.124-1.084-3.107.036-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.421 1.202 8.75.827 8.75 5.603-.008 3.357-3.247 4.875-6.703 4.875z" fill="currentColor"></path></svg><img></span>&nbsp;Skype
        </a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-628c"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">CenTel 2020</p>
      </div></footer>
  </body>
</html>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
