<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e329c19291e9bfa8ec48ef213a0ce5f3914c2457dabcebc15deff22f0cdb1fa8 extends Twig_Template
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
        $__internal_0cc9f2dc5567d1bd03c222d7c45a0e0df9a4ee8072788e6d9cb26242e14f6fa8 = $this->env->getExtension("native_profiler");
        $__internal_0cc9f2dc5567d1bd03c222d7c45a0e0df9a4ee8072788e6d9cb26242e14f6fa8->enter($__internal_0cc9f2dc5567d1bd03c222d7c45a0e0df9a4ee8072788e6d9cb26242e14f6fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0cc9f2dc5567d1bd03c222d7c45a0e0df9a4ee8072788e6d9cb26242e14f6fa8->leave($__internal_0cc9f2dc5567d1bd03c222d7c45a0e0df9a4ee8072788e6d9cb26242e14f6fa8_prof);

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
