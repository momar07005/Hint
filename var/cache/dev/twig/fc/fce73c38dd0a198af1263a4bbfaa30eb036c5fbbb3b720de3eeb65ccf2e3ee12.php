<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2155ff6232b76b6050d333f37dab911dd9cf5efd7d685be626f78f11c66efb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43bfce3f8b22d4dfd59774b41636c6ef94c4499c1ac64217e93d8d309865550b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bfce3f8b22d4dfd59774b41636c6ef94c4499c1ac64217e93d8d309865550b->enter($__internal_43bfce3f8b22d4dfd59774b41636c6ef94c4499c1ac64217e93d8d309865550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_96e66c1bc9e1cbc6fe705a17ee71710b68cb41c13504b01cc41ec465a7519dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e66c1bc9e1cbc6fe705a17ee71710b68cb41c13504b01cc41ec465a7519dbf->enter($__internal_96e66c1bc9e1cbc6fe705a17ee71710b68cb41c13504b01cc41ec465a7519dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43bfce3f8b22d4dfd59774b41636c6ef94c4499c1ac64217e93d8d309865550b->leave($__internal_43bfce3f8b22d4dfd59774b41636c6ef94c4499c1ac64217e93d8d309865550b_prof);

        
        $__internal_96e66c1bc9e1cbc6fe705a17ee71710b68cb41c13504b01cc41ec465a7519dbf->leave($__internal_96e66c1bc9e1cbc6fe705a17ee71710b68cb41c13504b01cc41ec465a7519dbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7e4c0ad9715dcd5c7d958328a49dedc6c79c4bcc1ba09eb033ca070516ce453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e4c0ad9715dcd5c7d958328a49dedc6c79c4bcc1ba09eb033ca070516ce453->enter($__internal_c7e4c0ad9715dcd5c7d958328a49dedc6c79c4bcc1ba09eb033ca070516ce453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a883c02293285f984a0653e9c9a341fb01b0e121b626c6038aa4581b87fd997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a883c02293285f984a0653e9c9a341fb01b0e121b626c6038aa4581b87fd997->enter($__internal_1a883c02293285f984a0653e9c9a341fb01b0e121b626c6038aa4581b87fd997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1a883c02293285f984a0653e9c9a341fb01b0e121b626c6038aa4581b87fd997->leave($__internal_1a883c02293285f984a0653e9c9a341fb01b0e121b626c6038aa4581b87fd997_prof);

        
        $__internal_c7e4c0ad9715dcd5c7d958328a49dedc6c79c4bcc1ba09eb033ca070516ce453->leave($__internal_c7e4c0ad9715dcd5c7d958328a49dedc6c79c4bcc1ba09eb033ca070516ce453_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4072b98e283e9241b6dfb459f7d1a8c1be82fb335727bc5f718b1e00f5d6802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4072b98e283e9241b6dfb459f7d1a8c1be82fb335727bc5f718b1e00f5d6802->enter($__internal_c4072b98e283e9241b6dfb459f7d1a8c1be82fb335727bc5f718b1e00f5d6802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23e7fcbb614a7e54debed0181e9d5af34a28074e86a6b3bebcc6016588632cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e7fcbb614a7e54debed0181e9d5af34a28074e86a6b3bebcc6016588632cc2->enter($__internal_23e7fcbb614a7e54debed0181e9d5af34a28074e86a6b3bebcc6016588632cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_23e7fcbb614a7e54debed0181e9d5af34a28074e86a6b3bebcc6016588632cc2->leave($__internal_23e7fcbb614a7e54debed0181e9d5af34a28074e86a6b3bebcc6016588632cc2_prof);

        
        $__internal_c4072b98e283e9241b6dfb459f7d1a8c1be82fb335727bc5f718b1e00f5d6802->leave($__internal_c4072b98e283e9241b6dfb459f7d1a8c1be82fb335727bc5f718b1e00f5d6802_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
