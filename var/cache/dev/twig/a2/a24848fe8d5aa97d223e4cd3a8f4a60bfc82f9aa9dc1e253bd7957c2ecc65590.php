<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a626f612df3afc5599e46e372a090e75dbc12bcdbb56367dfcecafdae6fcdacc extends Twig_Template
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
        $__internal_0175b5013531a3c241135a55383fd837671afa6c2c706df767f71758db72692e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0175b5013531a3c241135a55383fd837671afa6c2c706df767f71758db72692e->enter($__internal_0175b5013531a3c241135a55383fd837671afa6c2c706df767f71758db72692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_bb0533eb3e883dffaae5aa6506fbca50d43fec5860e7c037e43a1a991b333675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0533eb3e883dffaae5aa6506fbca50d43fec5860e7c037e43a1a991b333675->enter($__internal_bb0533eb3e883dffaae5aa6506fbca50d43fec5860e7c037e43a1a991b333675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0175b5013531a3c241135a55383fd837671afa6c2c706df767f71758db72692e->leave($__internal_0175b5013531a3c241135a55383fd837671afa6c2c706df767f71758db72692e_prof);

        
        $__internal_bb0533eb3e883dffaae5aa6506fbca50d43fec5860e7c037e43a1a991b333675->leave($__internal_bb0533eb3e883dffaae5aa6506fbca50d43fec5860e7c037e43a1a991b333675_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
