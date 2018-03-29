<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bec6e216816b503c3e494d0d451371e3d430af1da933469c5ddad570b7cdfe71 extends Twig_Template
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
        $__internal_201c2da0755053c9106bb81c40ab9a2e0bbec1588d82207ce4721bea88be2468 = $this->env->getExtension("native_profiler");
        $__internal_201c2da0755053c9106bb81c40ab9a2e0bbec1588d82207ce4721bea88be2468->enter($__internal_201c2da0755053c9106bb81c40ab9a2e0bbec1588d82207ce4721bea88be2468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_201c2da0755053c9106bb81c40ab9a2e0bbec1588d82207ce4721bea88be2468->leave($__internal_201c2da0755053c9106bb81c40ab9a2e0bbec1588d82207ce4721bea88be2468_prof);

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
