<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6d7293ee10c8b292354c28abe376587062ec212d92950df3b3d80bd8aca47a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_48d19cf47b306c88f0036738eb10dd676938433f5eec73149b7774684831fcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d19cf47b306c88f0036738eb10dd676938433f5eec73149b7774684831fcfa->enter($__internal_48d19cf47b306c88f0036738eb10dd676938433f5eec73149b7774684831fcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6c1a9b8e3a11d530c75441b17ef4bf94f0deb49154897e67c7cb465f7b7ecf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1a9b8e3a11d530c75441b17ef4bf94f0deb49154897e67c7cb465f7b7ecf0b->enter($__internal_6c1a9b8e3a11d530c75441b17ef4bf94f0deb49154897e67c7cb465f7b7ecf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d19cf47b306c88f0036738eb10dd676938433f5eec73149b7774684831fcfa->leave($__internal_48d19cf47b306c88f0036738eb10dd676938433f5eec73149b7774684831fcfa_prof);

        
        $__internal_6c1a9b8e3a11d530c75441b17ef4bf94f0deb49154897e67c7cb465f7b7ecf0b->leave($__internal_6c1a9b8e3a11d530c75441b17ef4bf94f0deb49154897e67c7cb465f7b7ecf0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a3e60737e70c6d066a6f0bca3ed4040e57151f17d2204c30541cd8014604447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3e60737e70c6d066a6f0bca3ed4040e57151f17d2204c30541cd8014604447->enter($__internal_8a3e60737e70c6d066a6f0bca3ed4040e57151f17d2204c30541cd8014604447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d56f9579498144ce521cb318b8efe08a9220f085a0a4b9adf86b99652437e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d56f9579498144ce521cb318b8efe08a9220f085a0a4b9adf86b99652437e5a->enter($__internal_5d56f9579498144ce521cb318b8efe08a9220f085a0a4b9adf86b99652437e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5d56f9579498144ce521cb318b8efe08a9220f085a0a4b9adf86b99652437e5a->leave($__internal_5d56f9579498144ce521cb318b8efe08a9220f085a0a4b9adf86b99652437e5a_prof);

        
        $__internal_8a3e60737e70c6d066a6f0bca3ed4040e57151f17d2204c30541cd8014604447->leave($__internal_8a3e60737e70c6d066a6f0bca3ed4040e57151f17d2204c30541cd8014604447_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
