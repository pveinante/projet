<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9bf48e830cb7b5d1aac72cfbb08e31d1300efe36d179cf15ec64bdd333e0f9bd extends Twig_Template
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
        $__internal_dd99817f4dfa01b55574817f800b323933e6026ac19474cd46b9a23e99f46252 = $this->env->getExtension("native_profiler");
        $__internal_dd99817f4dfa01b55574817f800b323933e6026ac19474cd46b9a23e99f46252->enter($__internal_dd99817f4dfa01b55574817f800b323933e6026ac19474cd46b9a23e99f46252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd99817f4dfa01b55574817f800b323933e6026ac19474cd46b9a23e99f46252->leave($__internal_dd99817f4dfa01b55574817f800b323933e6026ac19474cd46b9a23e99f46252_prof);

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
