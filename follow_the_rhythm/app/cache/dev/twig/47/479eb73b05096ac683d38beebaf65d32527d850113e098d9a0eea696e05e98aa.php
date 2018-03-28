<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cef7451a64f7923873e570b666a717e051aad97d1ae49ded843f739f016765ac extends Twig_Template
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
        $__internal_10e91bb9a1b6268cfb58956c75913eea90101eff5f3602ceb23484964b96d5e7 = $this->env->getExtension("native_profiler");
        $__internal_10e91bb9a1b6268cfb58956c75913eea90101eff5f3602ceb23484964b96d5e7->enter($__internal_10e91bb9a1b6268cfb58956c75913eea90101eff5f3602ceb23484964b96d5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_10e91bb9a1b6268cfb58956c75913eea90101eff5f3602ceb23484964b96d5e7->leave($__internal_10e91bb9a1b6268cfb58956c75913eea90101eff5f3602ceb23484964b96d5e7_prof);

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
