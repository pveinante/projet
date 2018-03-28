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
        $__internal_9876de8b933fd58e3d415c04aa1908ee39c29e5c1a358b00b6b083289ea16a49 = $this->env->getExtension("native_profiler");
        $__internal_9876de8b933fd58e3d415c04aa1908ee39c29e5c1a358b00b6b083289ea16a49->enter($__internal_9876de8b933fd58e3d415c04aa1908ee39c29e5c1a358b00b6b083289ea16a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9876de8b933fd58e3d415c04aa1908ee39c29e5c1a358b00b6b083289ea16a49->leave($__internal_9876de8b933fd58e3d415c04aa1908ee39c29e5c1a358b00b6b083289ea16a49_prof);

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
