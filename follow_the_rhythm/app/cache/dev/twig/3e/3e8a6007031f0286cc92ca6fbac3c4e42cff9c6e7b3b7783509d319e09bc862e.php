<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_c373899fabc727ca9dd09de00d88885edc65e16d981d66f2f28ff8c2c6f58180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70c8ee1162b5bf46126c9dcf2d0e1f8dd2b3f4e388acb0ae55dcb48120d052d = $this->env->getExtension("native_profiler");
        $__internal_e70c8ee1162b5bf46126c9dcf2d0e1f8dd2b3f4e388acb0ae55dcb48120d052d->enter($__internal_e70c8ee1162b5bf46126c9dcf2d0e1f8dd2b3f4e388acb0ae55dcb48120d052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_e70c8ee1162b5bf46126c9dcf2d0e1f8dd2b3f4e388acb0ae55dcb48120d052d->leave($__internal_e70c8ee1162b5bf46126c9dcf2d0e1f8dd2b3f4e388acb0ae55dcb48120d052d_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a88604cdeda8aa2a9fa24c10f0b6b0cfabf86b41424efab24d7c47b41bc7386c = $this->env->getExtension("native_profiler");
        $__internal_a88604cdeda8aa2a9fa24c10f0b6b0cfabf86b41424efab24d7c47b41bc7386c->enter($__internal_a88604cdeda8aa2a9fa24c10f0b6b0cfabf86b41424efab24d7c47b41bc7386c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_a88604cdeda8aa2a9fa24c10f0b6b0cfabf86b41424efab24d7c47b41bc7386c->leave($__internal_a88604cdeda8aa2a9fa24c10f0b6b0cfabf86b41424efab24d7c47b41bc7386c_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_a70bda7d66312e70e31c659dca036bdf40753de49ec831e22bcd071db749240e = $this->env->getExtension("native_profiler");
        $__internal_a70bda7d66312e70e31c659dca036bdf40753de49ec831e22bcd071db749240e->enter($__internal_a70bda7d66312e70e31c659dca036bdf40753de49ec831e22bcd071db749240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_a70bda7d66312e70e31c659dca036bdf40753de49ec831e22bcd071db749240e->leave($__internal_a70bda7d66312e70e31c659dca036bdf40753de49ec831e22bcd071db749240e_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_99c5fd9589b5f70c687de1aa7253159e0e6d496bc729d15220910a31f5dd3d76 = $this->env->getExtension("native_profiler");
        $__internal_99c5fd9589b5f70c687de1aa7253159e0e6d496bc729d15220910a31f5dd3d76->enter($__internal_99c5fd9589b5f70c687de1aa7253159e0e6d496bc729d15220910a31f5dd3d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_99c5fd9589b5f70c687de1aa7253159e0e6d496bc729d15220910a31f5dd3d76->leave($__internal_99c5fd9589b5f70c687de1aa7253159e0e6d496bc729d15220910a31f5dd3d76_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_1e80d4f1ab8d222b09d9c1cb4ec85700a255ccbcfc4d2b1ebdf482c15988c03a = $this->env->getExtension("native_profiler");
        $__internal_1e80d4f1ab8d222b09d9c1cb4ec85700a255ccbcfc4d2b1ebdf482c15988c03a->enter($__internal_1e80d4f1ab8d222b09d9c1cb4ec85700a255ccbcfc4d2b1ebdf482c15988c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1e80d4f1ab8d222b09d9c1cb4ec85700a255ccbcfc4d2b1ebdf482c15988c03a->leave($__internal_1e80d4f1ab8d222b09d9c1cb4ec85700a255ccbcfc4d2b1ebdf482c15988c03a_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_9ba350f8830bab0c982365ae9b40311da88acd16851d96ef2743a640430a1d98 = $this->env->getExtension("native_profiler");
        $__internal_9ba350f8830bab0c982365ae9b40311da88acd16851d96ef2743a640430a1d98->enter($__internal_9ba350f8830bab0c982365ae9b40311da88acd16851d96ef2743a640430a1d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_9ba350f8830bab0c982365ae9b40311da88acd16851d96ef2743a640430a1d98->leave($__internal_9ba350f8830bab0c982365ae9b40311da88acd16851d96ef2743a640430a1d98_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe2c731c9f29db54482e2a324340f6a11c3dd46f5c080e471bdc79e9bb0b62de = $this->env->getExtension("native_profiler");
        $__internal_fe2c731c9f29db54482e2a324340f6a11c3dd46f5c080e471bdc79e9bb0b62de->enter($__internal_fe2c731c9f29db54482e2a324340f6a11c3dd46f5c080e471bdc79e9bb0b62de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_fe2c731c9f29db54482e2a324340f6a11c3dd46f5c080e471bdc79e9bb0b62de->leave($__internal_fe2c731c9f29db54482e2a324340f6a11c3dd46f5c080e471bdc79e9bb0b62de_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_dff40d4e7eae3adcef4b1f6b816b3a7a8b111912a19515623e29eb5c10457bf1 = $this->env->getExtension("native_profiler");
        $__internal_dff40d4e7eae3adcef4b1f6b816b3a7a8b111912a19515623e29eb5c10457bf1->enter($__internal_dff40d4e7eae3adcef4b1f6b816b3a7a8b111912a19515623e29eb5c10457bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_dff40d4e7eae3adcef4b1f6b816b3a7a8b111912a19515623e29eb5c10457bf1->leave($__internal_dff40d4e7eae3adcef4b1f6b816b3a7a8b111912a19515623e29eb5c10457bf1_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fd615d057c2ba78403911eb66d0f5318f1b0bd2858818771d873e25856d6fc88 = $this->env->getExtension("native_profiler");
        $__internal_fd615d057c2ba78403911eb66d0f5318f1b0bd2858818771d873e25856d6fc88->enter($__internal_fd615d057c2ba78403911eb66d0f5318f1b0bd2858818771d873e25856d6fc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_fd615d057c2ba78403911eb66d0f5318f1b0bd2858818771d873e25856d6fc88->leave($__internal_fd615d057c2ba78403911eb66d0f5318f1b0bd2858818771d873e25856d6fc88_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_2f8b21360f7ba5d8a90a2eae9daca79671c7ba693d174d860a64d5adcd432819 = $this->env->getExtension("native_profiler");
        $__internal_2f8b21360f7ba5d8a90a2eae9daca79671c7ba693d174d860a64d5adcd432819->enter($__internal_2f8b21360f7ba5d8a90a2eae9daca79671c7ba693d174d860a64d5adcd432819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_2f8b21360f7ba5d8a90a2eae9daca79671c7ba693d174d860a64d5adcd432819->leave($__internal_2f8b21360f7ba5d8a90a2eae9daca79671c7ba693d174d860a64d5adcd432819_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_3cf09dd1354b9979a585ea4c59e8273cacf91dac44bf62675676d31bd0c110c5 = $this->env->getExtension("native_profiler");
        $__internal_3cf09dd1354b9979a585ea4c59e8273cacf91dac44bf62675676d31bd0c110c5->enter($__internal_3cf09dd1354b9979a585ea4c59e8273cacf91dac44bf62675676d31bd0c110c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_3cf09dd1354b9979a585ea4c59e8273cacf91dac44bf62675676d31bd0c110c5->leave($__internal_3cf09dd1354b9979a585ea4c59e8273cacf91dac44bf62675676d31bd0c110c5_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_3386f9898c08f4e080e595d5d4c12769c9beda64fff86f1a61fd5400a1d3c7c5 = $this->env->getExtension("native_profiler");
        $__internal_3386f9898c08f4e080e595d5d4c12769c9beda64fff86f1a61fd5400a1d3c7c5->enter($__internal_3386f9898c08f4e080e595d5d4c12769c9beda64fff86f1a61fd5400a1d3c7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_3386f9898c08f4e080e595d5d4c12769c9beda64fff86f1a61fd5400a1d3c7c5->leave($__internal_3386f9898c08f4e080e595d5d4c12769c9beda64fff86f1a61fd5400a1d3c7c5_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_127d34b6b394177a714f3680d9e55cb9830e3cdd35df5b92f3ae92c77374ad16 = $this->env->getExtension("native_profiler");
        $__internal_127d34b6b394177a714f3680d9e55cb9830e3cdd35df5b92f3ae92c77374ad16->enter($__internal_127d34b6b394177a714f3680d9e55cb9830e3cdd35df5b92f3ae92c77374ad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('easyadmin_extension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_127d34b6b394177a714f3680d9e55cb9830e3cdd35df5b92f3ae92c77374ad16->leave($__internal_127d34b6b394177a714f3680d9e55cb9830e3cdd35df5b92f3ae92c77374ad16_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_7389bc4c68eaa3f9b271f72ff2e46f497c07f1f5ecc76a64611245f09ce92f20 = $this->env->getExtension("native_profiler");
        $__internal_7389bc4c68eaa3f9b271f72ff2e46f497c07f1f5ecc76a64611245f09ce92f20->enter($__internal_7389bc4c68eaa3f9b271f72ff2e46f497c07f1f5ecc76a64611245f09ce92f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_7389bc4c68eaa3f9b271f72ff2e46f497c07f1f5ecc76a64611245f09ce92f20->leave($__internal_7389bc4c68eaa3f9b271f72ff2e46f497c07f1f5ecc76a64611245f09ce92f20_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_fbc58fda2569dcafdc78b6b800d744f197096c14dc4d943942dfe1f297c3c2b3 = $this->env->getExtension("native_profiler");
        $__internal_fbc58fda2569dcafdc78b6b800d744f197096c14dc4d943942dfe1f297c3c2b3->enter($__internal_fbc58fda2569dcafdc78b6b800d744f197096c14dc4d943942dfe1f297c3c2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_fbc58fda2569dcafdc78b6b800d744f197096c14dc4d943942dfe1f297c3c2b3->leave($__internal_fbc58fda2569dcafdc78b6b800d744f197096c14dc4d943942dfe1f297c3c2b3_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1718dde4f0dc278a21896c80c3a81731ae0749faf7812ad6f5fded8448d676e8 = $this->env->getExtension("native_profiler");
        $__internal_1718dde4f0dc278a21896c80c3a81731ae0749faf7812ad6f5fded8448d676e8->enter($__internal_1718dde4f0dc278a21896c80c3a81731ae0749faf7812ad6f5fded8448d676e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_1718dde4f0dc278a21896c80c3a81731ae0749faf7812ad6f5fded8448d676e8->leave($__internal_1718dde4f0dc278a21896c80c3a81731ae0749faf7812ad6f5fded8448d676e8_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_b01d34e1baab74981e54bb3ee9e1101a4e0dde6ca9f7b7684a67614fe0be7787 = $this->env->getExtension("native_profiler");
        $__internal_b01d34e1baab74981e54bb3ee9e1101a4e0dde6ca9f7b7684a67614fe0be7787->enter($__internal_b01d34e1baab74981e54bb3ee9e1101a4e0dde6ca9f7b7684a67614fe0be7787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_b01d34e1baab74981e54bb3ee9e1101a4e0dde6ca9f7b7684a67614fe0be7787->leave($__internal_b01d34e1baab74981e54bb3ee9e1101a4e0dde6ca9f7b7684a67614fe0be7787_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd03b4a0d571d128694fda45572a57fd8d4839510e7647708c242150dacf9ef0 = $this->env->getExtension("native_profiler");
        $__internal_cd03b4a0d571d128694fda45572a57fd8d4839510e7647708c242150dacf9ef0->enter($__internal_cd03b4a0d571d128694fda45572a57fd8d4839510e7647708c242150dacf9ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_cd03b4a0d571d128694fda45572a57fd8d4839510e7647708c242150dacf9ef0->leave($__internal_cd03b4a0d571d128694fda45572a57fd8d4839510e7647708c242150dacf9ef0_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_8a74056d960405e3c618e869af6c43a6e2cda12a31c854f76b56670a44212482 = $this->env->getExtension("native_profiler");
        $__internal_8a74056d960405e3c618e869af6c43a6e2cda12a31c854f76b56670a44212482->enter($__internal_8a74056d960405e3c618e869af6c43a6e2cda12a31c854f76b56670a44212482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_8a74056d960405e3c618e869af6c43a6e2cda12a31c854f76b56670a44212482->leave($__internal_8a74056d960405e3c618e869af6c43a6e2cda12a31c854f76b56670a44212482_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_bedc0690b96386df6ec385105c88120b74db02b575b18fe97f1ff991cc562b92 = $this->env->getExtension("native_profiler");
        $__internal_bedc0690b96386df6ec385105c88120b74db02b575b18fe97f1ff991cc562b92->enter($__internal_bedc0690b96386df6ec385105c88120b74db02b575b18fe97f1ff991cc562b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_bedc0690b96386df6ec385105c88120b74db02b575b18fe97f1ff991cc562b92->leave($__internal_bedc0690b96386df6ec385105c88120b74db02b575b18fe97f1ff991cc562b92_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6471467c9e62de423ce05ceeb14aaa962029ebe9665fd4e66bd30df888e1bfdf = $this->env->getExtension("native_profiler");
        $__internal_6471467c9e62de423ce05ceeb14aaa962029ebe9665fd4e66bd30df888e1bfdf->enter($__internal_6471467c9e62de423ce05ceeb14aaa962029ebe9665fd4e66bd30df888e1bfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6471467c9e62de423ce05ceeb14aaa962029ebe9665fd4e66bd30df888e1bfdf->leave($__internal_6471467c9e62de423ce05ceeb14aaa962029ebe9665fd4e66bd30df888e1bfdf_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_4c05a36f6b46cdf6ff31ed131f7a797ef646028bf5db50b9a57ff4627f147248 = $this->env->getExtension("native_profiler");
        $__internal_4c05a36f6b46cdf6ff31ed131f7a797ef646028bf5db50b9a57ff4627f147248->enter($__internal_4c05a36f6b46cdf6ff31ed131f7a797ef646028bf5db50b9a57ff4627f147248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_4c05a36f6b46cdf6ff31ed131f7a797ef646028bf5db50b9a57ff4627f147248->leave($__internal_4c05a36f6b46cdf6ff31ed131f7a797ef646028bf5db50b9a57ff4627f147248_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_f154678a7aea2abf14b1d4218db892d841e40b910d5748af5f414a7725868365 = $this->env->getExtension("native_profiler");
        $__internal_f154678a7aea2abf14b1d4218db892d841e40b910d5748af5f414a7725868365->enter($__internal_f154678a7aea2abf14b1d4218db892d841e40b910d5748af5f414a7725868365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f154678a7aea2abf14b1d4218db892d841e40b910d5748af5f414a7725868365->leave($__internal_f154678a7aea2abf14b1d4218db892d841e40b910d5748af5f414a7725868365_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ceaf9bdb6d1d5085bb2c6a4a8e87b2a861e2d5df6c7671232893ccab4fe6399c = $this->env->getExtension("native_profiler");
        $__internal_ceaf9bdb6d1d5085bb2c6a4a8e87b2a861e2d5df6c7671232893ccab4fe6399c->enter($__internal_ceaf9bdb6d1d5085bb2c6a4a8e87b2a861e2d5df6c7671232893ccab4fe6399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_ceaf9bdb6d1d5085bb2c6a4a8e87b2a861e2d5df6c7671232893ccab4fe6399c->leave($__internal_ceaf9bdb6d1d5085bb2c6a4a8e87b2a861e2d5df6c7671232893ccab4fe6399c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 155,  626 => 148,  619 => 144,  612 => 140,  608 => 138,  605 => 137,  599 => 136,  579 => 134,  573 => 133,  563 => 129,  557 => 128,  549 => 149,  547 => 148,  542 => 145,  539 => 136,  537 => 133,  533 => 131,  530 => 128,  524 => 127,  516 => 120,  514 => 117,  512 => 116,  506 => 115,  498 => 122,  496 => 115,  493 => 114,  487 => 113,  475 => 97,  472 => 96,  466 => 95,  459 => 103,  454 => 100,  452 => 95,  443 => 89,  438 => 86,  433 => 84,  430 => 83,  428 => 82,  424 => 81,  421 => 80,  419 => 79,  413 => 77,  407 => 76,  398 => 104,  396 => 76,  392 => 74,  389 => 73,  383 => 72,  373 => 66,  364 => 65,  358 => 64,  349 => 107,  347 => 72,  342 => 69,  340 => 64,  333 => 60,  329 => 58,  323 => 57,  315 => 151,  313 => 127,  308 => 124,  306 => 113,  301 => 110,  299 => 57,  296 => 56,  290 => 55,  269 => 53,  261 => 160,  252 => 158,  248 => 157,  245 => 156,  243 => 155,  239 => 153,  237 => 55,  227 => 53,  221 => 52,  203 => 30,  197 => 29,  188 => 43,  185 => 42,  182 => 29,  176 => 28,  164 => 25,  161 => 24,  155 => 23,  145 => 15,  139 => 13,  133 => 12,  121 => 10,  113 => 162,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache" />*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}">*/
/*             <style>*/
/*                 {{ easyadmin_config('_internal.custom_css')|raw }}*/
/*             </style>*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}*/
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'normal',*/
/*                         sidebarExpandOnHover: false,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}"></script>*/
/*         {% endblock head_javascript %}*/
/* */
/*         {% if easyadmin_config('design.rtl') %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}">*/
/*         {% endif %}*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*             {% block header %}*/
/*                 <nav class="navbar" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/* */
/*                     <div id="header-logo">*/
/*                         {% block header_logo %}*/
/*                             <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                                 {{ easyadmin_config('site_name')|raw }}*/
/*                             </a>*/
/*                         {% endblock header_logo %}*/
/*                     </div>*/
/* */
/*                     <div class="navbar-custom-menu">*/
/*                     {% block header_custom_menu %}*/
/*                         {% set _logout_path = easyadmin_logout_path() %}*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="dropdown user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
/*                                     {% if app.user|default(false) == false %}*/
/*                                         <i class="hidden-xs fa fa-user-times"></i>*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% elseif not _logout_path %}*/
/*                                         <i class="hidden-xs fa fa-user"></i>*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" class="btn" data-toggle="dropdown">*/
/*                                                 <i class="hidden-xs fa fa-user"></i>*/
/*                                                 {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                             </button>*/
/*                                             <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                                                 <span class="caret"></span>*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu" role="menu">*/
/*                                                 {% block user_menu_dropdown %}*/
/*                                                 <li>*/
/*                                                     <a href="{{ _logout_path }}"><i class="fa fa-sign-out"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>*/
/*                                                 </li>*/
/*                                                 {% endblock user_menu_dropdown %}*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% endblock header_custom_menu %}*/
/*                     </div>*/
/*                 </nav>*/
/*             {% endblock header %}*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                 {% endblock content_header %}*/
/*                 {% block content_help %}*/
/*                     {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}*/
/*                         <div class="box box-widget help-entity">*/
/*                             <div class="box-body">*/
/*                                 {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endblock content_help %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}{% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
