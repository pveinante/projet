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
        $__internal_03aa488937bb613d4602dd05b4056ddc848cc23456966e64cc30f2d854567e67 = $this->env->getExtension("native_profiler");
        $__internal_03aa488937bb613d4602dd05b4056ddc848cc23456966e64cc30f2d854567e67->enter($__internal_03aa488937bb613d4602dd05b4056ddc848cc23456966e64cc30f2d854567e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_03aa488937bb613d4602dd05b4056ddc848cc23456966e64cc30f2d854567e67->leave($__internal_03aa488937bb613d4602dd05b4056ddc848cc23456966e64cc30f2d854567e67_prof);

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
