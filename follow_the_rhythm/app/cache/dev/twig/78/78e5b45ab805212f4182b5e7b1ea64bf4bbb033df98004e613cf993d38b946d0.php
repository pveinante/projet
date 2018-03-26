<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_242aebdce7c6e59f4917c70cf1fcb988af502c9c59215c9337e9c3ba2727f243 extends Twig_Template
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
        $__internal_4e1c171aabade4f4a276dc84ca8573ba298be6854fb92d998fb26db8f3da1848 = $this->env->getExtension("native_profiler");
        $__internal_4e1c171aabade4f4a276dc84ca8573ba298be6854fb92d998fb26db8f3da1848->enter($__internal_4e1c171aabade4f4a276dc84ca8573ba298be6854fb92d998fb26db8f3da1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4e1c171aabade4f4a276dc84ca8573ba298be6854fb92d998fb26db8f3da1848->leave($__internal_4e1c171aabade4f4a276dc84ca8573ba298be6854fb92d998fb26db8f3da1848_prof);

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
