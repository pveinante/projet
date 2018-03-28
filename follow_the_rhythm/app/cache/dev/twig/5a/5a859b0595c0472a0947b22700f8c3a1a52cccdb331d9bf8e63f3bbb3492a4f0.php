<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8adb67643d7ce560b9d1e09c8d318fd7ee7b1778c054882d27aa19a40704b09c extends Twig_Template
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
        $__internal_b92a07aa6b9015fd957144469733afc839583141880788e37632d7ae197d181f = $this->env->getExtension("native_profiler");
        $__internal_b92a07aa6b9015fd957144469733afc839583141880788e37632d7ae197d181f->enter($__internal_b92a07aa6b9015fd957144469733afc839583141880788e37632d7ae197d181f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b92a07aa6b9015fd957144469733afc839583141880788e37632d7ae197d181f->leave($__internal_b92a07aa6b9015fd957144469733afc839583141880788e37632d7ae197d181f_prof);

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
