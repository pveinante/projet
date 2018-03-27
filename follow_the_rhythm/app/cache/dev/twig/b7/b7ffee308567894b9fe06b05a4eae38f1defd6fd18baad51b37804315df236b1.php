<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_07f536caf6511ce363ede64be809c5bef6bd0283304ced208172c2cb023e67d1 extends Twig_Template
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
        $__internal_c916c96883c51e180a519f5227639dccabe99b52f36d143504d63b1bc629a981 = $this->env->getExtension("native_profiler");
        $__internal_c916c96883c51e180a519f5227639dccabe99b52f36d143504d63b1bc629a981->enter($__internal_c916c96883c51e180a519f5227639dccabe99b52f36d143504d63b1bc629a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c916c96883c51e180a519f5227639dccabe99b52f36d143504d63b1bc629a981->leave($__internal_c916c96883c51e180a519f5227639dccabe99b52f36d143504d63b1bc629a981_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
