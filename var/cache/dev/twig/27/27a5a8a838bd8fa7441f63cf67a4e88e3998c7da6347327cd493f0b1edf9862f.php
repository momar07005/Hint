<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7687bb1c1c6aa511a4d6f4947d6fc43df0e4d28db4aa53199e73850c9ab26c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e4ec1fb2075a1b0824d6e48dbc13448edb624aa729deb39c238af7a18e1b7ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ec1fb2075a1b0824d6e48dbc13448edb624aa729deb39c238af7a18e1b7ebf->enter($__internal_e4ec1fb2075a1b0824d6e48dbc13448edb624aa729deb39c238af7a18e1b7ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_cdd0a524826514f965cf3bd23e2ec5d39914b79be88b6181bb8204a34f6936e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd0a524826514f965cf3bd23e2ec5d39914b79be88b6181bb8204a34f6936e1->enter($__internal_cdd0a524826514f965cf3bd23e2ec5d39914b79be88b6181bb8204a34f6936e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ec1fb2075a1b0824d6e48dbc13448edb624aa729deb39c238af7a18e1b7ebf->leave($__internal_e4ec1fb2075a1b0824d6e48dbc13448edb624aa729deb39c238af7a18e1b7ebf_prof);

        
        $__internal_cdd0a524826514f965cf3bd23e2ec5d39914b79be88b6181bb8204a34f6936e1->leave($__internal_cdd0a524826514f965cf3bd23e2ec5d39914b79be88b6181bb8204a34f6936e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c66a1d047782912a2ac096670b074ea0a46f473855f4d850136172c069d4649e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66a1d047782912a2ac096670b074ea0a46f473855f4d850136172c069d4649e->enter($__internal_c66a1d047782912a2ac096670b074ea0a46f473855f4d850136172c069d4649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c8e315e23f079fc56b0e42637e3d6c7a0bf3b46427c9ccffe0a71ce589d3cf63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e315e23f079fc56b0e42637e3d6c7a0bf3b46427c9ccffe0a71ce589d3cf63->enter($__internal_c8e315e23f079fc56b0e42637e3d6c7a0bf3b46427c9ccffe0a71ce589d3cf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c8e315e23f079fc56b0e42637e3d6c7a0bf3b46427c9ccffe0a71ce589d3cf63->leave($__internal_c8e315e23f079fc56b0e42637e3d6c7a0bf3b46427c9ccffe0a71ce589d3cf63_prof);

        
        $__internal_c66a1d047782912a2ac096670b074ea0a46f473855f4d850136172c069d4649e->leave($__internal_c66a1d047782912a2ac096670b074ea0a46f473855f4d850136172c069d4649e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
