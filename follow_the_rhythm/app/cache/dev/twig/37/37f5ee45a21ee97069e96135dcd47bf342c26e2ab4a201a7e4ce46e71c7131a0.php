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
        $__internal_dfa45ce9d2415136f43a3085d54ade2ef15661d49fb73fc0efcbcec611e1bf92 = $this->env->getExtension("native_profiler");
        $__internal_dfa45ce9d2415136f43a3085d54ade2ef15661d49fb73fc0efcbcec611e1bf92->enter($__internal_dfa45ce9d2415136f43a3085d54ade2ef15661d49fb73fc0efcbcec611e1bf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dfa45ce9d2415136f43a3085d54ade2ef15661d49fb73fc0efcbcec611e1bf92->leave($__internal_dfa45ce9d2415136f43a3085d54ade2ef15661d49fb73fc0efcbcec611e1bf92_prof);

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
