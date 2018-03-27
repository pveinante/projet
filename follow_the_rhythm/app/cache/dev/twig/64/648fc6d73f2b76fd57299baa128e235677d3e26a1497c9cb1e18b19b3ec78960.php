<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c45847968c30081f3df7c27d05b06881152ed948170a9543debf7b6a0523a3df extends Twig_Template
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
        $__internal_5ccb174775e03ef6ea5ab98db9bad1c1add125b0aeb2343b28ffbac502ccb8dc = $this->env->getExtension("native_profiler");
        $__internal_5ccb174775e03ef6ea5ab98db9bad1c1add125b0aeb2343b28ffbac502ccb8dc->enter($__internal_5ccb174775e03ef6ea5ab98db9bad1c1add125b0aeb2343b28ffbac502ccb8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5ccb174775e03ef6ea5ab98db9bad1c1add125b0aeb2343b28ffbac502ccb8dc->leave($__internal_5ccb174775e03ef6ea5ab98db9bad1c1add125b0aeb2343b28ffbac502ccb8dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
