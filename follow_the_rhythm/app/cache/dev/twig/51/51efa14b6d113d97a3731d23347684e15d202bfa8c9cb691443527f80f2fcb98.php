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
        $__internal_f4267bd411a61cb7e0c1e4615cf735aadf0af08e8786521edbab221ff17b7363 = $this->env->getExtension("native_profiler");
        $__internal_f4267bd411a61cb7e0c1e4615cf735aadf0af08e8786521edbab221ff17b7363->enter($__internal_f4267bd411a61cb7e0c1e4615cf735aadf0af08e8786521edbab221ff17b7363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f4267bd411a61cb7e0c1e4615cf735aadf0af08e8786521edbab221ff17b7363->leave($__internal_f4267bd411a61cb7e0c1e4615cf735aadf0af08e8786521edbab221ff17b7363_prof);

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
