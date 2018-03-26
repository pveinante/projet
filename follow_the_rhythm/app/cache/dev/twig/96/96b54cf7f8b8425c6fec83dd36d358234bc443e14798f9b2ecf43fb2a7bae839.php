<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4f59aa4a06efbf87f4afc5a659a7cc080ac4959bbc4f331eeca4a7c6b431ec6d extends Twig_Template
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
        $__internal_65a3fb960bb7c5bcac2eee6899ff741aec212c824eb3b85e30eb927842fa0505 = $this->env->getExtension("native_profiler");
        $__internal_65a3fb960bb7c5bcac2eee6899ff741aec212c824eb3b85e30eb927842fa0505->enter($__internal_65a3fb960bb7c5bcac2eee6899ff741aec212c824eb3b85e30eb927842fa0505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_65a3fb960bb7c5bcac2eee6899ff741aec212c824eb3b85e30eb927842fa0505->leave($__internal_65a3fb960bb7c5bcac2eee6899ff741aec212c824eb3b85e30eb927842fa0505_prof);

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
