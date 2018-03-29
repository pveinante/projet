<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ca06ce8e698357e092dcc1221aa934419d2c0ff7430513a6d26303e4a3321a6e extends Twig_Template
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
        $__internal_d95c69f99f2fc248e4ddc9612f5bd87ba6ce96e6a60648cb07add0d91a241af7 = $this->env->getExtension("native_profiler");
        $__internal_d95c69f99f2fc248e4ddc9612f5bd87ba6ce96e6a60648cb07add0d91a241af7->enter($__internal_d95c69f99f2fc248e4ddc9612f5bd87ba6ce96e6a60648cb07add0d91a241af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d95c69f99f2fc248e4ddc9612f5bd87ba6ce96e6a60648cb07add0d91a241af7->leave($__internal_d95c69f99f2fc248e4ddc9612f5bd87ba6ce96e6a60648cb07add0d91a241af7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
