<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_84bddf4327cba0506b30b977b923a27821080ed5ed10418497d378df1e4835e8 extends Twig_Template
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
        $__internal_15a0b8658763bc4c0063b5d7766a24ab22264f913cb1b3cd05172d32a24ca4ed = $this->env->getExtension("native_profiler");
        $__internal_15a0b8658763bc4c0063b5d7766a24ab22264f913cb1b3cd05172d32a24ca4ed->enter($__internal_15a0b8658763bc4c0063b5d7766a24ab22264f913cb1b3cd05172d32a24ca4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_15a0b8658763bc4c0063b5d7766a24ab22264f913cb1b3cd05172d32a24ca4ed->leave($__internal_15a0b8658763bc4c0063b5d7766a24ab22264f913cb1b3cd05172d32a24ca4ed_prof);

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
