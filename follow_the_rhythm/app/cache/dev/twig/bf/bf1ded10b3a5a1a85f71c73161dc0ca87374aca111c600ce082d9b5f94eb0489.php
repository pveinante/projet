<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_103f1f5aaaf9855a29e06d2fea784d66e945d53ce799a5c0a0ed9a470811dafe extends Twig_Template
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
        $__internal_4f331e7b4f19c1caf9ef03052203f817d0c189553cf14d9f3a445f404b00b9dc = $this->env->getExtension("native_profiler");
        $__internal_4f331e7b4f19c1caf9ef03052203f817d0c189553cf14d9f3a445f404b00b9dc->enter($__internal_4f331e7b4f19c1caf9ef03052203f817d0c189553cf14d9f3a445f404b00b9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4f331e7b4f19c1caf9ef03052203f817d0c189553cf14d9f3a445f404b00b9dc->leave($__internal_4f331e7b4f19c1caf9ef03052203f817d0c189553cf14d9f3a445f404b00b9dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
