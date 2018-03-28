<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2432c81ba5ca7645c17a146eadeed1fb0d15c772441690621221f604810aa034 extends Twig_Template
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
        $__internal_61d0d39fd24f50f246534a612a3ad847b9463fd9522075515a28335246477a10 = $this->env->getExtension("native_profiler");
        $__internal_61d0d39fd24f50f246534a612a3ad847b9463fd9522075515a28335246477a10->enter($__internal_61d0d39fd24f50f246534a612a3ad847b9463fd9522075515a28335246477a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_61d0d39fd24f50f246534a612a3ad847b9463fd9522075515a28335246477a10->leave($__internal_61d0d39fd24f50f246534a612a3ad847b9463fd9522075515a28335246477a10_prof);

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
