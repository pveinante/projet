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
        $__internal_9e4a75a47833c905aebce400fea089228772d506da5d8583deb30ae6a3af366f = $this->env->getExtension("native_profiler");
        $__internal_9e4a75a47833c905aebce400fea089228772d506da5d8583deb30ae6a3af366f->enter($__internal_9e4a75a47833c905aebce400fea089228772d506da5d8583deb30ae6a3af366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9e4a75a47833c905aebce400fea089228772d506da5d8583deb30ae6a3af366f->leave($__internal_9e4a75a47833c905aebce400fea089228772d506da5d8583deb30ae6a3af366f_prof);

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
