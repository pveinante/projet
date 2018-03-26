<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_620e0cf36c61515d46c8e68c984a92140a2ff489d7dcf9e3b023a9e241b936fb extends Twig_Template
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
        $__internal_5cb0bac0bff1f5e1205483909a2231c21889270e984afaf0623a91aa5090fe3d = $this->env->getExtension("native_profiler");
        $__internal_5cb0bac0bff1f5e1205483909a2231c21889270e984afaf0623a91aa5090fe3d->enter($__internal_5cb0bac0bff1f5e1205483909a2231c21889270e984afaf0623a91aa5090fe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5cb0bac0bff1f5e1205483909a2231c21889270e984afaf0623a91aa5090fe3d->leave($__internal_5cb0bac0bff1f5e1205483909a2231c21889270e984afaf0623a91aa5090fe3d_prof);

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
