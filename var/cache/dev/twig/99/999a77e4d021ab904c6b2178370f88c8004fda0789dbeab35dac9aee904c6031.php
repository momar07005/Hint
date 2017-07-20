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
        $__internal_16d0c9c224dd9a3a1fbc6801ced2d7090a95852ca4dd50efaac803cd1a71708d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d0c9c224dd9a3a1fbc6801ced2d7090a95852ca4dd50efaac803cd1a71708d->enter($__internal_16d0c9c224dd9a3a1fbc6801ced2d7090a95852ca4dd50efaac803cd1a71708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e93014d50b5ea2dab59f0bde024037cf7c6f69b4bfe821f7cc6904fed14b9e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93014d50b5ea2dab59f0bde024037cf7c6f69b4bfe821f7cc6904fed14b9e0e->enter($__internal_e93014d50b5ea2dab59f0bde024037cf7c6f69b4bfe821f7cc6904fed14b9e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d0c9c224dd9a3a1fbc6801ced2d7090a95852ca4dd50efaac803cd1a71708d->leave($__internal_16d0c9c224dd9a3a1fbc6801ced2d7090a95852ca4dd50efaac803cd1a71708d_prof);

        
        $__internal_e93014d50b5ea2dab59f0bde024037cf7c6f69b4bfe821f7cc6904fed14b9e0e->leave($__internal_e93014d50b5ea2dab59f0bde024037cf7c6f69b4bfe821f7cc6904fed14b9e0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b97d5dd64ebb1b4c012680229af648ad027de8693d18689c50ea19a7a593cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b97d5dd64ebb1b4c012680229af648ad027de8693d18689c50ea19a7a593cf1->enter($__internal_9b97d5dd64ebb1b4c012680229af648ad027de8693d18689c50ea19a7a593cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fb1fac3aae2216088e68044a576084698f74c0e7c9ae6a81a106b8504ddcdb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1fac3aae2216088e68044a576084698f74c0e7c9ae6a81a106b8504ddcdb6a->enter($__internal_fb1fac3aae2216088e68044a576084698f74c0e7c9ae6a81a106b8504ddcdb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fb1fac3aae2216088e68044a576084698f74c0e7c9ae6a81a106b8504ddcdb6a->leave($__internal_fb1fac3aae2216088e68044a576084698f74c0e7c9ae6a81a106b8504ddcdb6a_prof);

        
        $__internal_9b97d5dd64ebb1b4c012680229af648ad027de8693d18689c50ea19a7a593cf1->leave($__internal_9b97d5dd64ebb1b4c012680229af648ad027de8693d18689c50ea19a7a593cf1_prof);

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
