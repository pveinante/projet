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
        $__internal_fc53cceba29cc681bd441c2032d8be1ff258475a4a01cdb95a557df2cf83de14 = $this->env->getExtension("native_profiler");
        $__internal_fc53cceba29cc681bd441c2032d8be1ff258475a4a01cdb95a557df2cf83de14->enter($__internal_fc53cceba29cc681bd441c2032d8be1ff258475a4a01cdb95a557df2cf83de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fc53cceba29cc681bd441c2032d8be1ff258475a4a01cdb95a557df2cf83de14->leave($__internal_fc53cceba29cc681bd441c2032d8be1ff258475a4a01cdb95a557df2cf83de14_prof);

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
