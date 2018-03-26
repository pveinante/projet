<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e667d1a6db46103371b8dfeb8dec5f54bd5625cb2860823ef858c422e7316af7 extends Twig_Template
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
        $__internal_0650c111cca77d8a4c0c2a4899cbe6f1fcd0132bd981728800221e8c2cbd2256 = $this->env->getExtension("native_profiler");
        $__internal_0650c111cca77d8a4c0c2a4899cbe6f1fcd0132bd981728800221e8c2cbd2256->enter($__internal_0650c111cca77d8a4c0c2a4899cbe6f1fcd0132bd981728800221e8c2cbd2256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0650c111cca77d8a4c0c2a4899cbe6f1fcd0132bd981728800221e8c2cbd2256->leave($__internal_0650c111cca77d8a4c0c2a4899cbe6f1fcd0132bd981728800221e8c2cbd2256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
