<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7942bddcdcdc99b2d3edb448e19e3211c3a37dbb102e752bc1439de56258fbc2 extends Twig_Template
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
        $__internal_dc8798aa496619b814e9db20846f5a716615f8b1c3ed9b1e379f809a26a399ef = $this->env->getExtension("native_profiler");
        $__internal_dc8798aa496619b814e9db20846f5a716615f8b1c3ed9b1e379f809a26a399ef->enter($__internal_dc8798aa496619b814e9db20846f5a716615f8b1c3ed9b1e379f809a26a399ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dc8798aa496619b814e9db20846f5a716615f8b1c3ed9b1e379f809a26a399ef->leave($__internal_dc8798aa496619b814e9db20846f5a716615f8b1c3ed9b1e379f809a26a399ef_prof);

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
