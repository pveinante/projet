<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b4b08e524b3bbcbac96e726bb2dc02934c1a334ce78411072cc1ed5cf9ca7fbb extends Twig_Template
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
        $__internal_d75548d2407e428eb233a3065e6a575cf2d275d980611862b75c803624268c8b = $this->env->getExtension("native_profiler");
        $__internal_d75548d2407e428eb233a3065e6a575cf2d275d980611862b75c803624268c8b->enter($__internal_d75548d2407e428eb233a3065e6a575cf2d275d980611862b75c803624268c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d75548d2407e428eb233a3065e6a575cf2d275d980611862b75c803624268c8b->leave($__internal_d75548d2407e428eb233a3065e6a575cf2d275d980611862b75c803624268c8b_prof);

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
