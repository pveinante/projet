<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7a2abeeee3a75931d70e0e07f559400e1ad7a9e80adb4e1d9799ed75a90e6b54 extends Twig_Template
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
        $__internal_c5d44fafb36efce04ff5fb8099d1ef3e614ad65634d16967396ebc5bae5b3af5 = $this->env->getExtension("native_profiler");
        $__internal_c5d44fafb36efce04ff5fb8099d1ef3e614ad65634d16967396ebc5bae5b3af5->enter($__internal_c5d44fafb36efce04ff5fb8099d1ef3e614ad65634d16967396ebc5bae5b3af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c5d44fafb36efce04ff5fb8099d1ef3e614ad65634d16967396ebc5bae5b3af5->leave($__internal_c5d44fafb36efce04ff5fb8099d1ef3e614ad65634d16967396ebc5bae5b3af5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
