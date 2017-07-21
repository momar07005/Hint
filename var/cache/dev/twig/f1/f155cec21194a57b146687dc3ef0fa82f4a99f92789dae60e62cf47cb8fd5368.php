<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_846847d59d535ab819e48078664df382e03400bb78737d2b3772e17e2c859283 extends Twig_Template
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
        $__internal_fcf5e0c843c9b36b6654920b9439fb31f6e18a6abafe100746876b772f63be41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf5e0c843c9b36b6654920b9439fb31f6e18a6abafe100746876b772f63be41->enter($__internal_fcf5e0c843c9b36b6654920b9439fb31f6e18a6abafe100746876b772f63be41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_be455783dc39d197e460a111943a9c28ea55db03b23e0c1aa00f547201154a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be455783dc39d197e460a111943a9c28ea55db03b23e0c1aa00f547201154a8d->enter($__internal_be455783dc39d197e460a111943a9c28ea55db03b23e0c1aa00f547201154a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fcf5e0c843c9b36b6654920b9439fb31f6e18a6abafe100746876b772f63be41->leave($__internal_fcf5e0c843c9b36b6654920b9439fb31f6e18a6abafe100746876b772f63be41_prof);

        
        $__internal_be455783dc39d197e460a111943a9c28ea55db03b23e0c1aa00f547201154a8d->leave($__internal_be455783dc39d197e460a111943a9c28ea55db03b23e0c1aa00f547201154a8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
