<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_aee3a781e6bd9a9ce8701acd182e048a0b92d30cb295bdf535c906ff5bbdef63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fea36506c4d7701ee531763829c96affbf5017a6036761253a9603a4c424c30 = $this->env->getExtension("native_profiler");
        $__internal_5fea36506c4d7701ee531763829c96affbf5017a6036761253a9603a4c424c30->enter($__internal_5fea36506c4d7701ee531763829c96affbf5017a6036761253a9603a4c424c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 3
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute(            // line 19
(isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('routing')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fea36506c4d7701ee531763829c96affbf5017a6036761253a9603a4c424c30->leave($__internal_5fea36506c4d7701ee531763829c96affbf5017a6036761253a9603a4c424c30_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c650eb2963e3c1d7ddb98ab20a22b039d4ab68e4b5d7685e820b017a5c6ad24b = $this->env->getExtension("native_profiler");
        $__internal_c650eb2963e3c1d7ddb98ab20a22b039d4ab68e4b5d7685e820b017a5c6ad24b->enter($__internal_c650eb2963e3c1d7ddb98ab20a22b039d4ab68e4b5d7685e820b017a5c6ad24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_c650eb2963e3c1d7ddb98ab20a22b039d4ab68e4b5d7685e820b017a5c6ad24b->leave($__internal_c650eb2963e3c1d7ddb98ab20a22b039d4ab68e4b5d7685e820b017a5c6ad24b_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b887938b6cbd8ae1df883be0bebdeb9acb7154e33f2d5d2fb807b4cb450b0ac5 = $this->env->getExtension("native_profiler");
        $__internal_b887938b6cbd8ae1df883be0bebdeb9acb7154e33f2d5d2fb807b4cb450b0ac5->enter($__internal_b887938b6cbd8ae1df883be0bebdeb9acb7154e33f2d5d2fb807b4cb450b0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b887938b6cbd8ae1df883be0bebdeb9acb7154e33f2d5d2fb807b4cb450b0ac5->leave($__internal_b887938b6cbd8ae1df883be0bebdeb9acb7154e33f2d5d2fb807b4cb450b0ac5_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5ce67ab2bb3eb9ca603781f9105a50a7854cd69e63d79477f5aa631623e88065 = $this->env->getExtension("native_profiler");
        $__internal_5ce67ab2bb3eb9ca603781f9105a50a7854cd69e63d79477f5aa631623e88065->enter($__internal_5ce67ab2bb3eb9ca603781f9105a50a7854cd69e63d79477f5aa631623e88065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('translator')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->transchoice($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "search", array()), "title", array()), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(),             // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d")))) : (            // line 34
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title"))));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('translator')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "list", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d")))) : (            // line 37
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title"))));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5ce67ab2bb3eb9ca603781f9105a50a7854cd69e63d79477f5aa631623e88065->leave($__internal_5ce67ab2bb3eb9ca603781f9105a50a7854cd69e63d79477f5aa631623e88065_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_93f4c93742292ac60ab5468aeb6265d706d248460888f4716ab0dfd6f3fd523c = $this->env->getExtension("native_profiler");
        $__internal_93f4c93742292ac60ab5468aeb6265d706d248460888f4716ab0dfd6f3fd523c->enter($__internal_93f4c93742292ac60ab5468aeb6265d706d248460888f4716ab0dfd6f3fd523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_93f4c93742292ac60ab5468aeb6265d706d248460888f4716ab0dfd6f3fd523c->leave($__internal_93f4c93742292ac60ab5468aeb6265d706d248460888f4716ab0dfd6f3fd523c_prof);

    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_5a075ef0b8ea9037d7c467f6654c879ac487814d6fb1ea15a6c44029e82db7c3 = $this->env->getExtension("native_profiler");
        $__internal_5a075ef0b8ea9037d7c467f6654c879ac487814d6fb1ea15a6c44029e82db7c3->enter($__internal_5a075ef0b8ea9037d7c467f6654c879ac487814d6fb1ea15a6c44029e82db7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_5a075ef0b8ea9037d7c467f6654c879ac487814d6fb1ea15a6c44029e82db7c3->leave($__internal_5a075ef0b8ea9037d7c467f6654c879ac487814d6fb1ea15a6c44029e82db7c3_prof);

    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_3f2c15ffa312c8848fdbb1b8213b87204b7f16732c382403ded0756f7fc19367 = $this->env->getExtension("native_profiler");
        $__internal_3f2c15ffa312c8848fdbb1b8213b87204b7f16732c382403ded0756f7fc19367->enter($__internal_3f2c15ffa312c8848fdbb1b8213b87204b7f16732c382403ded0756f7fc19367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 53
        echo "                    ";
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
        
        $__internal_3f2c15ffa312c8848fdbb1b8213b87204b7f16732c382403ded0756f7fc19367->leave($__internal_3f2c15ffa312c8848fdbb1b8213b87204b7f16732c382403ded0756f7fc19367_prof);

    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_01d87fd866cb51e57ce7392cb6ac98c3e5bb86e7fd2472799a02742443c00076 = $this->env->getExtension("native_profiler");
        $__internal_01d87fd866cb51e57ce7392cb6ac98c3e5bb86e7fd2472799a02742443c00076->enter($__internal_01d87fd866cb51e57ce7392cb6ac98c3e5bb86e7fd2472799a02742443c00076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_01d87fd866cb51e57ce7392cb6ac98c3e5bb86e7fd2472799a02742443c00076->leave($__internal_01d87fd866cb51e57ce7392cb6ac98c3e5bb86e7fd2472799a02742443c00076_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_502471898b7a35957dc83b465c8340b0ce304ecaf163cd4c87fdb0f45d7d1100 = $this->env->getExtension("native_profiler");
        $__internal_502471898b7a35957dc83b465c8340b0ce304ecaf163cd4c87fdb0f45d7d1100->enter($__internal_502471898b7a35957dc83b465c8340b0ce304ecaf163cd4c87fdb0f45d7d1100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()))) : ($this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()))) : ($this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"))), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_502471898b7a35957dc83b465c8340b0ce304ecaf163cd4c87fdb0f45d7d1100->leave($__internal_502471898b7a35957dc83b465c8340b0ce304ecaf163cd4c87fdb0f45d7d1100_prof);

    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_1e371e4bc4034df849dbc1c6efcc98a0d44c78e8889bdf05fd7681410f2e71fa = $this->env->getExtension("native_profiler");
        $__internal_1e371e4bc4034df849dbc1c6efcc98a0d44c78e8889bdf05fd7681410f2e71fa->enter($__internal_1e371e4bc4034df849dbc1c6efcc98a0d44c78e8889bdf05fd7681410f2e71fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d")))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_1e371e4bc4034df849dbc1c6efcc98a0d44c78e8889bdf05fd7681410f2e71fa->leave($__internal_1e371e4bc4034df849dbc1c6efcc98a0d44c78e8889bdf05fd7681410f2e71fa_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_1b656113eb937347455f59783a36a2bc53687299d732a03f791ebfe19f5e4330 = $this->env->getExtension("native_profiler");
        $__internal_1b656113eb937347455f59783a36a2bc53687299d732a03f791ebfe19f5e4330->enter($__internal_1b656113eb937347455f59783a36a2bc53687299d732a03f791ebfe19f5e4330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_1b656113eb937347455f59783a36a2bc53687299d732a03f791ebfe19f5e4330->leave($__internal_1b656113eb937347455f59783a36a2bc53687299d732a03f791ebfe19f5e4330_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_bc243c65adbbee2288cc4531e2644db8df06982172e0c42bd18b3609c98f2c44 = $this->env->getExtension("native_profiler");
        $__internal_bc243c65adbbee2288cc4531e2644db8df06982172e0c42bd18b3609c98f2c44->enter($__internal_bc243c65adbbee2288cc4531e2644db8df06982172e0c42bd18b3609c98f2c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d")));
            // line 110
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_bc243c65adbbee2288cc4531e2644db8df06982172e0c42bd18b3609c98f2c44->leave($__internal_bc243c65adbbee2288cc4531e2644db8df06982172e0c42bd18b3609c98f2c44_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_0d49e1bf881f3365c1929dc1eecb1e6099e6dce1b414f1e99fe567cfd791b94b = $this->env->getExtension("native_profiler");
        $__internal_0d49e1bf881f3365c1929dc1eecb1e6099e6dce1b414f1e99fe567cfd791b94b->enter($__internal_0d49e1bf881f3365c1929dc1eecb1e6099e6dce1b414f1e99fe567cfd791b94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),                 // line 2
(isset($context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"]) ? $context["__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d"] : $this->getContext($context, "__internal_72d53e1604975595c441032a5471be4079486fe7ea61c0b9d1afcf32623fcd6d")));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        
        $__internal_0d49e1bf881f3365c1929dc1eecb1e6099e6dce1b414f1e99fe567cfd791b94b->leave($__internal_0d49e1bf881f3365c1929dc1eecb1e6099e6dce1b414f1e99fe567cfd791b94b_prof);

    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_be688791ba8239a36164c404f54d8e308bd5ed63d9968066ce4615c52e247d25 = $this->env->getExtension("native_profiler");
        $__internal_be688791ba8239a36164c404f54d8e308bd5ed63d9968066ce4615c52e247d25->enter($__internal_be688791ba8239a36164c404f54d8e308bd5ed63d9968066ce4615c52e247d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 154
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 155
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 156
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 157
(isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))), false);
        // line 158
        echo "
                        ";
        
        $__internal_be688791ba8239a36164c404f54d8e308bd5ed63d9968066ce4615c52e247d25->leave($__internal_be688791ba8239a36164c404f54d8e308bd5ed63d9968066ce4615c52e247d25_prof);

    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_4478c301be74fbf722e99e4ad13355c497a82d8f5c707fb9344deb7d578fe2c4 = $this->env->getExtension("native_profiler");
        $__internal_4478c301be74fbf722e99e4ad13355c497a82d8f5c707fb9344deb7d578fe2c4->enter($__internal_4478c301be74fbf722e99e4ad13355c497a82d8f5c707fb9344deb7d578fe2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 176
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_4478c301be74fbf722e99e4ad13355c497a82d8f5c707fb9344deb7d578fe2c4->leave($__internal_4478c301be74fbf722e99e4ad13355c497a82d8f5c707fb9344deb7d578fe2c4_prof);

    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_7e13463f76377098d4cbfcf87be9bb2d6341fc1772032c4e4c1d64eb8a95515a = $this->env->getExtension("native_profiler");
        $__internal_7e13463f76377098d4cbfcf87be9bb2d6341fc1772032c4e4c1d64eb8a95515a->enter($__internal_7e13463f76377098d4cbfcf87be9bb2d6341fc1772032c4e4c1d64eb8a95515a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 180
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 181
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 182
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
(isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "delete_form" =>         // line 188
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 189
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 190
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 191
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 192
        echo "
    ";
        
        $__internal_7e13463f76377098d4cbfcf87be9bb2d6341fc1772032c4e4c1d64eb8a95515a->leave($__internal_7e13463f76377098d4cbfcf87be9bb2d6341fc1772032c4e4c1d64eb8a95515a_prof);

    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_7679821d65ac28404166f406490bddb46b8f985b6a0e4d7ec81a25233dabf21c = $this->env->getExtension("native_profiler");
        $__internal_7679821d65ac28404166f406490bddb46b8f985b6a0e4d7ec81a25233dabf21c->enter($__internal_7679821d65ac28404166f406490bddb46b8f985b6a0e4d7ec81a25233dabf21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_7679821d65ac28404166f406490bddb46b8f985b6a0e4d7ec81a25233dabf21c->leave($__internal_7679821d65ac28404166f406490bddb46b8f985b6a0e4d7ec81a25233dabf21c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 242,  729 => 241,  727 => 240,  693 => 209,  677 => 197,  671 => 196,  663 => 192,  661 => 191,  660 => 190,  659 => 189,  658 => 188,  657 => 187,  656 => 185,  653 => 184,  651 => 182,  650 => 181,  648 => 180,  642 => 179,  632 => 176,  626 => 175,  618 => 158,  616 => 157,  615 => 156,  614 => 155,  613 => 154,  612 => 153,  610 => 152,  604 => 151,  597 => 170,  587 => 166,  583 => 165,  580 => 164,  566 => 162,  562 => 160,  560 => 151,  555 => 150,  552 => 149,  550 => 148,  547 => 147,  538 => 144,  528 => 143,  525 => 142,  523 => 2,  521 => 141,  518 => 140,  514 => 139,  509 => 138,  506 => 137,  504 => 136,  485 => 135,  479 => 134,  471 => 129,  465 => 126,  462 => 125,  460 => 124,  457 => 123,  450 => 121,  444 => 119,  438 => 116,  434 => 115,  429 => 114,  427 => 113,  415 => 112,  412 => 111,  409 => 110,  407 => 2,  405 => 109,  402 => 108,  399 => 107,  395 => 106,  392 => 105,  386 => 104,  379 => 179,  376 => 178,  374 => 175,  368 => 171,  366 => 134,  361 => 131,  359 => 104,  353 => 100,  350 => 99,  344 => 98,  334 => 87,  332 => 2,  330 => 87,  324 => 86,  316 => 85,  313 => 84,  307 => 83,  296 => 71,  294 => 2,  293 => 71,  288 => 69,  283 => 67,  278 => 65,  274 => 64,  270 => 63,  266 => 62,  262 => 61,  259 => 60,  253 => 59,  244 => 76,  242 => 59,  238 => 58,  233 => 57,  227 => 56,  220 => 92,  217 => 91,  214 => 83,  211 => 82,  209 => 81,  206 => 80,  203 => 79,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  186 => 52,  176 => 46,  170 => 45,  160 => 93,  158 => 52,  152 => 48,  150 => 45,  146 => 43,  140 => 42,  129 => 37,  128 => 2,  126 => 37,  123 => 36,  118 => 34,  117 => 2,  115 => 34,  112 => 33,  109 => 32,  107 => 31,  101 => 30,  89 => 28,  77 => 27,  70 => 5,  68 => 25,  65 => 21,  64 => 20,  63 => 19,  62 => 18,  60 => 17,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  54 => 10,  53 => 9,  52 => 8,  51 => 7,  49 => 2,  48 => 3,  47 => 2,  46 => 3,  44 => 2,  42 => 1,  33 => 5,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% trans_default_domain _entity_config.translation_domain %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% set _request_parameters = _request_parameters|default({})|merge({*/
/*     action: app.request.get('action'),*/
/*     entity: _entity_config.name,*/
/*     menuIndex: app.request.get('menuIndex'),*/
/*     submenuIndex: app.request.get('submenuIndex'),*/
/*     sortField: app.request.get('sortField', ''),*/
/*     sortDirection: app.request.get('sortDirection', 'DESC'),*/
/*     page: app.request.get('page', 1)*/
/* }) %}*/
/* */
/* {% if 'search' == app.request.get('action') %}*/
/*     {% set _request_parameters = _request_parameters|merge({*/
/*         query: app.request.get('query')|default(''),*/
/*         sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),*/
/*         sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),*/
/*     }) %}*/
/* {% endif %}*/
/* */
/* {% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}*/
/* */
/* {% block body_id 'easyadmin-list-' ~ _entity_config.name %}*/
/* {% block body_class 'list list-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% if 'search' == app.request.get('action') %}*/
/*         {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}*/
/*         {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}*/
/*     {% else %}*/
/*         {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*         {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block content_header %}*/
/*     <div class="row">*/
/*         <div class="col-sm-5">*/
/*             {% block content_title_wrapper %}*/
/*                 <h1 class="title">{{ block('content_title') }}</h1>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div class="col-sm-7">*/
/*             <div class="global-actions">*/
/*                 {% block global_actions %}*/
/*                     {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}*/
/*                         {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}*/
/* */
/*                         {% block search_action %}*/
/*                             <div class="form-action {{ _action.css_class|default('') }}">*/
/*                                 <form method="get" action="{{ path('easyadmin') }}">*/
/*                                     {% block search_form %}*/
/*                                         <input type="hidden" name="action" value="search">*/
/*                                         <input type="hidden" name="entity" value="{{ _request_parameters.entity }}">*/
/*                                         <input type="hidden" name="sortField" value="{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}">*/
/*                                         <input type="hidden" name="sortDirection" value="{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}">*/
/*                                         <input type="hidden" name="menuIndex" value="{{ _request_parameters.menuIndex }}">*/
/*                                         <input type="hidden" name="submenuIndex" value="{{ _request_parameters.submenuIndex }}">*/
/*                                         <div class="input-group">*/
/*                                             <input class="form-control" type="search" name="query" value="{{ app.request.get('query')|default('') }}">*/
/*                                             <span class="input-group-btn">*/
/*                                                 <button class="btn" type="submit" formtarget="{{ _action.target }}">*/
/*                                                     <i class="fa fa-search"></i>*/
/*                                                     <span class="hidden-xs hidden-sm">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>*/
/*                                                 </button>*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     {% endblock %}*/
/*                                 </form>*/
/*                             </div>*/
/*                         {% endblock search_action %}*/
/*                     {% endif %}*/
/* */
/*                     {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}*/
/*                         {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}*/
/*                         {% block new_action %}*/
/*                             <div class="button-action">*/
/*                                 <a class="{{ _action.css_class|default('') }}" href="{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}" target="{{ _action.target }}">*/
/*                                     {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                     {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endblock new_action %}*/
/*                     {% endif %}*/
/*                 {% endblock global_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content_header %}*/
/* */
/* {% block main %}*/
/*     {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}*/
/* */
/*     <div class="table-responsive">*/
/*     <table class="table">*/
/*         <thead>*/
/*         {% block table_head %}*/
/*             <tr>*/
/*                 {% for field, metadata in fields %}*/
/*                     {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}*/
/*                     {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}*/
/*                     {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}*/
/*                     {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}*/
/* */
/*                     <th data-property-name="{{ metadata.property }}" class="{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}">*/
/*                         {% if metadata.sortable %}*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}">*/
/*                                 <i class="fa {{ _column_icon }}"></i>*/
/*                                 {{ _column_label|raw }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <span>{{ _column_label|raw }}</span>*/
/*                         {% endif %}*/
/*                     </th>*/
/*                 {% endfor %}*/
/* */
/*                 {% if _list_item_actions|length > 0 %}*/
/*                     <th>*/
/*                         <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>*/
/*                     </th>*/
/*                 {% endif %}*/
/*             </tr>*/
/*         {% endblock table_head %}*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         {% block table_body %}*/
/*             {% for item in paginator.currentPageResults %}*/
/*                 {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}*/
/*                 {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}*/
/*                 <tr data-id="{{ _item_id }}">*/
/*                     {% for field, metadata in fields %}*/
/*                         {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/*                         {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}*/
/* */
/*                         <td data-label="{{ _column_label }}" class="{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}">*/
/*                             {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}*/
/*                         </td>*/
/*                     {% endfor %}*/
/* */
/*                     {% if _list_item_actions|length > 0 %}*/
/*                         {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*                         <td data-label="{{ _column_label }}" class="actions">*/
/*                         {% block item_actions %}*/
/*                             {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                                 actions: _list_item_actions,*/
/*                                 request_parameters: _request_parameters,*/
/*                                 translation_domain: _entity_config.translation_domain,*/
/*                                 trans_parameters: _trans_parameters,*/
/*                                 item_id: _item_id*/
/*                             }, with_context = false) }}*/
/*                         {% endblock item_actions %}*/
/*                         </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td class="no-results" colspan="{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}">*/
/*                         {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% endblock table_body %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* */
/*     {% block paginator %}*/
/*         {{ include(_entity_config.templates.paginator) }}*/
/*     {% endblock paginator %}*/
/* */
/*     {% block delete_form %}*/
/*         {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count*/
/*             ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))*/
/*             : app.request.requestUri*/
/*         %}*/
/* */
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'list',*/
/*             referer: referer|url_encode,*/
/*             delete_form: delete_form_template,*/
/*             _translation_domain: _entity_config.translation_domain,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock main %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('#main').find('table .toggle input[type="checkbox"]').change(function() {*/
/*                 var toggle = $(this);*/
/*                 var newValue = toggle.prop('checked');*/
/*                 var oldValue = !newValue;*/
/* */
/*                 var columnIndex = $(this).closest('td').index() + 1;*/
/*                 var propertyName = $('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');*/
/* */
/*                 var toggleUrl = "{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}"*/
/*                               + "&id=" + $(this).closest('tr').data('id')*/
/*                               + "&property=" + propertyName*/
/*                               + "&newValue=" + newValue.toString();*/
/* */
/*                 var toggleRequest = $.ajax({ type: "GET", url: toggleUrl, data: {} });*/
/* */
/*                 toggleRequest.done(function(result) {});*/
/* */
/*                 toggleRequest.fail(function() {*/
/*                     // in case of error, restore the original value and disable the toggle*/
/*                     toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');*/
/*                     toggle.bootstrapToggle('disable');*/
/*                 });*/
/*             });*/
/* */
/*             $('.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/*                 var id = $(this).parents('tr').first().data('id');*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         var deleteForm = $('#delete-form');*/
/*                         deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));*/
/*                         deleteForm.trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {% if 'search' == app.request.get('action') %}*/
/*         <script type="text/javascript">*/
/*             var _search_query = "{{ app.request.get('query')|default('')|e('js') }}";*/
/*             // the original query is prepended to allow matching exact phrases in addition to single words*/
/*             $('#main').find('table tbody').highlight($.merge([_search_query], _search_query.split(' ')));*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
