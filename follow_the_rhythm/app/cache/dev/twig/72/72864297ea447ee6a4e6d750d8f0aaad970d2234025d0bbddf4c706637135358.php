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
        $__internal_848df96704e67a98610d05588f7abf0dc3eaa1d27b7cde908e7f340f95a4f08d = $this->env->getExtension("native_profiler");
        $__internal_848df96704e67a98610d05588f7abf0dc3eaa1d27b7cde908e7f340f95a4f08d->enter($__internal_848df96704e67a98610d05588f7abf0dc3eaa1d27b7cde908e7f340f95a4f08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_848df96704e67a98610d05588f7abf0dc3eaa1d27b7cde908e7f340f95a4f08d->leave($__internal_848df96704e67a98610d05588f7abf0dc3eaa1d27b7cde908e7f340f95a4f08d_prof);

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
