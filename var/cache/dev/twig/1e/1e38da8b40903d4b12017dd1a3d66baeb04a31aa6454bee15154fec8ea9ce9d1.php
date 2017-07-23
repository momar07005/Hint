<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4d85921b64ffb363dbf6ceeeb5a682f3268837fb15c3d16a0fcb385b24c75c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cf505c98d8564881288655985c503476f5c11fe1f8c998e5b770c8a644b2b421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf505c98d8564881288655985c503476f5c11fe1f8c998e5b770c8a644b2b421->enter($__internal_cf505c98d8564881288655985c503476f5c11fe1f8c998e5b770c8a644b2b421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_16fc2344534c1384a9e840a2abc7fd4263b924afffa8cfd26aa8e609f490d62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fc2344534c1384a9e840a2abc7fd4263b924afffa8cfd26aa8e609f490d62f->enter($__internal_16fc2344534c1384a9e840a2abc7fd4263b924afffa8cfd26aa8e609f490d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf505c98d8564881288655985c503476f5c11fe1f8c998e5b770c8a644b2b421->leave($__internal_cf505c98d8564881288655985c503476f5c11fe1f8c998e5b770c8a644b2b421_prof);

        
        $__internal_16fc2344534c1384a9e840a2abc7fd4263b924afffa8cfd26aa8e609f490d62f->leave($__internal_16fc2344534c1384a9e840a2abc7fd4263b924afffa8cfd26aa8e609f490d62f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_893ad63c35609a8464f0ea7daac7b1d2eb767d6d4c0601a1816c5d88199b934f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893ad63c35609a8464f0ea7daac7b1d2eb767d6d4c0601a1816c5d88199b934f->enter($__internal_893ad63c35609a8464f0ea7daac7b1d2eb767d6d4c0601a1816c5d88199b934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6b493bd939b056077164ad506afde15de85edd21b54c59669f6c32fc00582c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b493bd939b056077164ad506afde15de85edd21b54c59669f6c32fc00582c5->enter($__internal_c6b493bd939b056077164ad506afde15de85edd21b54c59669f6c32fc00582c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c6b493bd939b056077164ad506afde15de85edd21b54c59669f6c32fc00582c5->leave($__internal_c6b493bd939b056077164ad506afde15de85edd21b54c59669f6c32fc00582c5_prof);

        
        $__internal_893ad63c35609a8464f0ea7daac7b1d2eb767d6d4c0601a1816c5d88199b934f->leave($__internal_893ad63c35609a8464f0ea7daac7b1d2eb767d6d4c0601a1816c5d88199b934f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
