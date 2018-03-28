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
        $__internal_2295dd504c2c4d52259e5216fe48c538a5e359a576333f2aa1b1298585ef29c6 = $this->env->getExtension("native_profiler");
        $__internal_2295dd504c2c4d52259e5216fe48c538a5e359a576333f2aa1b1298585ef29c6->enter($__internal_2295dd504c2c4d52259e5216fe48c538a5e359a576333f2aa1b1298585ef29c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2295dd504c2c4d52259e5216fe48c538a5e359a576333f2aa1b1298585ef29c6->leave($__internal_2295dd504c2c4d52259e5216fe48c538a5e359a576333f2aa1b1298585ef29c6_prof);

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
