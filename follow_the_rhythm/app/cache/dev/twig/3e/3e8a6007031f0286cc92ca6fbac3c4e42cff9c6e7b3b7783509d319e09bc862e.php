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
        $__internal_c4414b4f732b653304dad2fa23a9db4de73428c22abeb1b508c6ea2af67c4c2b = $this->env->getExtension("native_profiler");
        $__internal_c4414b4f732b653304dad2fa23a9db4de73428c22abeb1b508c6ea2af67c4c2b->enter($__internal_c4414b4f732b653304dad2fa23a9db4de73428c22abeb1b508c6ea2af67c4c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_c4414b4f732b653304dad2fa23a9db4de73428c22abeb1b508c6ea2af67c4c2b->leave($__internal_c4414b4f732b653304dad2fa23a9db4de73428c22abeb1b508c6ea2af67c4c2b_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_04fd51e8b06c205a55a6b4f5360b6c31831a2feb54ce6e545aac9b6bafc5e2a5 = $this->env->getExtension("native_profiler");
        $__internal_04fd51e8b06c205a55a6b4f5360b6c31831a2feb54ce6e545aac9b6bafc5e2a5->enter($__internal_04fd51e8b06c205a55a6b4f5360b6c31831a2feb54ce6e545aac9b6bafc5e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_04fd51e8b06c205a55a6b4f5360b6c31831a2feb54ce6e545aac9b6bafc5e2a5->leave($__internal_04fd51e8b06c205a55a6b4f5360b6c31831a2feb54ce6e545aac9b6bafc5e2a5_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_a18a306223c591742f36c7791451f192df12246c55c7ac778638cc7aa7e6de6d = $this->env->getExtension("native_profiler");
        $__internal_a18a306223c591742f36c7791451f192df12246c55c7ac778638cc7aa7e6de6d->enter($__internal_a18a306223c591742f36c7791451f192df12246c55c7ac778638cc7aa7e6de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_a18a306223c591742f36c7791451f192df12246c55c7ac778638cc7aa7e6de6d->leave($__internal_a18a306223c591742f36c7791451f192df12246c55c7ac778638cc7aa7e6de6d_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_b0c5c9069b6242a9eec0489c31a3131b851a65528fe722e278d56e27b65e6e47 = $this->env->getExtension("native_profiler");
        $__internal_b0c5c9069b6242a9eec0489c31a3131b851a65528fe722e278d56e27b65e6e47->enter($__internal_b0c5c9069b6242a9eec0489c31a3131b851a65528fe722e278d56e27b65e6e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_b0c5c9069b6242a9eec0489c31a3131b851a65528fe722e278d56e27b65e6e47->leave($__internal_b0c5c9069b6242a9eec0489c31a3131b851a65528fe722e278d56e27b65e6e47_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_53fb5fea6ff13b307c0ef4c2037f75eeafcb99f22b1cb0f25c7b3012939f15a0 = $this->env->getExtension("native_profiler");
        $__internal_53fb5fea6ff13b307c0ef4c2037f75eeafcb99f22b1cb0f25c7b3012939f15a0->enter($__internal_53fb5fea6ff13b307c0ef4c2037f75eeafcb99f22b1cb0f25c7b3012939f15a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_53fb5fea6ff13b307c0ef4c2037f75eeafcb99f22b1cb0f25c7b3012939f15a0->leave($__internal_53fb5fea6ff13b307c0ef4c2037f75eeafcb99f22b1cb0f25c7b3012939f15a0_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_f881973ed8494f48646ae7bd373e5d9548c05647972f605aeb1299a24182b975 = $this->env->getExtension("native_profiler");
        $__internal_f881973ed8494f48646ae7bd373e5d9548c05647972f605aeb1299a24182b975->enter($__internal_f881973ed8494f48646ae7bd373e5d9548c05647972f605aeb1299a24182b975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_f881973ed8494f48646ae7bd373e5d9548c05647972f605aeb1299a24182b975->leave($__internal_f881973ed8494f48646ae7bd373e5d9548c05647972f605aeb1299a24182b975_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_d376633ebea0aee7c01b97eb5a712f9805430d8337e02d30bd59a295c7db9857 = $this->env->getExtension("native_profiler");
        $__internal_d376633ebea0aee7c01b97eb5a712f9805430d8337e02d30bd59a295c7db9857->enter($__internal_d376633ebea0aee7c01b97eb5a712f9805430d8337e02d30bd59a295c7db9857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d376633ebea0aee7c01b97eb5a712f9805430d8337e02d30bd59a295c7db9857->leave($__internal_d376633ebea0aee7c01b97eb5a712f9805430d8337e02d30bd59a295c7db9857_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fe3cc841f7b3d39529530799833b21447c57c3fb8ed2ca7f3b3b1912c76b15ed = $this->env->getExtension("native_profiler");
        $__internal_fe3cc841f7b3d39529530799833b21447c57c3fb8ed2ca7f3b3b1912c76b15ed->enter($__internal_fe3cc841f7b3d39529530799833b21447c57c3fb8ed2ca7f3b3b1912c76b15ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_fe3cc841f7b3d39529530799833b21447c57c3fb8ed2ca7f3b3b1912c76b15ed->leave($__internal_fe3cc841f7b3d39529530799833b21447c57c3fb8ed2ca7f3b3b1912c76b15ed_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b6e519fed337c69c82633f2771f74e7ad8f6b772ac195579d9adfcf618158f4c = $this->env->getExtension("native_profiler");
        $__internal_b6e519fed337c69c82633f2771f74e7ad8f6b772ac195579d9adfcf618158f4c->enter($__internal_b6e519fed337c69c82633f2771f74e7ad8f6b772ac195579d9adfcf618158f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_b6e519fed337c69c82633f2771f74e7ad8f6b772ac195579d9adfcf618158f4c->leave($__internal_b6e519fed337c69c82633f2771f74e7ad8f6b772ac195579d9adfcf618158f4c_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_d542fa0988c4e808609095841b1547f369dc59a5e5ffa188ae5df40995514e74 = $this->env->getExtension("native_profiler");
        $__internal_d542fa0988c4e808609095841b1547f369dc59a5e5ffa188ae5df40995514e74->enter($__internal_d542fa0988c4e808609095841b1547f369dc59a5e5ffa188ae5df40995514e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_d542fa0988c4e808609095841b1547f369dc59a5e5ffa188ae5df40995514e74->leave($__internal_d542fa0988c4e808609095841b1547f369dc59a5e5ffa188ae5df40995514e74_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_0c91070a8a2e14f37b83b5a25b56059eaa1a8e922ea397b86677f2b158cc847d = $this->env->getExtension("native_profiler");
        $__internal_0c91070a8a2e14f37b83b5a25b56059eaa1a8e922ea397b86677f2b158cc847d->enter($__internal_0c91070a8a2e14f37b83b5a25b56059eaa1a8e922ea397b86677f2b158cc847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_0c91070a8a2e14f37b83b5a25b56059eaa1a8e922ea397b86677f2b158cc847d->leave($__internal_0c91070a8a2e14f37b83b5a25b56059eaa1a8e922ea397b86677f2b158cc847d_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_5e90c11a86a2bca9cc6864d1d007acc7162cd8f7a935526fee53961ea5a9a421 = $this->env->getExtension("native_profiler");
        $__internal_5e90c11a86a2bca9cc6864d1d007acc7162cd8f7a935526fee53961ea5a9a421->enter($__internal_5e90c11a86a2bca9cc6864d1d007acc7162cd8f7a935526fee53961ea5a9a421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_bienvenue");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_5e90c11a86a2bca9cc6864d1d007acc7162cd8f7a935526fee53961ea5a9a421->leave($__internal_5e90c11a86a2bca9cc6864d1d007acc7162cd8f7a935526fee53961ea5a9a421_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_765643137886497d6895c76ff4875859e02f26982db2d1b28aa6b22fc3ca5e89 = $this->env->getExtension("native_profiler");
        $__internal_765643137886497d6895c76ff4875859e02f26982db2d1b28aa6b22fc3ca5e89->enter($__internal_765643137886497d6895c76ff4875859e02f26982db2d1b28aa6b22fc3ca5e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_765643137886497d6895c76ff4875859e02f26982db2d1b28aa6b22fc3ca5e89->leave($__internal_765643137886497d6895c76ff4875859e02f26982db2d1b28aa6b22fc3ca5e89_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_5dbf75a239ca3ba6a9ea95dcf66407c96097ca0a8812468e9a04abb1e301f1b6 = $this->env->getExtension("native_profiler");
        $__internal_5dbf75a239ca3ba6a9ea95dcf66407c96097ca0a8812468e9a04abb1e301f1b6->enter($__internal_5dbf75a239ca3ba6a9ea95dcf66407c96097ca0a8812468e9a04abb1e301f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_5dbf75a239ca3ba6a9ea95dcf66407c96097ca0a8812468e9a04abb1e301f1b6->leave($__internal_5dbf75a239ca3ba6a9ea95dcf66407c96097ca0a8812468e9a04abb1e301f1b6_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_e0e2fa232ccaea88dd73db1e4715fdbc30a55c9eb9b1b1f5e344eab1353e0fca = $this->env->getExtension("native_profiler");
        $__internal_e0e2fa232ccaea88dd73db1e4715fdbc30a55c9eb9b1b1f5e344eab1353e0fca->enter($__internal_e0e2fa232ccaea88dd73db1e4715fdbc30a55c9eb9b1b1f5e344eab1353e0fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-power-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_e0e2fa232ccaea88dd73db1e4715fdbc30a55c9eb9b1b1f5e344eab1353e0fca->leave($__internal_e0e2fa232ccaea88dd73db1e4715fdbc30a55c9eb9b1b1f5e344eab1353e0fca_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c40c820c2c766097cb6b0b0676a88c2aa2fd43cace7a5be9b7a0594e3f3e8bea = $this->env->getExtension("native_profiler");
        $__internal_c40c820c2c766097cb6b0b0676a88c2aa2fd43cace7a5be9b7a0594e3f3e8bea->enter($__internal_c40c820c2c766097cb6b0b0676a88c2aa2fd43cace7a5be9b7a0594e3f3e8bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_c40c820c2c766097cb6b0b0676a88c2aa2fd43cace7a5be9b7a0594e3f3e8bea->leave($__internal_c40c820c2c766097cb6b0b0676a88c2aa2fd43cace7a5be9b7a0594e3f3e8bea_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_acb33c42070c7b3d28afc962511648ff45e879f4d920a32a4952aa228c658f95 = $this->env->getExtension("native_profiler");
        $__internal_acb33c42070c7b3d28afc962511648ff45e879f4d920a32a4952aa228c658f95->enter($__internal_acb33c42070c7b3d28afc962511648ff45e879f4d920a32a4952aa228c658f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_acb33c42070c7b3d28afc962511648ff45e879f4d920a32a4952aa228c658f95->leave($__internal_acb33c42070c7b3d28afc962511648ff45e879f4d920a32a4952aa228c658f95_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b6d33e2ea4dbc0ecc5cac4ed4d8611b256bcba4b67d62e1d53bc433e1f1eeab = $this->env->getExtension("native_profiler");
        $__internal_8b6d33e2ea4dbc0ecc5cac4ed4d8611b256bcba4b67d62e1d53bc433e1f1eeab->enter($__internal_8b6d33e2ea4dbc0ecc5cac4ed4d8611b256bcba4b67d62e1d53bc433e1f1eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8b6d33e2ea4dbc0ecc5cac4ed4d8611b256bcba4b67d62e1d53bc433e1f1eeab->leave($__internal_8b6d33e2ea4dbc0ecc5cac4ed4d8611b256bcba4b67d62e1d53bc433e1f1eeab_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_de4d0ded2350d28da3986c80f1cc1fd76b17ec8b5c48a6dfceb257b988a4a56f = $this->env->getExtension("native_profiler");
        $__internal_de4d0ded2350d28da3986c80f1cc1fd76b17ec8b5c48a6dfceb257b988a4a56f->enter($__internal_de4d0ded2350d28da3986c80f1cc1fd76b17ec8b5c48a6dfceb257b988a4a56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_de4d0ded2350d28da3986c80f1cc1fd76b17ec8b5c48a6dfceb257b988a4a56f->leave($__internal_de4d0ded2350d28da3986c80f1cc1fd76b17ec8b5c48a6dfceb257b988a4a56f_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ab5bd0c1dcdf9474f04125f63745633c2ce225bfd1a081624d86b616286a8de4 = $this->env->getExtension("native_profiler");
        $__internal_ab5bd0c1dcdf9474f04125f63745633c2ce225bfd1a081624d86b616286a8de4->enter($__internal_ab5bd0c1dcdf9474f04125f63745633c2ce225bfd1a081624d86b616286a8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_ab5bd0c1dcdf9474f04125f63745633c2ce225bfd1a081624d86b616286a8de4->leave($__internal_ab5bd0c1dcdf9474f04125f63745633c2ce225bfd1a081624d86b616286a8de4_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c950f218608d4c0262b38d86022c4d80b542db4173b51c6c0faba8f28036fc00 = $this->env->getExtension("native_profiler");
        $__internal_c950f218608d4c0262b38d86022c4d80b542db4173b51c6c0faba8f28036fc00->enter($__internal_c950f218608d4c0262b38d86022c4d80b542db4173b51c6c0faba8f28036fc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_c950f218608d4c0262b38d86022c4d80b542db4173b51c6c0faba8f28036fc00->leave($__internal_c950f218608d4c0262b38d86022c4d80b542db4173b51c6c0faba8f28036fc00_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_9ad3610c930b66b71c2bf2680b977185f37140f9d3ac8b8c609fd21410c08754 = $this->env->getExtension("native_profiler");
        $__internal_9ad3610c930b66b71c2bf2680b977185f37140f9d3ac8b8c609fd21410c08754->enter($__internal_9ad3610c930b66b71c2bf2680b977185f37140f9d3ac8b8c609fd21410c08754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_9ad3610c930b66b71c2bf2680b977185f37140f9d3ac8b8c609fd21410c08754->leave($__internal_9ad3610c930b66b71c2bf2680b977185f37140f9d3ac8b8c609fd21410c08754_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_ca35332972a3684c46d698273b2cd007ebf1ff342e60dac36702b22a27de0871 = $this->env->getExtension("native_profiler");
        $__internal_ca35332972a3684c46d698273b2cd007ebf1ff342e60dac36702b22a27de0871->enter($__internal_ca35332972a3684c46d698273b2cd007ebf1ff342e60dac36702b22a27de0871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ca35332972a3684c46d698273b2cd007ebf1ff342e60dac36702b22a27de0871->leave($__internal_ca35332972a3684c46d698273b2cd007ebf1ff342e60dac36702b22a27de0871_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4d164fc3a066d95d2bfcc1428651e9beb63c1695d32d0341b3934f0baee056a2 = $this->env->getExtension("native_profiler");
        $__internal_4d164fc3a066d95d2bfcc1428651e9beb63c1695d32d0341b3934f0baee056a2->enter($__internal_4d164fc3a066d95d2bfcc1428651e9beb63c1695d32d0341b3934f0baee056a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_4d164fc3a066d95d2bfcc1428651e9beb63c1695d32d0341b3934f0baee056a2->leave($__internal_4d164fc3a066d95d2bfcc1428651e9beb63c1695d32d0341b3934f0baee056a2_prof);

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
/*                             <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('follow_the_rhythm_bienvenue') }}">*/
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
/*                                                     <a href="{{ _logout_path }}"><i class="fa fa-power-off"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>*/
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
