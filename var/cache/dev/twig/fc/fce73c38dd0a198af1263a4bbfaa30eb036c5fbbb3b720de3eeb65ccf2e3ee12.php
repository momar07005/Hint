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
        $__internal_c9c3ade9ae60918f03abbf2b7203aeecb3f1a62f013fe36dec1c2d50f8e5f6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c3ade9ae60918f03abbf2b7203aeecb3f1a62f013fe36dec1c2d50f8e5f6e6->enter($__internal_c9c3ade9ae60918f03abbf2b7203aeecb3f1a62f013fe36dec1c2d50f8e5f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ba8b7de1362139298b4b92c76e77247a5af2856f527ffb9ce563a7bfa24a1a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8b7de1362139298b4b92c76e77247a5af2856f527ffb9ce563a7bfa24a1a2e->enter($__internal_ba8b7de1362139298b4b92c76e77247a5af2856f527ffb9ce563a7bfa24a1a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9c3ade9ae60918f03abbf2b7203aeecb3f1a62f013fe36dec1c2d50f8e5f6e6->leave($__internal_c9c3ade9ae60918f03abbf2b7203aeecb3f1a62f013fe36dec1c2d50f8e5f6e6_prof);

        
        $__internal_ba8b7de1362139298b4b92c76e77247a5af2856f527ffb9ce563a7bfa24a1a2e->leave($__internal_ba8b7de1362139298b4b92c76e77247a5af2856f527ffb9ce563a7bfa24a1a2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f5d7e4f0e694cee36709a2c9f888d4d9877e36066ab57849edce254114cfd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5d7e4f0e694cee36709a2c9f888d4d9877e36066ab57849edce254114cfd79->enter($__internal_6f5d7e4f0e694cee36709a2c9f888d4d9877e36066ab57849edce254114cfd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3579a40585d8f3b852febbb15fff67a1f756ed60daa19b3da52e57064a6f0503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3579a40585d8f3b852febbb15fff67a1f756ed60daa19b3da52e57064a6f0503->enter($__internal_3579a40585d8f3b852febbb15fff67a1f756ed60daa19b3da52e57064a6f0503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3579a40585d8f3b852febbb15fff67a1f756ed60daa19b3da52e57064a6f0503->leave($__internal_3579a40585d8f3b852febbb15fff67a1f756ed60daa19b3da52e57064a6f0503_prof);

        
        $__internal_6f5d7e4f0e694cee36709a2c9f888d4d9877e36066ab57849edce254114cfd79->leave($__internal_6f5d7e4f0e694cee36709a2c9f888d4d9877e36066ab57849edce254114cfd79_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_473ad0b1e5e58585f32463733491de945555998b74ba27bf5c05af37d80ddf70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473ad0b1e5e58585f32463733491de945555998b74ba27bf5c05af37d80ddf70->enter($__internal_473ad0b1e5e58585f32463733491de945555998b74ba27bf5c05af37d80ddf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c20b414b5be84242d9eafb82f508ed33644e41e4153dc86302ddd4acd2c72b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20b414b5be84242d9eafb82f508ed33644e41e4153dc86302ddd4acd2c72b15->enter($__internal_c20b414b5be84242d9eafb82f508ed33644e41e4153dc86302ddd4acd2c72b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c20b414b5be84242d9eafb82f508ed33644e41e4153dc86302ddd4acd2c72b15->leave($__internal_c20b414b5be84242d9eafb82f508ed33644e41e4153dc86302ddd4acd2c72b15_prof);

        
        $__internal_473ad0b1e5e58585f32463733491de945555998b74ba27bf5c05af37d80ddf70->leave($__internal_473ad0b1e5e58585f32463733491de945555998b74ba27bf5c05af37d80ddf70_prof);

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
