<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7c7d4a3c3f041ff076b53df44c1365600eddfff0f2980ab5c375b5f5f6f76c11 extends Twig_Template
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
        $__internal_957882f20fa6eed27ac56dbb5173cbb5c4d52aa765c66fe81f9537b84432a371 = $this->env->getExtension("native_profiler");
        $__internal_957882f20fa6eed27ac56dbb5173cbb5c4d52aa765c66fe81f9537b84432a371->enter($__internal_957882f20fa6eed27ac56dbb5173cbb5c4d52aa765c66fe81f9537b84432a371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_957882f20fa6eed27ac56dbb5173cbb5c4d52aa765c66fe81f9537b84432a371->leave($__internal_957882f20fa6eed27ac56dbb5173cbb5c4d52aa765c66fe81f9537b84432a371_prof);

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
