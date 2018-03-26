<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_373f3ac084c06e68755035c1974825d5ed2784613aa751841c6c656c5b59d24e extends Twig_Template
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
        $__internal_060ac375beafd809ab65261f1749d1bc0ebe922dc65c35fa6367f4aa26250939 = $this->env->getExtension("native_profiler");
        $__internal_060ac375beafd809ab65261f1749d1bc0ebe922dc65c35fa6367f4aa26250939->enter($__internal_060ac375beafd809ab65261f1749d1bc0ebe922dc65c35fa6367f4aa26250939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_060ac375beafd809ab65261f1749d1bc0ebe922dc65c35fa6367f4aa26250939->leave($__internal_060ac375beafd809ab65261f1749d1bc0ebe922dc65c35fa6367f4aa26250939_prof);

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
