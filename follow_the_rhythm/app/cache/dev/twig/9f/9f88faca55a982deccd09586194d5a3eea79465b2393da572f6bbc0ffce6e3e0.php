<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_022611d34c9d335264d095550481d3be224fdeb3352326a0ccc7c7d8a8dbd084 extends Twig_Template
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
        $__internal_49e429766e86fb49eb055b8d1e861489d4573e6b8414cf2fd224e2750a83c418 = $this->env->getExtension("native_profiler");
        $__internal_49e429766e86fb49eb055b8d1e861489d4573e6b8414cf2fd224e2750a83c418->enter($__internal_49e429766e86fb49eb055b8d1e861489d4573e6b8414cf2fd224e2750a83c418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_49e429766e86fb49eb055b8d1e861489d4573e6b8414cf2fd224e2750a83c418->leave($__internal_49e429766e86fb49eb055b8d1e861489d4573e6b8414cf2fd224e2750a83c418_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
