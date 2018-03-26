<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a5ddf0f90ff930cbf08da731287c9b2488c6af3393566c64c5889aad41706c44 extends Twig_Template
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
        $__internal_b8761bb802adeedd901fe9be8b64c76a1f8fb32a296b185c25faa165772fd070 = $this->env->getExtension("native_profiler");
        $__internal_b8761bb802adeedd901fe9be8b64c76a1f8fb32a296b185c25faa165772fd070->enter($__internal_b8761bb802adeedd901fe9be8b64c76a1f8fb32a296b185c25faa165772fd070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b8761bb802adeedd901fe9be8b64c76a1f8fb32a296b185c25faa165772fd070->leave($__internal_b8761bb802adeedd901fe9be8b64c76a1f8fb32a296b185c25faa165772fd070_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
