��    n      �  �   �      P	  @   Q	  2   �	  $   �	  z   �	     e
     x
  �   �
  f   r     �     �  !        *  .   J     y  ^   �  }   �  �   q  p   �  =   j     �  #   �     �     �                      L   *     w  
   �  '   �  [   �  $   $  �   I  6   �     
        *   8  F   c  �   �  P   +  �   |  y     �   �  p   (  [   �     �  @        C     ^  >   t  
   �  j   �  j   )     �  q   �       �   -     �  ;   �     +     ;  5   M  #   �     �     �     �     �     �     �  )        6     R  -   W  g   �  8   �     &  +   /     [  O   p  q   �     2  #   R  y   v  o   �  |   `  Q   �  �   /  7   �  P   �  +   O     {  B   �     �     �  �      �   �  �   �   !   !     7!  �   W!  �   �!  9   �"     �"  !   �"     �"     #     #     "#  (  5#  A   ^$  8   �$  !   �$  �   �$     �%  #   �%  �   �%  v   �&  %   2'     X'  *   o'  $   �'  1   �'  #   �'  n   (     �(  �   )  �   �)  E   *     Y*      l*     �*     �*     �*     �*     �*     �*  R   �*  "   7+     Z+  *   i+  _   �+  -   �+  �   ",  C   �,     -     &-  .   9-  J   h-  �   �-  m   G.  �   �.  �   S/  �   �/  x   p0  ]   �0     G1  K   S1     �1     �1  <   �1     2  {   +2  �   �2     03  �   G3     �3  �   �3     �4  B   �4     �4     5  ;   %5  "   a5     �5     �5     �5     �5  (   �5     �5  '   6     ,6     H6  7   O6  s   �6  B   �6     >7  4   K7     �7  Q   �7  m   �7  /   U8  0   �8  �   �8  x   A9     �9  W   ::  �   �:  6   1;  a   h;  /   �;  3   �;  X   .<     �<     �<    �<  �   �=  �   L>  $   �>  "   ?  �   +?  �   �?  A   _@     �@  !   �@     �@     �@     �@     �@     J   ;   U   C               6             5           F   )   @       k   >   ]   1         8   .   "       ^         l       c                    	   _      =       j   E   0           b      <         7   $       9       `       V                              2   (       -   e       !   \   &   3   L            ?                  Y   M   g   [       %   +   X   K   N   #   B   R   /                  i       D   ,   h      T      '       S       
   A           I   d      O   H   n   f      4      Q           :      W   Z         P       G      a   *   m    %s is a singleton class and you cannot create a second instance. %sHTTP Strict Transport Security%s is not enabled. .htaccess is currently not writable. .htaccess is not writable. Set 301 WordPress redirect, or set the .htaccess manually if you want to redirect in .htaccess. .htaccess redirect 301 redirect to https set:  A .htaccess redirect is faster. Really Simple SSL detects the redirect code that is most likely to work (95% of websites), but this is not 100%. Make sure you know how to regain access to your site if anything goes wrong! A definition of a siteurl or homeurl was detected in your wp-config.php, but the file is not writable. Activate SSL networkwide Activate SSL per site Activate networkwide to fix this. Almost ready to migrate to SSL! An SSL certificate was detected on your site.  Auto replace mixed content Because the $_SERVER["HTTPS"] variable is not set, your website may experience redirect loops. Because your server does not pass a variable with which Wordpress can detect SSL, Wordpress may create redirect loops on SSL. Because your site is behind a loadbalancer and is_ssl() returns false, you should add the following line of code to your wp-config.php. Before you enable this, make sure you know how to %1$sregain access%2$s to your site in case of a redirect loop. Below you can set the multisite options for Really Simple SSL Check again Check out Really Simple SSL Premium Choose your preferred setup Configuration Debug Detected setup Docs Documentation Don't forget to change your settings in Google Analytics en Webmaster tools. Enable 301 .htaccess redirect Enable SSL Enable WordPress 301 redirection to SSL Enable a .htaccess redirect or WordPress redirect in the settings to create a 301 redirect. Enable javascript redirection to ssl Enable this if you want to use the internal WordPress 301 redirect. Needed on NGINX servers, or if the .htaccess redirect cannot be used. Enable this option to get debug info in the debug tab. Failed activating SSL Go ahead, activate SSL! HTTP Strict Transport Security was enabled Http references in your .css and .js files: change any http:// into // Https redirect cannot be set in the .htaccess. Set the .htaccess redirect manually or enable WordPress redirect in the settings. If the setting 'do not edit htaccess' is enabled, you can't change this setting. If you want more options to have full control over your multisite network, you can %supgrade%s your license to a multisite license, or dismiss this message If you want to be sure you're ready to migrate to SSL, get Premium, which includes an extensive scan and premium support. If you want to customize the Really Simple SSL .htaccess, you need to prevent Really Simple SSL from rewriting it. Enabling this option will do that. Images, stylesheets or scripts from a domain without an ssl certificate: remove them or move to your own server. In most cases you need to leave this enabled, to prevent mixed content issues on your site. Instructions Lightweight plugin without any setup to make your site ssl proof Log for debugging purposes Major security issue! Mixed content fixer was successfully detected on the front-end More info. Networkwide activation does not check if a site has an SSL certificate. It just migrates all sites to SSL. No 301 redirect is set. Enable the WordPress 301 redirect in the settings to get a 301 permanent redirect. No SSL detected. No SSL was detected. If you do have an ssl certificate, try to reload this page over https by clicking this link: No selection was made On <a href='https://really-simple-ssl.com'>really-simple-ssl.com</a> you can find a lot of articles and documentation about installing this plugin, and installing SSL in general. Options saved. Or set your wp-config.php to writable and reload this page. Premium Support Really Simple SSL Really Simple SSL has a conflict with another plugin. Really Simple SSL multisite options Rogier Lankhorst SSL SSL activated! SSL is enabled on your site. SSL is not enabled yet SSL settings SSL was activated on your entire network. SSL was activated per site. Save Select to enable SSL networkwide or per site. Send me a copy of these lines if you have any issues. The log will be erased when debug is set to false Set your wp-config.php to writable and reload this page. Settings Settings to optimize your SSL configuration Show me this setting Some things can't be done automatically. Before you migrate, please check for:  Still having issues with mixed content? Check out Premium, which includes an extensive scan and premium support.  Stop editing the .htaccess file System detection encountered issues The 'force-deactivate.php' file has to be renamed to .txt. Otherwise your ssl can be deactived by anyone on the internet. The .htaccess file is not writable. Add these lines to your .htaccess manually, or set give writing permissions The .htaccess redirect rules that were selected by this plugin failed in the test. The following redirect rules were tested: The force http after leaving checkout in Woocommerce will create a redirect loop. The mixed content fixer is activated, but was not detected on the frontpage. Please follow these steps to check if the mixed content fixer is working. The plugin could not detect any possible redirect rule. This is a fallback you should only use if other redirection methods do not work. This option is enabled on the netwerk menu. To enable, %sget Premium%s  To view results here, enable the debug option in the settings tab. View settings page WordPress redirect You are running Really Simple SSL pro. A dedicated add-on for multisite has been released. If you want more options to have full control over your multisite network, you can ask for a discount code to %supgrade%s your license to a multisite license. You can also let the automatic scan of the pro version handle this for you, and get premium support and increased security with HSTS included. You can also let the automatic scan of the pro version handle this for you, and get premium support, increased security with HSTS and more! You can check your certificate on You may need to login in again. You run a Multisite installation with subfolders, which prevents this plugin from fixing your missing server variable in the wp-config.php. Your do not have a 301 redirect to https activated in the settings. For SEO purposes it is advisable to use 301 redirects. You can enable a 301 redirect in the settings. Your wp-config.php has to be edited, but is not writable. and https://www.really-simple-ssl.com https://www.rogierlankhorst.com networkwide per site reload over https. PO-Revision-Date: 2017-06-27 06:04:25+0000
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=2; plural=n != 1;
X-Generator: GlotPress/2.4.0-alpha
Language: nl
Project-Id-Version: Plugins - Really Simple SSL - Stable (latest release)
 %s is een singleton class, je kan geen tweede instantie aanmaken. %sHTTP Strict Transport Security%s is niet ingeschakeld. .htaccess is nu niet schrijfbaar. .htaccess heeft geen schrijfrechten. Stel een 301 WordPress redirect in, of stel handmatig een  .htaccess redirect in als je met .htaccess wil doorsturen. .htaccess redirect 301 redirect naar https ingesteld:  Een .htaccess redirect is sneller. Really Simple SSL detecteert automatisch de redirect code die meestal werkt (95% van websites) maar geeft geen 100% garantie. Zorg er voor dat je weet hoe je weer in je site kan komen mocht het misgaan! Een definitie van een siteurl of homeurl werd gedetecteerd in je wp-config.php, maar het bestand is niet schrijfbaar.  SSL activeren over het gehele netwerk SSL activeren per site Activeer netwerkbreed om dit op te lossen. Bijna klaar om te migreren naar SSL! Een SSL certificaat is gedetecteerd op jouw site. Vervang gemixte content automatisch Omdat de $_SERVER["HTTPS"] variable niet is ingesteld, kan jouw website last hebben van doorverwijzingslussen. Omdat je server niet de variabele doorgeeft waarmee Wordpress SSL kan detecteren, kan Wordpress een redirect loop veroorzaken.  Omdat je site achter een loadbalancer zit, and is_ssl() false teruggeeft, moet je de volgende code toevoegen aan je wp-config.php. Zorg er voor dat je weet hoe je %1$stoegang tot je site kan herstellen%2$s in geval van een redirect loop voordat je deze optie inschakelt. Hieronder kan je de multisite opties voor Really Simple SSL instellen Controleer opnieuw bekijk Really Simple SSL Premium Kies de gewenste setup Configuratie Debug Gedetecteerde configuratie Docs Documentatie Vergeet niet je instellingen in Google Analytics en Webmaster tools aan te passen. Schakel 301 .htaccess redirect in. Schakel SSL in Schakel WordPress 301 redirect naar SSL in Schakel een .htaccess of WordPress redirect in de instellingen om een 301 redirect te creëren. Schakel javascript doorverwijzing naar ssl in Schakel deze optie in als je de interne WordPress 301 redirect wil gebruiken. Dit is nodig voor NGINX servers, of als de .htaccess redirect niet gebruikt kan worden. Schakel deze optie in om debug informatie te zien in het debug tab. Activeren van SSL mislukt Ok, SSL activeren! HTTP Strict Transport Security is ingeschakeld Http verwijzingen in je .css en .js bestanden. Verander elke http:// in // Https redirect kan niet ingesteld worden in de .htaccess. Stel de .htaccess redirect handmatig in of schakel WordPress redirect in de instellingen. Als de instellingen 'wijzig het .htaccess bestand niet' is ingeschakeld kan je deze instelling niet wijzigen. Als je meer controle over je multisite netwerk wilt hebben, kan je je licentie %supgraden%s naar een multisite licentie, anders kan je deze melding sluiten.  Als je er zeker van wilt zijn dat je klaar bent om te migreren naar SSL, kijk ook eens naar Premium, met uitgebreide scan en premium support. Als je de Really Simple SSL .htaccess wil aanpassen moet je voorkomen dat Really Simple SSL deze kan herschrijven. Deze optie zorgt daar voor. Afbeeldingen, stylesheets of scriptf van een domein zonder SSL certificaat: verwijder of verplaats naar je eigen server. In de meeste gevallen moet je dit ingeschakeld laten om mixed content problemen te voorkomen. Instructies Lichtgewicht plugin die jouw site ssl proof maakt zonder iets in te stellen Log voor debugging doeleinden Belangrijk veiligheidsprobleem  Gemixte inhoud fixer is succesvol gedetecteerd op de website Meer informatie. Netwerkwide activeren controleert niet of een site een SSL certificaat heeft. Alle sites worden gewoon naar SSL gemigreerd. Geen 301 redirect ingesteld. Schakel de WordPress 301 redirect in op de configuratiepagina om een permanente 301 redirect in te stellen. Geen SSL gedetecteerd. Er is geen SSL gedetecteerd. Als je wel een SSL certificaat hebt, probeer deze pagina dan te herladen over SSL door op deze link te klikken: Geen keuze gemaakt Op <a href='https://really-simple-ssl.com'>really-simple-ssl.com</a> kun je veel artikelen vinden, documentatie over het installeren van deze plugin en het installeren van SSL in het algemeen. Opties opgeslagen Of stel je wp-config.php in als schrijfbaar, en herlaad de pagina. Premium ondersteuning Really Simple SSL Really Simple SSL heeft een conflict met een andere plugin. Really Simple SSL multisite opties Rogier Lankhorst SSL SSL geactiveerd! SSL is ingeschakeld op je site. SSL is nog niet ingeschakeld op je site. SSL instellingen SSL is geactiveerd op je gehele netwerk SSL is per site geactiveerd Bewaar Selecteer om SSL netwerkbreed of per site te activeren  Zend mij een kopie van deze regels als je problemen hebt. Deze log zal worden verwijderd als debug is uitgeschakeld Je wp-config.php instellen als schrijfbaar, en de pagina herladen. Instellingen Instellingen om je SSL configuratie te optimaliseren Toon deze instelling Sommige dingen kunnen niet automatisch. Voordat je migreert, controleer a.u.b op: Nog steeds problemen met mixed content? Bekijk dan eens Premium, met een uitgebreide scan en premium support. Stop met het bewerken van het .htaccess bestand De systeem controle heeft problemen aangetroffen Het 'force-deactivate.php' bestand moet naar .txt hernoemd worden. Anders kan jouw ssl worden uitgeschakeld door iedereen op het internet. Het .htaccess bestand is niet schrijfbaar. Voeg deze regels handmatig aan je .htaccess toe of schakel schrijfrechten in. De .htaccess redirect regels die werden geselecteerd door de plugin werkten niet in de test. De volgende redirects zijn getest: De forceer http na het afrekenen in Woocommerce zal een doorverwijzingslus veroorzaken. De mixed content fixer is geactiveerd, maar werd niet gedetecteerd op je website. Volge de volgende stappen om te controleren of de mixed content fixer werkt. De plugin kon geen mogelijke redirect regel detecteren Dit is een fallback en moet moet alleen gebruikt worden als andere redirect methoden niet werken. Deze optie is ingeschakeld in het netwerk menu. Om in te schakelen, %sschaf de premium versie aan%s Schakel de debug optie in op het instellingen tabblad om hier de resultaten te bekijken. Bekijk instellingen pagina WordPress redirect Je gebruikt nu Really Simple SSL pro. Er is een gespecialiseerde add-on for multisite. Als je meer opties wilt om de volledige controle over je multisite te hebben, kan je vragen om de kortingscode om je licentie te %supgraden%s naar een multisite licentie. Je kunt dit ook laten controleren door de automatische scan van de pro versie, waarbij je ook Premium support en extra beveiliging met HSTS krijgt.  Je kan dit ook door de automatische scan in de pro versie laten regelen, waarbij je ook premium support, verbeterde security door HSTS en meer krijgt! Je kan je certificaat controleren op Je moet wellicht opnieuw inloggen. Je hebt een Multisite installatie met submappen, die voorkomt dat deze plugin de missende server variabele in wp-config.php kan bijwerken. Je hebt geen 301 redirect naar https ingeschakeld. Voor SEO doeleinden adviseren wij om 301 redirects te gebruiken. Je kan 301 redirects inschakelen in de instellingen. Je wp-config.php moet gewijzigd worden, maar is niet schrijfbaar. en https://www.really-simple-ssl.com https://www.rogierlankhorst.com netwerkbreed per site herlaad via https. 