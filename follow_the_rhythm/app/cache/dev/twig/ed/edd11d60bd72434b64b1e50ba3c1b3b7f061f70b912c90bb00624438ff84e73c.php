<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cd85368c2c1e46250ce1e655810555ff1016927aaab1498b4e85cd575e9e58de extends Twig_Template
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
        $__internal_673735a983e07c617c978353750570f9e1165aa8d86a916e0c7d1aade2e35382 = $this->env->getExtension("native_profiler");
        $__internal_673735a983e07c617c978353750570f9e1165aa8d86a916e0c7d1aade2e35382->enter($__internal_673735a983e07c617c978353750570f9e1165aa8d86a916e0c7d1aade2e35382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_673735a983e07c617c978353750570f9e1165aa8d86a916e0c7d1aade2e35382->leave($__internal_673735a983e07c617c978353750570f9e1165aa8d86a916e0c7d1aade2e35382_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
