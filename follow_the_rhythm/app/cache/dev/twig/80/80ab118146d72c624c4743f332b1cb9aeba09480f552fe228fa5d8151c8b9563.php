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
        $__internal_5dca1ff140e11bf15bea98b8f934a42891eeee441ec759e388eef7893ef16255 = $this->env->getExtension("native_profiler");
        $__internal_5dca1ff140e11bf15bea98b8f934a42891eeee441ec759e388eef7893ef16255->enter($__internal_5dca1ff140e11bf15bea98b8f934a42891eeee441ec759e388eef7893ef16255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5dca1ff140e11bf15bea98b8f934a42891eeee441ec759e388eef7893ef16255->leave($__internal_5dca1ff140e11bf15bea98b8f934a42891eeee441ec759e388eef7893ef16255_prof);

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
