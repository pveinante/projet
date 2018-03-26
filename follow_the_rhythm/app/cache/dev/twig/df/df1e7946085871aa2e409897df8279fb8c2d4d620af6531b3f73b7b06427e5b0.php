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
        $__internal_5bb931a91c071e567e8e20899adeeefe6fdb83cea5fb33a141849213b033b671 = $this->env->getExtension("native_profiler");
        $__internal_5bb931a91c071e567e8e20899adeeefe6fdb83cea5fb33a141849213b033b671->enter($__internal_5bb931a91c071e567e8e20899adeeefe6fdb83cea5fb33a141849213b033b671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5bb931a91c071e567e8e20899adeeefe6fdb83cea5fb33a141849213b033b671->leave($__internal_5bb931a91c071e567e8e20899adeeefe6fdb83cea5fb33a141849213b033b671_prof);

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
