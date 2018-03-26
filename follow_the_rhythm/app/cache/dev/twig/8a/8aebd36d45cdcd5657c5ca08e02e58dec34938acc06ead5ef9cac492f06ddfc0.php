<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_170d33f30c55c4131ad81e3dca966b628e57f0d007083c59678028c21fe47381 extends Twig_Template
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
        $__internal_79cde461e8993f1e930053a7d6a6e0785ed6ee08df220fbbcd2d9fd9337de28c = $this->env->getExtension("native_profiler");
        $__internal_79cde461e8993f1e930053a7d6a6e0785ed6ee08df220fbbcd2d9fd9337de28c->enter($__internal_79cde461e8993f1e930053a7d6a6e0785ed6ee08df220fbbcd2d9fd9337de28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_79cde461e8993f1e930053a7d6a6e0785ed6ee08df220fbbcd2d9fd9337de28c->leave($__internal_79cde461e8993f1e930053a7d6a6e0785ed6ee08df220fbbcd2d9fd9337de28c_prof);

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
