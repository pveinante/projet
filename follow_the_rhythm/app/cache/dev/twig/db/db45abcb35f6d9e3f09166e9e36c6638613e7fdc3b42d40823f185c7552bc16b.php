<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5f9e42db4e4752d773751e3da2d868bc73231b6fa7916912ea79b3342513cbb9 extends Twig_Template
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
        $__internal_13d3c864645457e1e22ed27749425a2d3c8c1cad1b57229c4829c423e20f63ee = $this->env->getExtension("native_profiler");
        $__internal_13d3c864645457e1e22ed27749425a2d3c8c1cad1b57229c4829c423e20f63ee->enter($__internal_13d3c864645457e1e22ed27749425a2d3c8c1cad1b57229c4829c423e20f63ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_13d3c864645457e1e22ed27749425a2d3c8c1cad1b57229c4829c423e20f63ee->leave($__internal_13d3c864645457e1e22ed27749425a2d3c8c1cad1b57229c4829c423e20f63ee_prof);

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
