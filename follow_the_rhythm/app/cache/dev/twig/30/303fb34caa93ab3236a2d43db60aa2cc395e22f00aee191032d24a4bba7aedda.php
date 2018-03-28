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
        $__internal_3c884ea775de5223f1b5913f5381390e8c29ec94496177212a6b1e06dc641f05 = $this->env->getExtension("native_profiler");
        $__internal_3c884ea775de5223f1b5913f5381390e8c29ec94496177212a6b1e06dc641f05->enter($__internal_3c884ea775de5223f1b5913f5381390e8c29ec94496177212a6b1e06dc641f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3c884ea775de5223f1b5913f5381390e8c29ec94496177212a6b1e06dc641f05->leave($__internal_3c884ea775de5223f1b5913f5381390e8c29ec94496177212a6b1e06dc641f05_prof);

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
