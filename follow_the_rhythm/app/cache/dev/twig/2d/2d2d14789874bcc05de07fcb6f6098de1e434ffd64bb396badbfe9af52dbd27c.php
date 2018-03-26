<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ee84d8f7e1215e09c43e61ba68636ceaeb415172a1cdc37cc827e24d0242c698 extends Twig_Template
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
        $__internal_ae6c5a19d80cab9e2fe7362c0a17d0618c577d92cb725a64f2f5ac47425aa6f0 = $this->env->getExtension("native_profiler");
        $__internal_ae6c5a19d80cab9e2fe7362c0a17d0618c577d92cb725a64f2f5ac47425aa6f0->enter($__internal_ae6c5a19d80cab9e2fe7362c0a17d0618c577d92cb725a64f2f5ac47425aa6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ae6c5a19d80cab9e2fe7362c0a17d0618c577d92cb725a64f2f5ac47425aa6f0->leave($__internal_ae6c5a19d80cab9e2fe7362c0a17d0618c577d92cb725a64f2f5ac47425aa6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
