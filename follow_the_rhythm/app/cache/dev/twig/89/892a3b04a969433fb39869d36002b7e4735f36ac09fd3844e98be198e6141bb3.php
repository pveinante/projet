<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6491cbc1c24035968def11ad9a1d198338c156e602f29cc7a12f08f3f0d02bbc extends Twig_Template
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
        $__internal_b19d84b0f9fafc6af0ea12e7ef55dc5799a91c8605221952ea05b30f626f52f2 = $this->env->getExtension("native_profiler");
        $__internal_b19d84b0f9fafc6af0ea12e7ef55dc5799a91c8605221952ea05b30f626f52f2->enter($__internal_b19d84b0f9fafc6af0ea12e7ef55dc5799a91c8605221952ea05b30f626f52f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b19d84b0f9fafc6af0ea12e7ef55dc5799a91c8605221952ea05b30f626f52f2->leave($__internal_b19d84b0f9fafc6af0ea12e7ef55dc5799a91c8605221952ea05b30f626f52f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
