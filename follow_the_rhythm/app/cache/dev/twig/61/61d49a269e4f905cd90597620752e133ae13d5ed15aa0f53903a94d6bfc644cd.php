<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_79c987e68990140d84c54f29e0adb5c6649566062505702a626d63b9226a14c2 extends Twig_Template
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
        $__internal_9bd149dfb8f9b515582fc005849c8885d55522918cade09a445ba2144e906612 = $this->env->getExtension("native_profiler");
        $__internal_9bd149dfb8f9b515582fc005849c8885d55522918cade09a445ba2144e906612->enter($__internal_9bd149dfb8f9b515582fc005849c8885d55522918cade09a445ba2144e906612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9bd149dfb8f9b515582fc005849c8885d55522918cade09a445ba2144e906612->leave($__internal_9bd149dfb8f9b515582fc005849c8885d55522918cade09a445ba2144e906612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
