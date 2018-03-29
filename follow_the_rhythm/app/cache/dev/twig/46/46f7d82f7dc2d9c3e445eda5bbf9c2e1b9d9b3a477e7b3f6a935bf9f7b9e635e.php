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
        $__internal_9b3f26080f8f2770d6203c7038219914f3e11016df59b227acc0904eb92559ad = $this->env->getExtension("native_profiler");
        $__internal_9b3f26080f8f2770d6203c7038219914f3e11016df59b227acc0904eb92559ad->enter($__internal_9b3f26080f8f2770d6203c7038219914f3e11016df59b227acc0904eb92559ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9b3f26080f8f2770d6203c7038219914f3e11016df59b227acc0904eb92559ad->leave($__internal_9b3f26080f8f2770d6203c7038219914f3e11016df59b227acc0904eb92559ad_prof);

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
