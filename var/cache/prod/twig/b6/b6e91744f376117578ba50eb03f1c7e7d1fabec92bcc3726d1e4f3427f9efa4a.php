<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__288be1288cfbfda9b6972ebd92ea60213bb4dbdb2d147966c885327da46f894c */
class __TwigTemplate_f1672850a72b80416a8b24658bd7d62e09f44cb3c13d761e62b8a53cd4ae1ee9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"vn\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/may-cay/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/may-cay/img/app_icon.png\" />

<title>Vị trí • Cửa hàng phụ tùng máy công nghiệp</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesPositions';
    var iso_user = 'vn';
    var lang_is_rtl = '0';
    var full_language_code = 'vi-vn';
    var full_cldr_language_code = 'vi-VN';
    var country_iso_code = 'VN';
    var _PS_VERSION_ = '1.7.6.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Một đơn hàng mới đã được đặt trên cửa hàng của bạn.';
    var order_number_msg = 'Số đơn hàng: ';
    var total_msg = 'Tổng cộng: ';
    var from_msg = 'Từ: ';
    var see_order_msg = 'Xem đơn hàng này';
    var new_customer_msg = 'Một khách hàng mới đăng ký vào cửa hàng của bạn.';
    var customer_name_msg = 'Tên khách hàng: ';
    var new_msg = 'Một tin nhắn mới đã được đăng trên cửa hàng của bạn.';
    var see_msg = 'Đọc tin nhắn này';
    var token = 'd7cbbee24fe5dbdbcecfb50e7b2e2b9d';
    var token_admin_orders = 'd228aa222dafefe8d2b5ef440883b99a';
    var token_admin_customers = 'be19505447a1b14ae39c6d9d513448c9';
    var token_admin_customer_threads = '88846d8f3e82c4847b89176bb53295a5';
    var currentIndex = 'index.php?controller=AdminModulesPositions';
    var employee_token = '6d22419afbb6a02a402456ba8f99a03b';
    var choose_language_translate = 'Chọn ngôn ngữ';
    var default_language = '1';
    var admin_modules_link = '/may-cay/admin_sc/index.php/improve/modules/catalog/recommended?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0';
    var admin_notification_get_link = '/may-cay/admin_sc/index.php/common/notifications?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0';
    var admin_notification_push_link = '/may-cay/admin_sc/index.php/common/notifications/ack?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0';
    var tab_modules_list = '';
    var update_success_msg = 'Cập nhật thành công';
    var errorLogin = 'PrestaShop đã không thể đăng nhập vào Addons. Vui lòng kiểm tra thông tin của bạn và kết nối Internet của bạn.';
    var search_product_msg = 'Tìm kiếm một sản phẩm';
  </script>

      <link href=\"/may-cay/admin_sc/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/admin_sc/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/may-cay\\/admin_sc\\/\";
var baseDir = \"\\/may-cay\\/\";
var changeFormLanguageUrl = \"\\/may-cay\\/admin_sc\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"\\u0110\\u1ed3ng Vi\\u1ec7t Nam\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"VND\",\"currencySymbol\":\"\\u20ab\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/may-cay/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/admin.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/tools.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/may-cay/admin_sc/index.php?controller=AdminAjaxFaviconBO&amp;token=4730c3d16e18de42080feed21c5a80f6\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/may-cay\\/admin_sc\\/index.php?controller=AdminGamification&token=ae7e90a7155b5bdca3ef526d68b7fc58\";
            var current_id_tab = 58;
        </script>

";
        // line 174
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-vn adminmodulespositions\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminDashboard&amp;token=dadb1e6014d1cfb94417157014634ea3\"></a>
      <span id=\"shop_version\">1.7.6.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Truy cập nhanh
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php/improve/modules/manage?token=dca01e411b4a4878da3c386a5d140976\"
                 data-item=\"Các mô-đun đã cài đặt\"
      >Các mô-đun đã cài đặt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php/sell/catalog/categories/new?token=dca01e411b4a4878da3c386a5d140976\"
                 data-item=\"Danh mục mới\"
      >Danh mục mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=708be9bc49f1625c85844ba00fffb2c2\"
                 data-item=\"Phiếu giảm giá mới\"
      >Phiếu giảm giá mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php/sell/catalog/products/new?token=dca01e411b4a4878da3c386a5d140976\"
                 data-item=\"Sản phẩm mới\"
      >Sản phẩm mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=933156e50dead80b374ac0ac5b0c6d29\"
                 data-item=\"Định giá danh mục\"
      >Định giá danh mục</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrders&amp;token=d228aa222dafefe8d2b5ef440883b99a\"
                 data-item=\"Đơn hàng\"
      >Đơn hàng</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"61\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/modules/positions\"
        data-post-link=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminQuickAccesses&token=bd158dea5009a7fcf667950c435241f8\"
        data-prompt-text=\"Vui lòng đặt tên phím tắt này:\"
        data-link=\"Vị tr&iacute; - Dạng danh mục\"
      >
        <i class=\"material-icons\">add_circle</i>
        Thêm trang hiện tại vào truy cập nhanh QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminQuickAccesses&token=bd158dea5009a7fcf667950c435241f8\">
      <i class=\"material-icons\">settings</i>
      Quản lý các thao tác truy cập nhanh
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/may-cay/admin_sc/index.php?controller=AdminSearch&amp;token=b8a418830a48ccbaf130a56754423a22\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Tìm kiếm (ví dụ: tham chiếu sản phẩm, tên khách hàng...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Mọi nơi
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Mọi nơi\" href=\"#\" data-value=\"0\" data-placeholder=\"Bạn đang tìm kiếm thứ gì?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Mọi nơi</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Danh mục\" href=\"#\" data-value=\"1\" data-placeholder=\"Tên, mã, tham chiếu sản phẩm...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Danh mục</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng tên\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, tên...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Khách hàng bằng tên</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng địa chỉ Ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Khách hàng theo địa chỉ IP</a>
        <a class=\"dropdown-item\" data-item=\"Đơn hàng\" href=\"#\" data-value=\"3\" data-placeholder=\"ID đơn đặt hàng\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Đơn hàng</a>
        <a class=\"dropdown-item\" data-item=\"Biên nhận\" href=\"#\" data-value=\"4\" data-placeholder=\"Số hóa đơn\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Biên nhận</a>
        <a class=\"dropdown-item\" data-item=\"Giỏ hàng\" href=\"#\" data-value=\"5\" data-placeholder=\"Mã ID thẻ\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Giỏ hàng</a>
        <a class=\"dropdown-item\" data-item=\"Các mô-đun\" href=\"#\" data-value=\"7\" data-placeholder=\"Tên module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Các mô-đun</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">TÌM KIẾM</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/may-cay/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Xem cửa hàng của tôi
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
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
              Đơn hàng<span id=\"_nb_new_orders_\"></span>
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
              Khách hàng<span id=\"_nb_new_customers_\"></span>
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
              Tin nhắn<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có đơn hàng mới vào lúc này :(<br>
              Còn một số giảm giá theo mùa thì sao?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có khách hàng mới vào lúc này :(<br>
              Gần đây bạn đã gửi email mua lại chưa?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có tin nhắn mới vào lúc này.<br>
              Có vẻ như tất cả khách hàng của bạn đều hài lòng :)
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
      từ <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - đã đăng ký <strong>_date_add_</strong>
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
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Admin</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/may-cay/admin_sc/index.php/configure/advanced/employees/1/edit?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\">
      <i class=\"material-icons\">settings</i>
      Hồ sơ của bạn
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Đào tạo</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminLogin&amp;logout=1&amp;token=7159ec75f35297c25100c478dab572e1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Đăng xuất</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/may-cay/admin_sc/index.php/configure/advanced/employees/toggle-navigation?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminDashboard&amp;token=dadb1e6014d1cfb94417157014634ea3\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Bảng điều khiển</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Bán hàng</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrders&amp;token=d228aa222dafefe8d2b5ef440883b99a\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Đơn hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrders&amp;token=d228aa222dafefe8d2b5ef440883b99a\" class=\"link\"> Đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/orders/invoices/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Biên nhận
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminSlip&amp;token=c1815ac623a8b72e4a4d491b465ee6f4\" class=\"link\"> Phiếu tín dụng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/orders/delivery-slips/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Phiếu giao hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCarts&amp;token=08211d42ee50523ea6aaa260dcf4aaf7\" class=\"link\"> Giỏ hàng
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/may-cay/admin_sc/index.php/sell/catalog/products?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Danh mục
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/catalog/products?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Sản phẩm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/catalog/categories?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Danh mục
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminTracking&amp;token=2930e5a476b7394045423a3328281dee\" class=\"link\"> Giám sát
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminAttributesGroups&amp;token=088d3f0296d779a926667d38ae88107a\" class=\"link\"> Thuộc tính &amp; Tính năng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/catalog/brands/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Thương hiệu &amp; Nhà cung cấp
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminAttachments&amp;token=8ec2216355b67d9dbeacefca0a2db910\" class=\"link\"> Tập tin
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCartRules&amp;token=708be9bc49f1625c85844ba00fffb2c2\" class=\"link\"> Giảm giá
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/stocks/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/may-cay/admin_sc/index.php/sell/customers/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Khách hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/customers/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminAddresses&amp;token=2e41b200a9fcd44d37427a9b124ebdfe\" class=\"link\"> Địa chỉ
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCustomerThreads&amp;token=88846d8f3e82c4847b89176bb53295a5\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Dịch vụ Khách hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCustomerThreads&amp;token=88846d8f3e82c4847b89176bb53295a5\" class=\"link\"> Dịch vụ Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrderMessage&amp;token=00e7a6f0c4a71a7a61c1805635849d7e\" class=\"link\"> Tin nhắn đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminReturn&amp;token=d4a192b75ec0b163539c773af789f6b8\" class=\"link\"> Hàng hóa trả lại
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminStats&amp;token=933156e50dead80b374ac0ac5b0c6d29\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Cải thiện</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/modules/manage?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Các mô-đun
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/modules/manage?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminPsMboModule&amp;token=853f89dd73cd5d830018e8a2a826c35b\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/design/themes/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Thiết kế
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/themes/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Chủ đề &amp; Logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminPsMboTheme&amp;token=da39d73db248f950af1b6c924b6afff9\" class=\"link\"> Danh mục Chủ đề
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/mail_theme/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/cms-pages/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Các trang
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/modules/positions/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Vị trí
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminImages&amp;token=f454faf68a17939e2c192bfc1c7139ae\" class=\"link\"> Cài đặt hình ảnh
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/may-cay/admin_sc/index.php/modules/link-widget/list?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCarriers&amp;token=b0cd06f6b235676a9ffd2ee62afdc22e\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Vận chuyển
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCarriers&amp;token=b0cd06f6b235676a9ffd2ee62afdc22e\" class=\"link\"> Cty vận chuyển
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/shipping/preferences?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Tùy chọn
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/payment/payment_methods?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Thanh toán
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/payment/payment_methods?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Phương thức thanh toán
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/payment/preferences?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Tùy chọn
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/international/localization/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Quốc tế
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/international/localization/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Địa phương hóa
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminZones&amp;token=4b2619e7a3faf34bc2b3661ebf6a5e7f\" class=\"link\"> Địa phương
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/international/taxes/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Thuế
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/international/translations/settings?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Dịch
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Cấu hình</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/may-cay/admin_sc/index.php/configure/shop/preferences/preferences?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Thông số cửa hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/preferences/preferences?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Chung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/order-preferences/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Cài đặt Đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/product-preferences/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Cài đặt Sản phẩm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/customer-preferences/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Cài đặt Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/contacts/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Liên hệ
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/seo-urls/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Truy cập &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminSearchConf&amp;token=206b5d6dc454924958a152817d6db622\" class=\"link\"> Tìm kiếm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminGamification&amp;token=ae7e90a7155b5bdca3ef526d68b7fc58\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/may-cay/admin_sc/index.php/configure/advanced/system-information/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Thông số chi tiết
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/system-information/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Thông tin
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/performance/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/administration/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Quản trị
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/emails/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Hộp thư
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/import/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Nhập vào
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/employees/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Quản trị viên
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/sql-requests/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Cơ sở dữ liệu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/logs/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Nhật ký
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/webservice-keys/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Thiết kế</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/may-cay/admin_sc/index.php/improve/design/modules/positions/?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\" aria-current=\"page\">Vị trí</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Vị trí          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/may-cay/admin_sc/index.php?controller=AdminPsMboModule&token=853f89dd73cd5d830018e8a2a826c35b';
    var controller = 'AdminModulesPositions';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-save\"
                  href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=d7cbbee24fe5dbdbcecfb50e7b2e2b9d\"                  title=\"Cài đặt một mô-đun\"                >
                                    Cài đặt một mô-đun
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Giúp đỡ\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/may-cay/admin_sc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fvn%252Fdoc%252FAdminModulesPositions%253Fversion%253D1.7.6.3%2526country%253Dvn/Gi%C3%BAp%20%C4%91%E1%BB%A1?_token=qlWoLL2_xTUD42EZJj7JN1Om0RCA_Q165K6w6D1R1A0\"
                   id=\"product_form_open_help\"
                >
                  Giúp đỡ
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1221
        $this->displayBlock('content_header', $context, $blocks);
        // line 1222
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1223
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1224
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1225
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Các module và các dịch vụ được đề xuất</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, Không!</h1>
  <p class=\"mt-3\">
    Phiên bản dành cho điện thoại di động của trang này chưa có.
  </p>
  <p class=\"mt-2\">
    Vui lòng sử dụng một máy tính để bàn để truy cập vào trang này, cho đến khi được điều chỉnh cho điện thoại di động.
  </p>
  <p class=\"mt-2\">
    Cảm ơn.
  </p>
  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminDashboard&amp;token=dadb1e6014d1cfb94417157014634ea3\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Quay lại
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-VN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/vn/login?email=admin%40admin.com&amp;firstname=Admin&amp;lastname=LTE&amp;website=http%3A%2F%2Flocalhost%2Fmay-cay%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/may-cay/admin_sc/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Kết nối cửa hàng của bạn với chợ PrestaShop để tự động nhập tất cả các mua bán Addons của bạn.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Không có tài khoản?</h4>
\t\t\t\t\t\t<p class='text-justify'>Khám phá sức mạnh của PrestaShop Addons! Khám phá Official Marketplace PrestaShop và tìm thấy hơn 3 500 mô-đun sáng tạo và chủ đề mà tối ưu hóa tỷ lệ chuyển đổi, tăng lưu lượng truy cập, xây dựng lòng trung thành của khách hàng và tối đa hóa năng suất của bạn</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Kết nối đến PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/vn/forgot-your-password\">Tôi quên mật khẩu của tôi</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/vn/login?email=admin%40admin.com&amp;firstname=Admin&amp;lastname=LTE&amp;website=http%3A%2F%2Flocalhost%2Fmay-cay%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tTạo Tài khoản
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Đăng nhập
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1346
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 174
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1221
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1222
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1223
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1224
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1346
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__288be1288cfbfda9b6972ebd92ea60213bb4dbdb2d147966c885327da46f894c";
    }

    public function getDebugInfo()
    {
        return array (  1436 => 1346,  1431 => 1224,  1426 => 1223,  1421 => 1222,  1416 => 1221,  1407 => 174,  1399 => 1346,  1276 => 1225,  1273 => 1224,  1270 => 1223,  1267 => 1222,  1265 => 1221,  214 => 174,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__288be1288cfbfda9b6972ebd92ea60213bb4dbdb2d147966c885327da46f894c", "");
    }
}
