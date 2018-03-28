<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ba6d59bd5f38bce2cffddeb265066965b78517cc53682a1bff12fea56c795ff9 extends Twig_Template
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
        $__internal_928549c87a4908f50f7b099c52ba4b6ab05282e78f1c3bebb0fc9051bfb1661b = $this->env->getExtension("native_profiler");
        $__internal_928549c87a4908f50f7b099c52ba4b6ab05282e78f1c3bebb0fc9051bfb1661b->enter($__internal_928549c87a4908f50f7b099c52ba4b6ab05282e78f1c3bebb0fc9051bfb1661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_928549c87a4908f50f7b099c52ba4b6ab05282e78f1c3bebb0fc9051bfb1661b->leave($__internal_928549c87a4908f50f7b099c52ba4b6ab05282e78f1c3bebb0fc9051bfb1661b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
