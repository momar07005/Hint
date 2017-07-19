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
        $__internal_9bd1cf3f072aa9adc53fa971d22eeeb8319a1fb8cc1e9e86f6628eb8e5dd2158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd1cf3f072aa9adc53fa971d22eeeb8319a1fb8cc1e9e86f6628eb8e5dd2158->enter($__internal_9bd1cf3f072aa9adc53fa971d22eeeb8319a1fb8cc1e9e86f6628eb8e5dd2158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5e9f9d0367c280e3c3c9229cd5639e026f1904fd57ad235ee4ab015f2ab2354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9f9d0367c280e3c3c9229cd5639e026f1904fd57ad235ee4ab015f2ab2354e->enter($__internal_5e9f9d0367c280e3c3c9229cd5639e026f1904fd57ad235ee4ab015f2ab2354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9bd1cf3f072aa9adc53fa971d22eeeb8319a1fb8cc1e9e86f6628eb8e5dd2158->leave($__internal_9bd1cf3f072aa9adc53fa971d22eeeb8319a1fb8cc1e9e86f6628eb8e5dd2158_prof);

        
        $__internal_5e9f9d0367c280e3c3c9229cd5639e026f1904fd57ad235ee4ab015f2ab2354e->leave($__internal_5e9f9d0367c280e3c3c9229cd5639e026f1904fd57ad235ee4ab015f2ab2354e_prof);

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
