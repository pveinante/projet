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
        $__internal_d0ba6aad9ad91067f5251893879e00f6f4b161995b9ff07eb08ee3dc2f5619e6 = $this->env->getExtension("native_profiler");
        $__internal_d0ba6aad9ad91067f5251893879e00f6f4b161995b9ff07eb08ee3dc2f5619e6->enter($__internal_d0ba6aad9ad91067f5251893879e00f6f4b161995b9ff07eb08ee3dc2f5619e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d0ba6aad9ad91067f5251893879e00f6f4b161995b9ff07eb08ee3dc2f5619e6->leave($__internal_d0ba6aad9ad91067f5251893879e00f6f4b161995b9ff07eb08ee3dc2f5619e6_prof);

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
