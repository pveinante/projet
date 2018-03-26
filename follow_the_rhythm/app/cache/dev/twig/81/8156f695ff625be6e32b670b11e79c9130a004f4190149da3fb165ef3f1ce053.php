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
        $__internal_6a0f570ddd6883d20c1e8699969e19c3a79080407d65a7f12c70cadebd13ba46 = $this->env->getExtension("native_profiler");
        $__internal_6a0f570ddd6883d20c1e8699969e19c3a79080407d65a7f12c70cadebd13ba46->enter($__internal_6a0f570ddd6883d20c1e8699969e19c3a79080407d65a7f12c70cadebd13ba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6a0f570ddd6883d20c1e8699969e19c3a79080407d65a7f12c70cadebd13ba46->leave($__internal_6a0f570ddd6883d20c1e8699969e19c3a79080407d65a7f12c70cadebd13ba46_prof);

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
