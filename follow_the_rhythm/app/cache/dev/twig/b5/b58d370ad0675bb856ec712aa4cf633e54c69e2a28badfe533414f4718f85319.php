<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a1130a032c967c2aa62cd9e1722929b9988aac09363ee74ed806264dfe54a2e5 extends Twig_Template
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
        $__internal_a891ff5ea035804763365b58e5c9dfeb7f9b9faffd22360196b3cfed720552e4 = $this->env->getExtension("native_profiler");
        $__internal_a891ff5ea035804763365b58e5c9dfeb7f9b9faffd22360196b3cfed720552e4->enter($__internal_a891ff5ea035804763365b58e5c9dfeb7f9b9faffd22360196b3cfed720552e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a891ff5ea035804763365b58e5c9dfeb7f9b9faffd22360196b3cfed720552e4->leave($__internal_a891ff5ea035804763365b58e5c9dfeb7f9b9faffd22360196b3cfed720552e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
