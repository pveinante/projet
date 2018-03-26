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
        $__internal_5dd74bc9c2baa50a17b7742e32cc981aa869f0421493b2b76f24749e633d82be = $this->env->getExtension("native_profiler");
        $__internal_5dd74bc9c2baa50a17b7742e32cc981aa869f0421493b2b76f24749e633d82be->enter($__internal_5dd74bc9c2baa50a17b7742e32cc981aa869f0421493b2b76f24749e633d82be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5dd74bc9c2baa50a17b7742e32cc981aa869f0421493b2b76f24749e633d82be->leave($__internal_5dd74bc9c2baa50a17b7742e32cc981aa869f0421493b2b76f24749e633d82be_prof);

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
