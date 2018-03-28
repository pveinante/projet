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
        $__internal_78ee0a0407eb5ca049c5b3bd7357c04d403c6ef51eef09774ddd30f94232c12d = $this->env->getExtension("native_profiler");
        $__internal_78ee0a0407eb5ca049c5b3bd7357c04d403c6ef51eef09774ddd30f94232c12d->enter($__internal_78ee0a0407eb5ca049c5b3bd7357c04d403c6ef51eef09774ddd30f94232c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_78ee0a0407eb5ca049c5b3bd7357c04d403c6ef51eef09774ddd30f94232c12d->leave($__internal_78ee0a0407eb5ca049c5b3bd7357c04d403c6ef51eef09774ddd30f94232c12d_prof);

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
