<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_314f3e7d47426f3263c68eb3a7abc6d61cfbce922250b73edc10ba3cbfe77d77 extends Twig_Template
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
        $__internal_fbfa67d36564bf8c936b9eabfededc8fd6a89fa94de8da85bc9d164b28410647 = $this->env->getExtension("native_profiler");
        $__internal_fbfa67d36564bf8c936b9eabfededc8fd6a89fa94de8da85bc9d164b28410647->enter($__internal_fbfa67d36564bf8c936b9eabfededc8fd6a89fa94de8da85bc9d164b28410647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fbfa67d36564bf8c936b9eabfededc8fd6a89fa94de8da85bc9d164b28410647->leave($__internal_fbfa67d36564bf8c936b9eabfededc8fd6a89fa94de8da85bc9d164b28410647_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
