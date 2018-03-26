<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8be439cb331bad3c52768b67670b1f92819e8a19d46065aee83ad72b1d5f27f9 extends Twig_Template
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
        $__internal_e09465134a9c806ffe5235f723129105fbd70822557366e8374199fd52b756eb = $this->env->getExtension("native_profiler");
        $__internal_e09465134a9c806ffe5235f723129105fbd70822557366e8374199fd52b756eb->enter($__internal_e09465134a9c806ffe5235f723129105fbd70822557366e8374199fd52b756eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e09465134a9c806ffe5235f723129105fbd70822557366e8374199fd52b756eb->leave($__internal_e09465134a9c806ffe5235f723129105fbd70822557366e8374199fd52b756eb_prof);

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
