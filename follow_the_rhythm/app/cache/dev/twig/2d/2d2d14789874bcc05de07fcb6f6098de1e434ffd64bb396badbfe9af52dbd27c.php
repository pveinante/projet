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
        $__internal_dc887a5a1b57e76172a7a3d7b23e35aca2e3276c7dbb24e7fdb203734d98a9b3 = $this->env->getExtension("native_profiler");
        $__internal_dc887a5a1b57e76172a7a3d7b23e35aca2e3276c7dbb24e7fdb203734d98a9b3->enter($__internal_dc887a5a1b57e76172a7a3d7b23e35aca2e3276c7dbb24e7fdb203734d98a9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dc887a5a1b57e76172a7a3d7b23e35aca2e3276c7dbb24e7fdb203734d98a9b3->leave($__internal_dc887a5a1b57e76172a7a3d7b23e35aca2e3276c7dbb24e7fdb203734d98a9b3_prof);

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
