<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4bf47a1e4e817b09b06dbee1faf6956c31242a2e3af7f83311d161dc5e7a2151 extends Twig_Template
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
        $__internal_7d02c4ab11f54e7ff5984752614b3f25de0f1d081b16decd834d6a5403261ff2 = $this->env->getExtension("native_profiler");
        $__internal_7d02c4ab11f54e7ff5984752614b3f25de0f1d081b16decd834d6a5403261ff2->enter($__internal_7d02c4ab11f54e7ff5984752614b3f25de0f1d081b16decd834d6a5403261ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7d02c4ab11f54e7ff5984752614b3f25de0f1d081b16decd834d6a5403261ff2->leave($__internal_7d02c4ab11f54e7ff5984752614b3f25de0f1d081b16decd834d6a5403261ff2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
