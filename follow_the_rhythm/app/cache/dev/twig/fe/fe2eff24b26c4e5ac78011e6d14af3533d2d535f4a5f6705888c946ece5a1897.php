<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1d7f58b72332732ab959aa0ba13a62177e27ec4ae52835639ed589b2d3de288f extends Twig_Template
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
        $__internal_ac89c87391797bded768d4165bbbce619228d6fa5fa4bc66a71ff4220a589c75 = $this->env->getExtension("native_profiler");
        $__internal_ac89c87391797bded768d4165bbbce619228d6fa5fa4bc66a71ff4220a589c75->enter($__internal_ac89c87391797bded768d4165bbbce619228d6fa5fa4bc66a71ff4220a589c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ac89c87391797bded768d4165bbbce619228d6fa5fa4bc66a71ff4220a589c75->leave($__internal_ac89c87391797bded768d4165bbbce619228d6fa5fa4bc66a71ff4220a589c75_prof);

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
