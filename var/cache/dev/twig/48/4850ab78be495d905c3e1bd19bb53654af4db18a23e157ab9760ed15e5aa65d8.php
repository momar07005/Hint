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
        $__internal_a83546aaa707c39294a47502065b211f74c2630d24051fda90ac1bc9a0f1597e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83546aaa707c39294a47502065b211f74c2630d24051fda90ac1bc9a0f1597e->enter($__internal_a83546aaa707c39294a47502065b211f74c2630d24051fda90ac1bc9a0f1597e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_22c5a27e227870e75b57d6497105fbf480608dab518193cbfec31daa1679bc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c5a27e227870e75b57d6497105fbf480608dab518193cbfec31daa1679bc47->enter($__internal_22c5a27e227870e75b57d6497105fbf480608dab518193cbfec31daa1679bc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83546aaa707c39294a47502065b211f74c2630d24051fda90ac1bc9a0f1597e->leave($__internal_a83546aaa707c39294a47502065b211f74c2630d24051fda90ac1bc9a0f1597e_prof);

        
        $__internal_22c5a27e227870e75b57d6497105fbf480608dab518193cbfec31daa1679bc47->leave($__internal_22c5a27e227870e75b57d6497105fbf480608dab518193cbfec31daa1679bc47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4124961c8a5ff6d1d030de6d9aad5649d8a62663c254002610e0e302d727e0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4124961c8a5ff6d1d030de6d9aad5649d8a62663c254002610e0e302d727e0a0->enter($__internal_4124961c8a5ff6d1d030de6d9aad5649d8a62663c254002610e0e302d727e0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e798df8741fe1974af418a6570981f8e8596fc852c48ed45130e2726d9a2b7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e798df8741fe1974af418a6570981f8e8596fc852c48ed45130e2726d9a2b7eb->enter($__internal_e798df8741fe1974af418a6570981f8e8596fc852c48ed45130e2726d9a2b7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e798df8741fe1974af418a6570981f8e8596fc852c48ed45130e2726d9a2b7eb->leave($__internal_e798df8741fe1974af418a6570981f8e8596fc852c48ed45130e2726d9a2b7eb_prof);

        
        $__internal_4124961c8a5ff6d1d030de6d9aad5649d8a62663c254002610e0e302d727e0a0->leave($__internal_4124961c8a5ff6d1d030de6d9aad5649d8a62663c254002610e0e302d727e0a0_prof);

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
