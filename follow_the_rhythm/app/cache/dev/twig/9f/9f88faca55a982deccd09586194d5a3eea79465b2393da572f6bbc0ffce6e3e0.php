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
        $__internal_f9ecdc5ca23f105b94ef6e4b47f7768fad66ed7d84b55d99570bf3c531295b04 = $this->env->getExtension("native_profiler");
        $__internal_f9ecdc5ca23f105b94ef6e4b47f7768fad66ed7d84b55d99570bf3c531295b04->enter($__internal_f9ecdc5ca23f105b94ef6e4b47f7768fad66ed7d84b55d99570bf3c531295b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f9ecdc5ca23f105b94ef6e4b47f7768fad66ed7d84b55d99570bf3c531295b04->leave($__internal_f9ecdc5ca23f105b94ef6e4b47f7768fad66ed7d84b55d99570bf3c531295b04_prof);

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
