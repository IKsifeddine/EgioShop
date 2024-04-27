<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d58bac4e15dc8db65c759849550b9aab */
class __TwigTemplate_44efd3cdb3f608779423a543d1ae9aff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/EgioShop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/EgioShop/img/app_icon.png\" />

<title>Produits • EgioShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '4dfc6d85bd98f2d5081378a908ab6371';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'aae7f8316b385cb003455bb48233dad8';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/modules/manage?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8';
    var admin_notification_get_link = '/EgioShop/admin2619qx9metmlrddx9sb/index.php/common/notifications?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8';
    var admin_notification_push_link = adminNotificationPushLink = '/EgioShop/admin2619qx9metmlrddx9sb/index.php/common/notifications/ack?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-Ba";
        // line 40
        echo "NJ8';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/EgioShop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/EgioShop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/EgioShop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/EgioShop\\/admin2619qx9metmlrddx9sb\\/\";
var baseDir = \"\\/EgioShop\\/\";
var changeFormLanguageUrl = \"\\/EgioShop\\/admin2619qx9metmlrddx9sb\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[";
        // line 67
        echo "\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/js/admin.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/js/tools.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/admin2619qx9metmlrddx9sb/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/EgioShop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/EgioShop/admin2619qx9metmlrddx9sb/index.php/common/notifications?_token=89nfJw";
        // line 92
        echo "d6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php\"  data-token=\"89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminDashboard&amp;token=392e1b8349ab4be7ed2c5a894004d555\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders?token=27b853bdf78c47748c27b52498b89558\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=faa0ec3e1aac2f0a2146c8905b03de21\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/modules/manage?token=27b853bdf78c47748c27b52498b89558\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=df10f81ebf9db4938f";
        // line 136
        echo "c05c7759791df7\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/products-v2/create?token=27b853bdf78c47748c27b52498b89558\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/categories/new?token=27b853bdf78c47748c27b52498b89558\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"131\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2/20/edit?-BaNJ8\"
        data-post-link=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminQuickAccesses&token=68e19341393ced73b8fedb4c2f4847f7\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminQuickAccesses&token=68e19341393ced73b8fedb4c2f4847f7\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/EgioShop/admin2619qx9metml";
        // line 175
        echo "rddx9sb/index.php?controller=AdminSearch&amp;token=dd4ebb03efe5a708d9a3a011bd1691d3\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" da";
        // line 192
        echo "ta-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders?token=27b853bdf78c47748c27b52498b89558\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=faa0ec3e1aac2f0a2146c8905b03de21\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/modules/manage?token=27b853bdf78c47748c27b52498b89558\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=df10f81ebf9db4938fc05c7759791df7\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction";
        // line 227
        echo "</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/products-v2/create?token=27b853bdf78c47748c27b52498b89558\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/categories/new?token=27b853bdf78c47748c27b52498b89558\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"121\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2/20/edit?-BaNJ8\"
      data-post-link=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminQuickAccesses&token=68e19341393ced73b8fedb4c2f4847f7\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminQuickAccesses&token=68e19341393ced73b8fedb4c2f4847f7\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/EgioShop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"he";
        // line 272
        echo "ader-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:8888/EgioShop/";
        // line 324
        echo "admin2619qx9metmlrddx9sb/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=aadcfc89298695f88dc3fecee9ae2da5\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=";
        // line 371
        echo "\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/EgioShop/img/pr/default.jpg\" alt=\"Sifeddine\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Sifeddine</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/employees/1/edit?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminLogin&amp;logout=1&amp;token=272d5d82ca13e4ae6da1cf27738e946b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/employees/toggle-navigation?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminDashboard&amp;token=392e1b8349ab4be7ed2c5a894004d555\"></a>
          <span id=\"shop_version\" class=\"he";
        // line 412
        echo "ader-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminDashboard&amp;token=392e1b8349ab4be7ed2c5a894004d555\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                        ";
        // line 454
        echo "        <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders/invoices/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders/credit-slips/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/orders/delivery-slips/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                ";
        // line 484
        echo "            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCarts&amp;token=aadcfc89298695f88dc3fecee9ae2da5\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/products?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/products?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Produits
                                ";
        // line 512
        echo "</a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/categories?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/monitoring/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminAttributesGroups&amp;token=b067a3e5da90078c6ed3855580705487\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
  ";
        // line 543
        echo "                              <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/catalog/brands/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/attachments/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCartRules&amp;token=df10f81ebf9db4938fc05c7759791df7\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/stocks/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                           ";
        // line 572
        echo "             </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/customers/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/customers/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/addresses/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Adresses
                                </a>
                   ";
        // line 602
        echo "           </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCustomerThreads&amp;token=4b71b42c40a5481449ab8935567391a9\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCustomerThreads&amp;token=4b71b42c40a5481449ab8935567391a9\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
    ";
        // line 633
        echo "                            <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/sell/customer-service/order-messages/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminReturn&amp;token=6982fb68fea9842dc142b06c994a87a8\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminStats&amp;token=faa0ec3e1aac2f0a2146c8905b03de21\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
             ";
        // line 666
        echo "       
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/modules/manage?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/modules/manage?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"";
        // line 701
        echo "link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/design/themes/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/design/themes/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/design/mail_theme/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
        ";
        // line 730
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/design/cms-pages/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/design/modules/positions/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminImages&amp;token=82fc4af04feadb5dad94806457713306\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/modules/link-widget/list?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Liste de liens
                  ";
        // line 757
        echo "              </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCarriers&amp;token=05693c54bfef25feba1b41af7e21163d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminCarriers&amp;token=05693c54bfef25feba1b41af7e21163d\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                ";
        // line 789
        echo "                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/shipping/preferences/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/payment/payment_methods?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/payment/payment_methods?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
    ";
        // line 820
        echo "                                                        
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/payment/preferences?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/international/localization/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/international/localization/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Loc";
        // line 847
        echo "alisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/international/zones/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/international/taxes/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/improve/international/translations/settings?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                 ";
        // line 881
        echo "   
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/preferences/preferences?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/preferences/preferences?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                   ";
        // line 914
        echo "             <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/order-preferences/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/product-preferences/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/customer-preferences/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/contacts/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
            ";
        // line 943
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/shop/seo-urls/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminSearchConf&amp;token=22c295ba6fd303f3b588e1f34cd8bc7d\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/system-information/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                ";
        // line 972
        echo "            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/system-information/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/performance/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/administration/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ";
        // line 1002
        echo "         <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/emails/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/import/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/employees/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/sql-requests/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Base de données
                                </a>
                              </li>

                  ";
        // line 1031
        echo "                                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/logs/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/webservice-keys/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/feature-flags/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
              ";
        // line 1058
        echo "                <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/EgioShop/admin2619qx9metmlrddx9sb/index.php/configure/advanced/security/?_token=89nfJwd6ASUmZcurHq6_bwtawomoyHN8m2KFd-BaNJ8\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1084
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost:8888/EgioShop/admin2619qx9metmlrddx9sb/index.php?controller=AdminDashboard&amp;token=392e1b8349ab4be7ed2c5a894004d555\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1118
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1084
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__d58bac4e15dc8db65c759849550b9aab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1281 => 1118,  1260 => 1084,  1249 => 102,  1240 => 1118,  1200 => 1084,  1172 => 1058,  1143 => 1031,  1112 => 1002,  1080 => 972,  1049 => 943,  1018 => 914,  983 => 881,  947 => 847,  918 => 820,  885 => 789,  851 => 757,  822 => 730,  791 => 701,  754 => 666,  719 => 633,  686 => 602,  654 => 572,  623 => 543,  590 => 512,  560 => 484,  528 => 454,  484 => 412,  441 => 371,  392 => 324,  338 => 272,  291 => 227,  254 => 192,  235 => 175,  194 => 136,  155 => 102,  143 => 92,  116 => 67,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d58bac4e15dc8db65c759849550b9aab", "");
    }
}
