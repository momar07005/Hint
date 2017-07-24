<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4dbd497deb6193d31ca6c58354dfc01ec7cfb49cfc91bf552561bd8b69f7447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65339713a3e5855f3df587ce1aeda96774da0324f804e6aad0886c1d1a6731b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65339713a3e5855f3df587ce1aeda96774da0324f804e6aad0886c1d1a6731b9->enter($__internal_65339713a3e5855f3df587ce1aeda96774da0324f804e6aad0886c1d1a6731b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_fc6fa165c628bbf10985ea8b6113073a731157884c6cdcbfc62ef37d5aafae43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6fa165c628bbf10985ea8b6113073a731157884c6cdcbfc62ef37d5aafae43->enter($__internal_fc6fa165c628bbf10985ea8b6113073a731157884c6cdcbfc62ef37d5aafae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65339713a3e5855f3df587ce1aeda96774da0324f804e6aad0886c1d1a6731b9->leave($__internal_65339713a3e5855f3df587ce1aeda96774da0324f804e6aad0886c1d1a6731b9_prof);

        
        $__internal_fc6fa165c628bbf10985ea8b6113073a731157884c6cdcbfc62ef37d5aafae43->leave($__internal_fc6fa165c628bbf10985ea8b6113073a731157884c6cdcbfc62ef37d5aafae43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e63dda3a39b9da7edda1e527354bd2328684198768e581e78ead4b995cab3dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63dda3a39b9da7edda1e527354bd2328684198768e581e78ead4b995cab3dc8->enter($__internal_e63dda3a39b9da7edda1e527354bd2328684198768e581e78ead4b995cab3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b298c7bde4090c901b340e4f9ba2677663504cca02a4dcc9d400d0f194896871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b298c7bde4090c901b340e4f9ba2677663504cca02a4dcc9d400d0f194896871->enter($__internal_b298c7bde4090c901b340e4f9ba2677663504cca02a4dcc9d400d0f194896871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b298c7bde4090c901b340e4f9ba2677663504cca02a4dcc9d400d0f194896871->leave($__internal_b298c7bde4090c901b340e4f9ba2677663504cca02a4dcc9d400d0f194896871_prof);

        
        $__internal_e63dda3a39b9da7edda1e527354bd2328684198768e581e78ead4b995cab3dc8->leave($__internal_e63dda3a39b9da7edda1e527354bd2328684198768e581e78ead4b995cab3dc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
