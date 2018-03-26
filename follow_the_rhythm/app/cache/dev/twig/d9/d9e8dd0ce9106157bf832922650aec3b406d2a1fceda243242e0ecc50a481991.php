<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fe30545c6f15c79a3f09cb3f05e0c19fa132f0ec1548e8f9b07acfde7bb50dc4 extends Twig_Template
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
        $__internal_05734d737d6bb9768178642cb1be2daa0601821438af9b4cca6b044203d715c5 = $this->env->getExtension("native_profiler");
        $__internal_05734d737d6bb9768178642cb1be2daa0601821438af9b4cca6b044203d715c5->enter($__internal_05734d737d6bb9768178642cb1be2daa0601821438af9b4cca6b044203d715c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_05734d737d6bb9768178642cb1be2daa0601821438af9b4cca6b044203d715c5->leave($__internal_05734d737d6bb9768178642cb1be2daa0601821438af9b4cca6b044203d715c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
