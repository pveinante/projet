<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_964e6fd0133c5b1291e0c13267e281780744a73ff163e3478585f50b5f3643bc extends Twig_Template
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
        $__internal_fd20969bdc60cbed903e8e851520153e8645a039fc3ed217ac44acc746b790c1 = $this->env->getExtension("native_profiler");
        $__internal_fd20969bdc60cbed903e8e851520153e8645a039fc3ed217ac44acc746b790c1->enter($__internal_fd20969bdc60cbed903e8e851520153e8645a039fc3ed217ac44acc746b790c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fd20969bdc60cbed903e8e851520153e8645a039fc3ed217ac44acc746b790c1->leave($__internal_fd20969bdc60cbed903e8e851520153e8645a039fc3ed217ac44acc746b790c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */