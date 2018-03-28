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
        $__internal_a6866af52d87371f72dfcd20dfffa8e4d9294a528bcfc1b83a3160e272fda8d6 = $this->env->getExtension("native_profiler");
        $__internal_a6866af52d87371f72dfcd20dfffa8e4d9294a528bcfc1b83a3160e272fda8d6->enter($__internal_a6866af52d87371f72dfcd20dfffa8e4d9294a528bcfc1b83a3160e272fda8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a6866af52d87371f72dfcd20dfffa8e4d9294a528bcfc1b83a3160e272fda8d6->leave($__internal_a6866af52d87371f72dfcd20dfffa8e4d9294a528bcfc1b83a3160e272fda8d6_prof);

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
