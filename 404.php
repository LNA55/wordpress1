<?php get_header(); ?>
<br><br>
<div class="container">
          <div style="font-size:60px; text-align:center; color:#F5718F">Ouuuuuuuups...<br><p style="font-size:42px;">Cette page n'existe pas (ou plus)</p></div>
          </br>
            <p style="font-size:20px;">Cela peut être du à :</p>
              <ul>
                  <li>une url mal tapée (ça arrive à des gens très bien)</li>
                  <li>une url obsolète, une page que nous aurions volontairement supprimée</li>
              </ul>
            <p> Merci de retourner sur la <a href="<?php echo home_url(); ?>">page d'accueil</a> pour continuer votre visite sur notre site</p>
            </br>
            <!--
            <script>
                var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
            </script>
            <script src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
          -->
</div>


<?php get_footer(); ?>