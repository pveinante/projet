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
        $__internal_527407958b781d516b9bf7bc6eba83050397afe3ae81660e8ecf27ff39d247d3 = $this->env->getExtension("native_profiler");
        $__internal_527407958b781d516b9bf7bc6eba83050397afe3ae81660e8ecf27ff39d247d3->enter($__internal_527407958b781d516b9bf7bc6eba83050397afe3ae81660e8ecf27ff39d247d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_527407958b781d516b9bf7bc6eba83050397afe3ae81660e8ecf27ff39d247d3->leave($__internal_527407958b781d516b9bf7bc6eba83050397afe3ae81660e8ecf27ff39d247d3_prof);

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
