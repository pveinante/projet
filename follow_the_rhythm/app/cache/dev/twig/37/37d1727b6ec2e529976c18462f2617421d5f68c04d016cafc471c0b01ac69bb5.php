<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b72d16b1ac5651b339c8c0b1071b7efb01e0d0b16348e28acd37422f9bc1ccec extends Twig_Template
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
        $__internal_d7674985c7420baecbdb87be18bc9da05549fd9cb0016af0656cf51d879627e0 = $this->env->getExtension("native_profiler");
        $__internal_d7674985c7420baecbdb87be18bc9da05549fd9cb0016af0656cf51d879627e0->enter($__internal_d7674985c7420baecbdb87be18bc9da05549fd9cb0016af0656cf51d879627e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d7674985c7420baecbdb87be18bc9da05549fd9cb0016af0656cf51d879627e0->leave($__internal_d7674985c7420baecbdb87be18bc9da05549fd9cb0016af0656cf51d879627e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
