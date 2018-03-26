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
        $__internal_21cf57bdda673ce73d7d4ad90160b54914f33a471f67bcc8c847d9facfb11e07 = $this->env->getExtension("native_profiler");
        $__internal_21cf57bdda673ce73d7d4ad90160b54914f33a471f67bcc8c847d9facfb11e07->enter($__internal_21cf57bdda673ce73d7d4ad90160b54914f33a471f67bcc8c847d9facfb11e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_21cf57bdda673ce73d7d4ad90160b54914f33a471f67bcc8c847d9facfb11e07->leave($__internal_21cf57bdda673ce73d7d4ad90160b54914f33a471f67bcc8c847d9facfb11e07_prof);

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
