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

/* mod_orderbutton_js.phtml */
class __TwigTemplate_caa4b86c967215ecb731ad1e23e8eead2c50ce9434ca48e938eb4e2b1ae5c51a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["background_opacity"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "background_opacity", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "background_opacity", [], "any", false, false, false, 1), "50")) : ("50"));
        // line 2
        $context["popup_top"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "top", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "top", [], "any", false, false, false, 2), "200")) : ("200"));
        // line 3
        $context["popup_left"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "left", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "left", [], "any", false, false, false, 3), "200")) : ("200"));
        // line 4
        $context["width"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "width", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "width", [], "any", false, false, false, 4), "600")) : ("600"));
        // line 5
        $context["height"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "height", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "height", [], "any", false, false, false, 5), "700")) : ("700"));
        // line 6
        $context["background_color"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "background_color", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "background_color", [], "any", false, false, false, 6), "black")) : ("black"));
        // line 7
        $context["theme_color"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "theme_color", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "theme_color", [], "any", false, false, false, 7), "green")) : ("green"));
        // line 8
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 8), "8")) : ("8"));
        // line 9
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 10
        $context["border_radius"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "border_radius", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "border_radius", [], "any", false, false, false, 10), 0)) : (0));
        // line 11
        $context["bind_selector"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "bind_selector", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "bind_selector", [], "any", false, false, false, 11), ".order-button")) : (".order-button"));
        // line 12
        echo "
    var orderbutton = function (){
        this.data_product_id = null;
        this.backgroundElem = null;
        this.iframeElem = null;
        this.loaderImageElem = null;
    };

    orderbutton.prototype.setDataProductId = function (product_id){
        this.data_product_id = product_id;
    };

    orderbutton.prototype.getDataProductId = function (){
        return this.data_product_id;
    };

    orderbutton.prototype.hideElements = function(){
        this.backgroundElem.hide();
        this.iframeElem.hide();
    };

    orderbutton.prototype.attachEvents = function() {
        var _this = this;
        \$(document).keyup(function(e) { // esc
            if (e.keyCode == 27) {
                _this.hideElements();
            }
        });
        var bodyElem = \$('body');

        bodyElem.undelegate('";
        // line 42
        echo twig_escape_filter($this->env, ($context["bind_selector"] ?? null), "html", null, true);
        echo "', 'click');
        bodyElem.delegate('";
        // line 43
        echo twig_escape_filter($this->env, ($context["bind_selector"] ?? null), "html", null, true);
        echo "', 'click', function (event) {
            event.preventDefault();
            _this.setDataProductId(\$(this).data('product'))
            _this.popup();
        });
        // Create the event.
        var event = document.createEvent('Event');
        event.initEvent('OrderButtonEventsReady', true, true);

        // target can be any Element or other EventTarget.
        document.dispatchEvent(event);
    };

    orderbutton.prototype.srclink = function(){
        var params = [
            { name: \"theme_color\", value: \"";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "theme_color", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "theme_color", [], "any", false, false, false, 58), "green")) : ("green")), "html", null, true);
        echo "\" },
            { name: \"loader\", value: \"1\" }
        ];
        var product_id = this.getDataProductId();

        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_id", [], "any", false, false, false, 63)) {
            // line 64
            echo "            // request has product_id
            product_id = ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_id", [], "any", false, false, false, 65), "html", null, true);
            echo ";
        ";
        }
        // line 67
        echo "
        if (product_id)
            params.push({'name' : 'order', 'value' : product_id});
        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 70)) {
            // line 71
            echo "            params['show_custom_form_values'] = 1;
        ";
        }
        // line 73
        echo "
        return \"";
        // line 74
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton");
        echo "&\"+jQuery.param(params);
    };

    orderbutton.prototype.createIframe = function (){

        this.iframeElem  = \$('<iframe frameborder=\"0\" allowtransparency=\"true\" onload=\"\" id=\"popup-iframe\"  src=\"'+this.srclink()+'\" />').appendTo('body');
        this.iframeElem .css({
            ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "popup_center", [], "any", false, false, false, 81) == "1")) {
            // line 82
            echo "            'top': ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "popup_top", [], "any", false, false, false, 82), "html", null, true);
            echo ",
            'left': ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "popup_left", [], "any", false, false, false, 83), "html", null, true);
            echo ",
            ";
        }
        // line 85
        echo "            'background-color': 'transparent',
            'border-radius': '";
        // line 86
        echo twig_escape_filter($this->env, ($context["border_radius"] ?? null), "html", null, true);
        echo "px',
            '-webkit-border-radius': '";
        // line 87
        echo twig_escape_filter($this->env, ($context["border_radius"] ?? null), "html", null, true);
        echo "px',
            '-moz-border-radius': '";
        // line 88
        echo twig_escape_filter($this->env, ($context["border_radius"] ?? null), "html", null, true);
        echo "px',
            //'box-shadow': '0 0 20px 0 #222',
            //'-webkit-box-shadow': '0 0 20px 0 #222',
            //'-moz-box-shadow': '0 0 20px 0 #222',
            'display': 'none',
            'margin': '0 auto',
            'padding': '0px',
            'position': 'absolute',
            'width': \"";
        // line 96
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "px\",
            'z-index': '1000'

        });

        if (/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(navigator.userAgent.substr(0, 4))){
            this.iframeElem .css({ 'width': \"\"});
        }


        var _this = this;
        this.iframeElem.load(function() {
            _this.loaderImageElem.hide();
            this.style.height = '80%';
            var pWidth = jQuery(window).width();
            var pTop = jQuery(window).scrollTop();
            var eWidth = jQuery(this).width();
            jQuery(this).css('top', pTop + 100 + 'px');
            jQuery(this).css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px');
            \$(this).show();
        });

        \$(window).resize(function(){
            var pWidth = jQuery(window).width();
            var pTop = jQuery(window).scrollTop();
            var eWidth = _this.iframeElem.width();
            _this.iframeElem.css('top', pTop + 100 + 'px');
            _this.iframeElem.css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px');
        });
    };

    orderbutton.prototype.createBackground = function (){
        var _this = this;
        this.backgroundElem = \$('<div/>', {
            id: 'popup-background'
        }).appendTo('body');
        this.backgroundElem.css({
            'display': 'none',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'width': '100%',
            'height': '100%',
            'background-color': '";
        // line 139
        echo twig_escape_filter($this->env, ($context["background_color"] ?? null), "html", null, true);
        echo "',
            'opacity': '";
        // line 140
        echo twig_escape_filter($this->env, (($context["background_opacity"] ?? null) / 100), "html", null, true);
        echo "',
            '-webkit-opacity': '";
        // line 141
        echo twig_escape_filter($this->env, (($context["background_opacity"] ?? null) / 100), "html", null, true);
        echo "',
            '-moz-opacity': '";
        // line 142
        echo twig_escape_filter($this->env, (($context["background_opacity"] ?? null) / 100), "html", null, true);
        echo "',
            'filter': 'alpha(opacity=";
        // line 143
        echo twig_escape_filter($this->env, ($context["background_opacity"] ?? null), "html", null, true);
        echo ")',
            'z-index': '1000'
        }).on('click', function(){
            _this.hideElements();
        });


        this.backgroundElem.show();
    };

    orderbutton.prototype.createLoaderImage = function(){
        this.loaderImageElem = \$('<img />').attr({
            'src': \"";
        // line 155
        echo twig_escape_filter($this->env, twig_mod_asset_url(($context["loader_url"] ?? null), "orderbutton"), "html", null, true);
        echo "\",
            'id' : 'loader-image'
        }).css({
            'display': 'block',
            'margin-left': 'auto',
            'margin-right': 'auto',
            'position': 'relative',
            'top': '50%'
        }).appendTo(this.backgroundElem).show();
    };

    orderbutton.prototype.popup = function (){
        if (this.backgroundElem && this.iframeElem){

            if (this.iframeElem.attr('src') != this.srclink()){
                this.iframeElem.attr('src', this.srclink());
                this.loaderImageElem.show();
            }
            else{
                this.iframeElem.show();
            }
            this.backgroundElem.show();

        }else{
            this.createBackground();
            this.createLoaderImage();
            this.createIframe();
        }
    };
    (function(funcName, baseObj) {
        // The public function name defaults to window.docReady
        // but you can pass in your own object and own function name and those will be used
        // if you want to put them in a different namespace
        funcName = funcName || \"docReady\";
        baseObj = baseObj || window;
        var readyList = [];
        var readyFired = false;
        var readyEventHandlersInstalled = false;

        // call this when the document is ready
        // this function protects itself against being called more than once
        function ready() {
            if (!readyFired) {
                // this must be set to true before we start calling callbacks
                readyFired = true;
                for (var i = 0; i < readyList.length; i++) {
                    // if a callback here happens to add new ready handlers,
                    // the docReady() function will see that it already fired
                    // and will schedule the callback to run right after
                    // this event loop finishes so all handlers will still execute
                    // in order and no new ones will be added to the readyList
                    // while we are processing the list
                    readyList[i].fn.call(window, readyList[i].ctx);
                }
                // allow any closures held by these functions to free
                readyList = [];
            }
        }

        function readyStateChange() {
            if ( document.readyState === \"complete\" ) {
                ready();
            }
        }

        // This is the one public interface
        // docReady(fn, context);
        // the context argument is optional - if present, it will be passed
        // as an argument to the callback
        baseObj[funcName] = function(callback, context) {
            // if ready has already fired, then just schedule the callback
            // to fire asynchronously, but right away
            if (readyFired) {
                setTimeout(function() {callback(context);}, 1);
                return;
            } else {
                // add the function and context to the list
                readyList.push({fn: callback, ctx: context});
            }
            // if document already ready to go, schedule the ready function to run
            if (document.readyState === \"complete\") {
                setTimeout(ready, 1);
            } else if (!readyEventHandlersInstalled) {
                // otherwise if we don't have event handlers installed, install them
                if (document.addEventListener) {
                    // first choice is DOMContentLoaded event
                    document.addEventListener(\"DOMContentLoaded\", ready, false);
                    // backup is window load event
                    window.addEventListener(\"load\", ready, false);
                } else {
                    // must be IE
                    document.attachEvent(\"onreadystatechange\", readyStateChange);
                    window.attachEvent(\"onload\", ready);
                }
                readyEventHandlersInstalled = true;
            }
        }
    })(\"docReady\", window);

    docReady(function() {
        if (typeof jQuery === \"undefined\") {
            (function(d, script) {
                script = d.createElement('script');
                script.type = 'text/javascript';
                script.async = true;
                script.onload = function(){
                    ob = new orderbutton();
                    ob.attachEvents();
                };
                script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js';
                d.getElementsByTagName('head')[0].appendChild(script);
            }(document));
        }else{
            ob = new orderbutton();
            ob.attachEvents();
        }
    });";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_js.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 155,  251 => 143,  247 => 142,  243 => 141,  239 => 140,  235 => 139,  189 => 96,  178 => 88,  174 => 87,  170 => 86,  167 => 85,  162 => 83,  157 => 82,  155 => 81,  145 => 74,  142 => 73,  138 => 71,  136 => 70,  131 => 67,  126 => 65,  123 => 64,  121 => 63,  113 => 58,  95 => 43,  91 => 42,  59 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set background_opacity = request.background_opacity | default(\"50\")%}
{% set popup_top = request.top | default(\"200\") %}
{% set popup_left = request.left | default(\"200\") %}
{% set width = request.width | default(\"600\")%}
{% set height = request.height | default(\"700\")%}
{% set background_color = request.background_color | default(\"black\")%}
{% set theme_color = request.theme_color | default('green')%}
{% set loader_nr = request.loader | default(\"8\")%}
{% set loader_url = ('img/assets/loaders/loader'~loader_nr~'.gif') %}
{% set border_radius = request.border_radius | default(0) %}
{% set bind_selector = request.bind_selector | default('.order-button') %}

    var orderbutton = function (){
        this.data_product_id = null;
        this.backgroundElem = null;
        this.iframeElem = null;
        this.loaderImageElem = null;
    };

    orderbutton.prototype.setDataProductId = function (product_id){
        this.data_product_id = product_id;
    };

    orderbutton.prototype.getDataProductId = function (){
        return this.data_product_id;
    };

    orderbutton.prototype.hideElements = function(){
        this.backgroundElem.hide();
        this.iframeElem.hide();
    };

    orderbutton.prototype.attachEvents = function() {
        var _this = this;
        \$(document).keyup(function(e) { // esc
            if (e.keyCode == 27) {
                _this.hideElements();
            }
        });
        var bodyElem = \$('body');

        bodyElem.undelegate('{{bind_selector}}', 'click');
        bodyElem.delegate('{{bind_selector}}', 'click', function (event) {
            event.preventDefault();
            _this.setDataProductId(\$(this).data('product'))
            _this.popup();
        });
        // Create the event.
        var event = document.createEvent('Event');
        event.initEvent('OrderButtonEventsReady', true, true);

        // target can be any Element or other EventTarget.
        document.dispatchEvent(event);
    };

    orderbutton.prototype.srclink = function(){
        var params = [
            { name: \"theme_color\", value: \"{{request.theme_color | default('green')}}\" },
            { name: \"loader\", value: \"1\" }
        ];
        var product_id = this.getDataProductId();

        {% if request.product_id %}
            // request has product_id
            product_id = {{request.product_id}};
        {% endif %}

        if (product_id)
            params.push({'name' : 'order', 'value' : product_id});
        {% if request.show_custom_form_values %}
            params['show_custom_form_values'] = 1;
        {% endif %}

        return \"{{ \"orderbutton\" | link }}&\"+jQuery.param(params);
    };

    orderbutton.prototype.createIframe = function (){

        this.iframeElem  = \$('<iframe frameborder=\"0\" allowtransparency=\"true\" onload=\"\" id=\"popup-iframe\"  src=\"'+this.srclink()+'\" />').appendTo('body');
        this.iframeElem .css({
            {% if request.popup_center == \"1\" %}
            'top': {{request.popup_top}},
            'left': {{request.popup_left}},
            {% endif %}
            'background-color': 'transparent',
            'border-radius': '{{border_radius}}px',
            '-webkit-border-radius': '{{border_radius}}px',
            '-moz-border-radius': '{{border_radius}}px',
            //'box-shadow': '0 0 20px 0 #222',
            //'-webkit-box-shadow': '0 0 20px 0 #222',
            //'-moz-box-shadow': '0 0 20px 0 #222',
            'display': 'none',
            'margin': '0 auto',
            'padding': '0px',
            'position': 'absolute',
            'width': \"{{width}}px\",
            'z-index': '1000'

        });

        if (/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(navigator.userAgent.substr(0, 4))){
            this.iframeElem .css({ 'width': \"\"});
        }


        var _this = this;
        this.iframeElem.load(function() {
            _this.loaderImageElem.hide();
            this.style.height = '80%';
            var pWidth = jQuery(window).width();
            var pTop = jQuery(window).scrollTop();
            var eWidth = jQuery(this).width();
            jQuery(this).css('top', pTop + 100 + 'px');
            jQuery(this).css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px');
            \$(this).show();
        });

        \$(window).resize(function(){
            var pWidth = jQuery(window).width();
            var pTop = jQuery(window).scrollTop();
            var eWidth = _this.iframeElem.width();
            _this.iframeElem.css('top', pTop + 100 + 'px');
            _this.iframeElem.css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px');
        });
    };

    orderbutton.prototype.createBackground = function (){
        var _this = this;
        this.backgroundElem = \$('<div/>', {
            id: 'popup-background'
        }).appendTo('body');
        this.backgroundElem.css({
            'display': 'none',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'width': '100%',
            'height': '100%',
            'background-color': '{{background_color}}',
            'opacity': '{{background_opacity/100}}',
            '-webkit-opacity': '{{background_opacity/100}}',
            '-moz-opacity': '{{background_opacity/100}}',
            'filter': 'alpha(opacity={{background_opacity}})',
            'z-index': '1000'
        }).on('click', function(){
            _this.hideElements();
        });


        this.backgroundElem.show();
    };

    orderbutton.prototype.createLoaderImage = function(){
        this.loaderImageElem = \$('<img />').attr({
            'src': \"{{ loader_url | mod_asset_url('orderbutton')}}\",
            'id' : 'loader-image'
        }).css({
            'display': 'block',
            'margin-left': 'auto',
            'margin-right': 'auto',
            'position': 'relative',
            'top': '50%'
        }).appendTo(this.backgroundElem).show();
    };

    orderbutton.prototype.popup = function (){
        if (this.backgroundElem && this.iframeElem){

            if (this.iframeElem.attr('src') != this.srclink()){
                this.iframeElem.attr('src', this.srclink());
                this.loaderImageElem.show();
            }
            else{
                this.iframeElem.show();
            }
            this.backgroundElem.show();

        }else{
            this.createBackground();
            this.createLoaderImage();
            this.createIframe();
        }
    };
    (function(funcName, baseObj) {
        // The public function name defaults to window.docReady
        // but you can pass in your own object and own function name and those will be used
        // if you want to put them in a different namespace
        funcName = funcName || \"docReady\";
        baseObj = baseObj || window;
        var readyList = [];
        var readyFired = false;
        var readyEventHandlersInstalled = false;

        // call this when the document is ready
        // this function protects itself against being called more than once
        function ready() {
            if (!readyFired) {
                // this must be set to true before we start calling callbacks
                readyFired = true;
                for (var i = 0; i < readyList.length; i++) {
                    // if a callback here happens to add new ready handlers,
                    // the docReady() function will see that it already fired
                    // and will schedule the callback to run right after
                    // this event loop finishes so all handlers will still execute
                    // in order and no new ones will be added to the readyList
                    // while we are processing the list
                    readyList[i].fn.call(window, readyList[i].ctx);
                }
                // allow any closures held by these functions to free
                readyList = [];
            }
        }

        function readyStateChange() {
            if ( document.readyState === \"complete\" ) {
                ready();
            }
        }

        // This is the one public interface
        // docReady(fn, context);
        // the context argument is optional - if present, it will be passed
        // as an argument to the callback
        baseObj[funcName] = function(callback, context) {
            // if ready has already fired, then just schedule the callback
            // to fire asynchronously, but right away
            if (readyFired) {
                setTimeout(function() {callback(context);}, 1);
                return;
            } else {
                // add the function and context to the list
                readyList.push({fn: callback, ctx: context});
            }
            // if document already ready to go, schedule the ready function to run
            if (document.readyState === \"complete\") {
                setTimeout(ready, 1);
            } else if (!readyEventHandlersInstalled) {
                // otherwise if we don't have event handlers installed, install them
                if (document.addEventListener) {
                    // first choice is DOMContentLoaded event
                    document.addEventListener(\"DOMContentLoaded\", ready, false);
                    // backup is window load event
                    window.addEventListener(\"load\", ready, false);
                } else {
                    // must be IE
                    document.attachEvent(\"onreadystatechange\", readyStateChange);
                    window.attachEvent(\"onload\", ready);
                }
                readyEventHandlersInstalled = true;
            }
        }
    })(\"docReady\", window);

    docReady(function() {
        if (typeof jQuery === \"undefined\") {
            (function(d, script) {
                script = d.createElement('script');
                script.type = 'text/javascript';
                script.async = true;
                script.onload = function(){
                    ob = new orderbutton();
                    ob.attachEvents();
                };
                script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js';
                d.getElementsByTagName('head')[0].appendChild(script);
            }(document));
        }else{
            ob = new orderbutton();
            ob.attachEvents();
        }
    });", "mod_orderbutton_js.phtml", "/var/www/vhosts/webbhostingservices.com/httpdocs/boxbilling/src/bb-modules/Orderbutton/html_client/mod_orderbutton_js.phtml");
    }
}
