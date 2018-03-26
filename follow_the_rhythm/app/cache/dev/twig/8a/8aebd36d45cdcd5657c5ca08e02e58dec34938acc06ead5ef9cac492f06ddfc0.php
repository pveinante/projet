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
        $__internal_3593ac701b86250281dd7783655a5f2375c60a080d5dabb912eacffbf468d91b = $this->env->getExtension("native_profiler");
        $__internal_3593ac701b86250281dd7783655a5f2375c60a080d5dabb912eacffbf468d91b->enter($__internal_3593ac701b86250281dd7783655a5f2375c60a080d5dabb912eacffbf468d91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3593ac701b86250281dd7783655a5f2375c60a080d5dabb912eacffbf468d91b->leave($__internal_3593ac701b86250281dd7783655a5f2375c60a080d5dabb912eacffbf468d91b_prof);

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
