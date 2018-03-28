<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5f811f63fbe740f967c1f7282466f27722ea854b3022c065da0979e63fdf1a9b extends Twig_Template
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
        $__internal_4b0f4d98f58e857ffd1f9820e466587377960c24694d7d0e7e88e5d240cddc3c = $this->env->getExtension("native_profiler");
        $__internal_4b0f4d98f58e857ffd1f9820e466587377960c24694d7d0e7e88e5d240cddc3c->enter($__internal_4b0f4d98f58e857ffd1f9820e466587377960c24694d7d0e7e88e5d240cddc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4b0f4d98f58e857ffd1f9820e466587377960c24694d7d0e7e88e5d240cddc3c->leave($__internal_4b0f4d98f58e857ffd1f9820e466587377960c24694d7d0e7e88e5d240cddc3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
