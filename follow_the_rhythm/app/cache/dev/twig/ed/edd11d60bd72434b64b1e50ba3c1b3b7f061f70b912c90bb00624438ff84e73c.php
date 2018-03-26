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
        $__internal_e4a5a6057284431f5e8e4ac5ef0cdaebb2d97eccdda99fb28e20dccb72e7f55f = $this->env->getExtension("native_profiler");
        $__internal_e4a5a6057284431f5e8e4ac5ef0cdaebb2d97eccdda99fb28e20dccb72e7f55f->enter($__internal_e4a5a6057284431f5e8e4ac5ef0cdaebb2d97eccdda99fb28e20dccb72e7f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e4a5a6057284431f5e8e4ac5ef0cdaebb2d97eccdda99fb28e20dccb72e7f55f->leave($__internal_e4a5a6057284431f5e8e4ac5ef0cdaebb2d97eccdda99fb28e20dccb72e7f55f_prof);

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
