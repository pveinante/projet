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
        $__internal_d4c38e044269ca27ae12eac5598cfc2f50ac88147efb618d15850924f2ab1cc5 = $this->env->getExtension("native_profiler");
        $__internal_d4c38e044269ca27ae12eac5598cfc2f50ac88147efb618d15850924f2ab1cc5->enter($__internal_d4c38e044269ca27ae12eac5598cfc2f50ac88147efb618d15850924f2ab1cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4c38e044269ca27ae12eac5598cfc2f50ac88147efb618d15850924f2ab1cc5->leave($__internal_d4c38e044269ca27ae12eac5598cfc2f50ac88147efb618d15850924f2ab1cc5_prof);

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
