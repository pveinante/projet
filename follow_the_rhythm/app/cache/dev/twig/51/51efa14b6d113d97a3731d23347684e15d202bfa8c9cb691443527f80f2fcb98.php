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
        $__internal_7da89a84774db3260a105d5a4627992b487e2b28ebdb7fcb280d69fa42d88fdb = $this->env->getExtension("native_profiler");
        $__internal_7da89a84774db3260a105d5a4627992b487e2b28ebdb7fcb280d69fa42d88fdb->enter($__internal_7da89a84774db3260a105d5a4627992b487e2b28ebdb7fcb280d69fa42d88fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7da89a84774db3260a105d5a4627992b487e2b28ebdb7fcb280d69fa42d88fdb->leave($__internal_7da89a84774db3260a105d5a4627992b487e2b28ebdb7fcb280d69fa42d88fdb_prof);

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
