<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_72566889ca6acda8c7e69f86e85d239f29278819048d37cdf38d902687da1b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "HWIOAuthBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ac2deb34868c0254bf63f94bd9cc0c35257548c6bf4ecbdf4135afcf15a9152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac2deb34868c0254bf63f94bd9cc0c35257548c6bf4ecbdf4135afcf15a9152->enter($__internal_9ac2deb34868c0254bf63f94bd9cc0c35257548c6bf4ecbdf4135afcf15a9152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_33762ddf2d0cb3e5b08949bf7a52b2b1fa3f0d55d875673e686f7970fce22b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33762ddf2d0cb3e5b08949bf7a52b2b1fa3f0d55d875673e686f7970fce22b8a->enter($__internal_33762ddf2d0cb3e5b08949bf7a52b2b1fa3f0d55d875673e686f7970fce22b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac2deb34868c0254bf63f94bd9cc0c35257548c6bf4ecbdf4135afcf15a9152->leave($__internal_9ac2deb34868c0254bf63f94bd9cc0c35257548c6bf4ecbdf4135afcf15a9152_prof);

        
        $__internal_33762ddf2d0cb3e5b08949bf7a52b2b1fa3f0d55d875673e686f7970fce22b8a->leave($__internal_33762ddf2d0cb3e5b08949bf7a52b2b1fa3f0d55d875673e686f7970fce22b8a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_af4dc56215f65de41116912515ea29443ab3f14e7d8903d6491fe7c4b9487232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4dc56215f65de41116912515ea29443ab3f14e7d8903d6491fe7c4b9487232->enter($__internal_af4dc56215f65de41116912515ea29443ab3f14e7d8903d6491fe7c4b9487232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9545949dceace2527b0e5039d80162863703bc60b4a9b76d2a46dcfd1ad66b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9545949dceace2527b0e5039d80162863703bc60b4a9b76d2a46dcfd1ad66b34->enter($__internal_9545949dceace2527b0e5039d80162863703bc60b4a9b76d2a46dcfd1ad66b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div>
            ";
        // line 5
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 7
        echo "        </div>
";
        
        $__internal_9545949dceace2527b0e5039d80162863703bc60b4a9b76d2a46dcfd1ad66b34->leave($__internal_9545949dceace2527b0e5039d80162863703bc60b4a9b76d2a46dcfd1ad66b34_prof);

        
        $__internal_af4dc56215f65de41116912515ea29443ab3f14e7d8903d6491fe7c4b9487232->leave($__internal_af4dc56215f65de41116912515ea29443ab3f14e7d8903d6491fe7c4b9487232_prof);

    }

    // line 5
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_f60a398c6b0e37e58efb460b84b6d6839d2196d45f40aa6307800a93cef1bc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60a398c6b0e37e58efb460b84b6d6839d2196d45f40aa6307800a93cef1bc69->enter($__internal_f60a398c6b0e37e58efb460b84b6d6839d2196d45f40aa6307800a93cef1bc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_67a068dbdc0b8fae4996d6f5f24e5bbd935b0281d06caeac62dabb8fd53b99fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a068dbdc0b8fae4996d6f5f24e5bbd935b0281d06caeac62dabb8fd53b99fe->enter($__internal_67a068dbdc0b8fae4996d6f5f24e5bbd935b0281d06caeac62dabb8fd53b99fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 6
        echo "            ";
        
        $__internal_67a068dbdc0b8fae4996d6f5f24e5bbd935b0281d06caeac62dabb8fd53b99fe->leave($__internal_67a068dbdc0b8fae4996d6f5f24e5bbd935b0281d06caeac62dabb8fd53b99fe_prof);

        
        $__internal_f60a398c6b0e37e58efb460b84b6d6839d2196d45f40aa6307800a93cef1bc69->leave($__internal_f60a398c6b0e37e58efb460b84b6d6839d2196d45f40aa6307800a93cef1bc69_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  66 => 5,  55 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block content %}
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
{% endblock %}", "HWIOAuthBundle::layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
