<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_94b3ea64fabda46e20ee47a4d49c2030e52788807924e1ac5babb68a2e0fa9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e7fe484ad9679d775d080fb50bb42ff67a305b02e6f8ed47f5ac2b37c005cf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fe484ad9679d775d080fb50bb42ff67a305b02e6f8ed47f5ac2b37c005cf3f->enter($__internal_e7fe484ad9679d775d080fb50bb42ff67a305b02e6f8ed47f5ac2b37c005cf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_0855f86cb185f7d25db1ed807202450644499a75c0ece6d803f77cdeca280528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0855f86cb185f7d25db1ed807202450644499a75c0ece6d803f77cdeca280528->enter($__internal_0855f86cb185f7d25db1ed807202450644499a75c0ece6d803f77cdeca280528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7fe484ad9679d775d080fb50bb42ff67a305b02e6f8ed47f5ac2b37c005cf3f->leave($__internal_e7fe484ad9679d775d080fb50bb42ff67a305b02e6f8ed47f5ac2b37c005cf3f_prof);

        
        $__internal_0855f86cb185f7d25db1ed807202450644499a75c0ece6d803f77cdeca280528->leave($__internal_0855f86cb185f7d25db1ed807202450644499a75c0ece6d803f77cdeca280528_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fb496e828705a04167d66c270b6caf41dcf6a9cad3e401ba94a7c74a0ba5836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb496e828705a04167d66c270b6caf41dcf6a9cad3e401ba94a7c74a0ba5836->enter($__internal_4fb496e828705a04167d66c270b6caf41dcf6a9cad3e401ba94a7c74a0ba5836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e22ad5ab5a468be52a9de3fc0482fec8c3c2a2cfe4ecc8c2376ef38dbb60669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e22ad5ab5a468be52a9de3fc0482fec8c3c2a2cfe4ecc8c2376ef38dbb60669->enter($__internal_6e22ad5ab5a468be52a9de3fc0482fec8c3c2a2cfe4ecc8c2376ef38dbb60669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6e22ad5ab5a468be52a9de3fc0482fec8c3c2a2cfe4ecc8c2376ef38dbb60669->leave($__internal_6e22ad5ab5a468be52a9de3fc0482fec8c3c2a2cfe4ecc8c2376ef38dbb60669_prof);

        
        $__internal_4fb496e828705a04167d66c270b6caf41dcf6a9cad3e401ba94a7c74a0ba5836->leave($__internal_4fb496e828705a04167d66c270b6caf41dcf6a9cad3e401ba94a7c74a0ba5836_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
