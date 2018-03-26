<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4a759f8990fad15cb77017c53f0e2238955ea28f75dc3f8e04d521df88ea93ae extends Twig_Template
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
        $__internal_b69b308d7fc863592641456c90fcd8170c8b5ca7500c607beb39577705f55f99 = $this->env->getExtension("native_profiler");
        $__internal_b69b308d7fc863592641456c90fcd8170c8b5ca7500c607beb39577705f55f99->enter($__internal_b69b308d7fc863592641456c90fcd8170c8b5ca7500c607beb39577705f55f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b69b308d7fc863592641456c90fcd8170c8b5ca7500c607beb39577705f55f99->leave($__internal_b69b308d7fc863592641456c90fcd8170c8b5ca7500c607beb39577705f55f99_prof);

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
