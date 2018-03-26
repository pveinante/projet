<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9dee3b1984dcca71f63a0bf9987ef11dc4fe4f0f6f16f5a218d164529c2fd4b6 extends Twig_Template
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
        $__internal_6a47959313a2ab93819d197ae2d307faa97760a1103a24b96de09a30761fc7ad = $this->env->getExtension("native_profiler");
        $__internal_6a47959313a2ab93819d197ae2d307faa97760a1103a24b96de09a30761fc7ad->enter($__internal_6a47959313a2ab93819d197ae2d307faa97760a1103a24b96de09a30761fc7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6a47959313a2ab93819d197ae2d307faa97760a1103a24b96de09a30761fc7ad->leave($__internal_6a47959313a2ab93819d197ae2d307faa97760a1103a24b96de09a30761fc7ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
