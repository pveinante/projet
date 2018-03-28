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
        $__internal_00c467a769b4fbae90c039ccdfed21a7488913ddd0ee659ec53a6b6cc353356f = $this->env->getExtension("native_profiler");
        $__internal_00c467a769b4fbae90c039ccdfed21a7488913ddd0ee659ec53a6b6cc353356f->enter($__internal_00c467a769b4fbae90c039ccdfed21a7488913ddd0ee659ec53a6b6cc353356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_00c467a769b4fbae90c039ccdfed21a7488913ddd0ee659ec53a6b6cc353356f->leave($__internal_00c467a769b4fbae90c039ccdfed21a7488913ddd0ee659ec53a6b6cc353356f_prof);

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
