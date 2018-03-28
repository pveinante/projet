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
        $__internal_ccdb2588d77a36da4133bea238b496dd2a0b8af34e629a4e4c11e3fb5b4f76d0 = $this->env->getExtension("native_profiler");
        $__internal_ccdb2588d77a36da4133bea238b496dd2a0b8af34e629a4e4c11e3fb5b4f76d0->enter($__internal_ccdb2588d77a36da4133bea238b496dd2a0b8af34e629a4e4c11e3fb5b4f76d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ccdb2588d77a36da4133bea238b496dd2a0b8af34e629a4e4c11e3fb5b4f76d0->leave($__internal_ccdb2588d77a36da4133bea238b496dd2a0b8af34e629a4e4c11e3fb5b4f76d0_prof);

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
