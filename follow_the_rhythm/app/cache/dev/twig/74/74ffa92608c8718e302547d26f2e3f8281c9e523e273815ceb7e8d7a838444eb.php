<?php

/* @EasyAdmin/default/flash_messages.html.twig */
class __TwigTemplate_80e4fb4f0b0d2f56cafc82756a331822b6539125e889628d3acc79cf164adcfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bbe9cb6536404fcd21ef0e9c9c12f3b535b63ca8e5030862849fd79839b88fd = $this->env->getExtension("native_profiler");
        $__internal_8bbe9cb6536404fcd21ef0e9c9c12f3b535b63ca8e5030862849fd79839b88fd->enter($__internal_8bbe9cb6536404fcd21ef0e9c9c12f3b535b63ca8e5030862849fd79839b88fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        // line 1
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array())) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "started", array()))) {
            // line 2
            echo "    <div id=\"flash-messages\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
        
        $__internal_8bbe9cb6536404fcd21ef0e9c9c12f3b535b63ca8e5030862849fd79839b88fd->leave($__internal_8bbe9cb6536404fcd21ef0e9c9c12f3b535b63ca8e5030862849fd79839b88fd_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  50 => 9,  41 => 6,  36 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if app.session is not null and app.session.started %}*/
/*     <div id="flash-messages">*/
/*         {% for label, messages in app.session.flashbag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="alert alert-{{ label }}">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* */
