<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_212fc35b7a73f2fb3681ff924c475a2ec1160d8ca517c14805b39649f3508254 extends Twig_Template
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
        $__internal_02767ed039f80d7ff5baf0d1405c48e9f3daa64f00d1f9cf095e7e31671ac439 = $this->env->getExtension("native_profiler");
        $__internal_02767ed039f80d7ff5baf0d1405c48e9f3daa64f00d1f9cf095e7e31671ac439->enter($__internal_02767ed039f80d7ff5baf0d1405c48e9f3daa64f00d1f9cf095e7e31671ac439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_02767ed039f80d7ff5baf0d1405c48e9f3daa64f00d1f9cf095e7e31671ac439->leave($__internal_02767ed039f80d7ff5baf0d1405c48e9f3daa64f00d1f9cf095e7e31671ac439_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
