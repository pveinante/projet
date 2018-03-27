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
        $__internal_bc61b0e24d2eb4cd0e00f618f216b6e0e0c57193eef2afa320ae2eaffe131157 = $this->env->getExtension("native_profiler");
        $__internal_bc61b0e24d2eb4cd0e00f618f216b6e0e0c57193eef2afa320ae2eaffe131157->enter($__internal_bc61b0e24d2eb4cd0e00f618f216b6e0e0c57193eef2afa320ae2eaffe131157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_bc61b0e24d2eb4cd0e00f618f216b6e0e0c57193eef2afa320ae2eaffe131157->leave($__internal_bc61b0e24d2eb4cd0e00f618f216b6e0e0c57193eef2afa320ae2eaffe131157_prof);

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
