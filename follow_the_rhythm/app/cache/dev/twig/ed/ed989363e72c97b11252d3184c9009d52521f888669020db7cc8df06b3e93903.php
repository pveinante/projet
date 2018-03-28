<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_84bddf4327cba0506b30b977b923a27821080ed5ed10418497d378df1e4835e8 extends Twig_Template
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
        $__internal_edaeee43ad72b86f562fe43f34471835f1b7da73e823808ca15873ed8682c5e1 = $this->env->getExtension("native_profiler");
        $__internal_edaeee43ad72b86f562fe43f34471835f1b7da73e823808ca15873ed8682c5e1->enter($__internal_edaeee43ad72b86f562fe43f34471835f1b7da73e823808ca15873ed8682c5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_edaeee43ad72b86f562fe43f34471835f1b7da73e823808ca15873ed8682c5e1->leave($__internal_edaeee43ad72b86f562fe43f34471835f1b7da73e823808ca15873ed8682c5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
