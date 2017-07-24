<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_514958e2ebbca0ab400b5f7b13950f2bba7e75dd7219e9db93da65747ce20ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4edd1e689842d222dd3cb0e4e670afd9c70175e63ccf6071b189219d85205bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edd1e689842d222dd3cb0e4e670afd9c70175e63ccf6071b189219d85205bde->enter($__internal_4edd1e689842d222dd3cb0e4e670afd9c70175e63ccf6071b189219d85205bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_24c0bad580e23535693609b780dcbd758b70ee8cacf0ab6b8dbbde5731831c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c0bad580e23535693609b780dcbd758b70ee8cacf0ab6b8dbbde5731831c8a->enter($__internal_24c0bad580e23535693609b780dcbd758b70ee8cacf0ab6b8dbbde5731831c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4edd1e689842d222dd3cb0e4e670afd9c70175e63ccf6071b189219d85205bde->leave($__internal_4edd1e689842d222dd3cb0e4e670afd9c70175e63ccf6071b189219d85205bde_prof);

        
        $__internal_24c0bad580e23535693609b780dcbd758b70ee8cacf0ab6b8dbbde5731831c8a->leave($__internal_24c0bad580e23535693609b780dcbd758b70ee8cacf0ab6b8dbbde5731831c8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcd1cd51cf4aca38bf5badb17945bbb2488b9e223df9e3d3d360b6cc4934ff24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd1cd51cf4aca38bf5badb17945bbb2488b9e223df9e3d3d360b6cc4934ff24->enter($__internal_dcd1cd51cf4aca38bf5badb17945bbb2488b9e223df9e3d3d360b6cc4934ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcd9688845aa00f670d5cf657c1783bb2d5935b4a1335baa5b37eb72a1b34166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd9688845aa00f670d5cf657c1783bb2d5935b4a1335baa5b37eb72a1b34166->enter($__internal_dcd9688845aa00f670d5cf657c1783bb2d5935b4a1335baa5b37eb72a1b34166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_dcd9688845aa00f670d5cf657c1783bb2d5935b4a1335baa5b37eb72a1b34166->leave($__internal_dcd9688845aa00f670d5cf657c1783bb2d5935b4a1335baa5b37eb72a1b34166_prof);

        
        $__internal_dcd1cd51cf4aca38bf5badb17945bbb2488b9e223df9e3d3d360b6cc4934ff24->leave($__internal_dcd1cd51cf4aca38bf5badb17945bbb2488b9e223df9e3d3d360b6cc4934ff24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
