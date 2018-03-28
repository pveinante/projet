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
        $__internal_eeac64816e632576fdfeb9b4d25933c7d5ed651c719e74c63c8b98c26f00ca40 = $this->env->getExtension("native_profiler");
        $__internal_eeac64816e632576fdfeb9b4d25933c7d5ed651c719e74c63c8b98c26f00ca40->enter($__internal_eeac64816e632576fdfeb9b4d25933c7d5ed651c719e74c63c8b98c26f00ca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_eeac64816e632576fdfeb9b4d25933c7d5ed651c719e74c63c8b98c26f00ca40->leave($__internal_eeac64816e632576fdfeb9b4d25933c7d5ed651c719e74c63c8b98c26f00ca40_prof);

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
