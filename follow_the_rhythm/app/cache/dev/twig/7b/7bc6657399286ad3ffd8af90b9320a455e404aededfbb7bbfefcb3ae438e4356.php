<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e3f4b02a88746234bb43491d9896ffde6bfcdc89ef04caf25f4c4076b4a00861 extends Twig_Template
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
        $__internal_efa31fff47da60135b2139b63728092c912ddda1bb018cb98c4c99c4713cfb9e = $this->env->getExtension("native_profiler");
        $__internal_efa31fff47da60135b2139b63728092c912ddda1bb018cb98c4c99c4713cfb9e->enter($__internal_efa31fff47da60135b2139b63728092c912ddda1bb018cb98c4c99c4713cfb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_efa31fff47da60135b2139b63728092c912ddda1bb018cb98c4c99c4713cfb9e->leave($__internal_efa31fff47da60135b2139b63728092c912ddda1bb018cb98c4c99c4713cfb9e_prof);

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
