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
        $__internal_28336085c8089f332e221b2c2989c03fce89b9ce1ef1775b05012d9523952015 = $this->env->getExtension("native_profiler");
        $__internal_28336085c8089f332e221b2c2989c03fce89b9ce1ef1775b05012d9523952015->enter($__internal_28336085c8089f332e221b2c2989c03fce89b9ce1ef1775b05012d9523952015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_28336085c8089f332e221b2c2989c03fce89b9ce1ef1775b05012d9523952015->leave($__internal_28336085c8089f332e221b2c2989c03fce89b9ce1ef1775b05012d9523952015_prof);

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
