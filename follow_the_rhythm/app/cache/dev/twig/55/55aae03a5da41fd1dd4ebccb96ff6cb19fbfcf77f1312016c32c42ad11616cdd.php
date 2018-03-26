<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0eea91a74135c924432a6e9d1f65baf8e3eea7b493ff766e1357ffc3e5628331 extends Twig_Template
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
        $__internal_54c50b826dafe1bbc1141ddb4a25acd53b2ce50a24212631d2532cb749bd1ebb = $this->env->getExtension("native_profiler");
        $__internal_54c50b826dafe1bbc1141ddb4a25acd53b2ce50a24212631d2532cb749bd1ebb->enter($__internal_54c50b826dafe1bbc1141ddb4a25acd53b2ce50a24212631d2532cb749bd1ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_54c50b826dafe1bbc1141ddb4a25acd53b2ce50a24212631d2532cb749bd1ebb->leave($__internal_54c50b826dafe1bbc1141ddb4a25acd53b2ce50a24212631d2532cb749bd1ebb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
