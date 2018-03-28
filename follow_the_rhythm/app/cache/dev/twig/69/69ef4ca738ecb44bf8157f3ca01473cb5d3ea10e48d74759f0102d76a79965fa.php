<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7942bddcdcdc99b2d3edb448e19e3211c3a37dbb102e752bc1439de56258fbc2 extends Twig_Template
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
        $__internal_c3a5331e4b45610c94652ab9a3a6f3a98ec955bb7043ee79130f99b85ddec209 = $this->env->getExtension("native_profiler");
        $__internal_c3a5331e4b45610c94652ab9a3a6f3a98ec955bb7043ee79130f99b85ddec209->enter($__internal_c3a5331e4b45610c94652ab9a3a6f3a98ec955bb7043ee79130f99b85ddec209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c3a5331e4b45610c94652ab9a3a6f3a98ec955bb7043ee79130f99b85ddec209->leave($__internal_c3a5331e4b45610c94652ab9a3a6f3a98ec955bb7043ee79130f99b85ddec209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
