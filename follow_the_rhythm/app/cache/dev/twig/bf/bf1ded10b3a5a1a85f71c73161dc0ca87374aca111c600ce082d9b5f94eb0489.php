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
        $__internal_abefe229f1fa9531759ec9ba8cc0e37a7f3bbe6f3c9c37486cdcf8eb8437cf85 = $this->env->getExtension("native_profiler");
        $__internal_abefe229f1fa9531759ec9ba8cc0e37a7f3bbe6f3c9c37486cdcf8eb8437cf85->enter($__internal_abefe229f1fa9531759ec9ba8cc0e37a7f3bbe6f3c9c37486cdcf8eb8437cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_abefe229f1fa9531759ec9ba8cc0e37a7f3bbe6f3c9c37486cdcf8eb8437cf85->leave($__internal_abefe229f1fa9531759ec9ba8cc0e37a7f3bbe6f3c9c37486cdcf8eb8437cf85_prof);

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
