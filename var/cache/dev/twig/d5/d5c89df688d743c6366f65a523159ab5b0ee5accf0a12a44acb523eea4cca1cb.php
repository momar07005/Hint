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
        $__internal_be46920280adb14eadb56172568b2aae75c0c343c2ce4fed0b94a87861f44c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be46920280adb14eadb56172568b2aae75c0c343c2ce4fed0b94a87861f44c60->enter($__internal_be46920280adb14eadb56172568b2aae75c0c343c2ce4fed0b94a87861f44c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c41618bf5127b71df9022d7d958b62c1d3b7e2e8506e8870c2eb1eff57874e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41618bf5127b71df9022d7d958b62c1d3b7e2e8506e8870c2eb1eff57874e9e->enter($__internal_c41618bf5127b71df9022d7d958b62c1d3b7e2e8506e8870c2eb1eff57874e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be46920280adb14eadb56172568b2aae75c0c343c2ce4fed0b94a87861f44c60->leave($__internal_be46920280adb14eadb56172568b2aae75c0c343c2ce4fed0b94a87861f44c60_prof);

        
        $__internal_c41618bf5127b71df9022d7d958b62c1d3b7e2e8506e8870c2eb1eff57874e9e->leave($__internal_c41618bf5127b71df9022d7d958b62c1d3b7e2e8506e8870c2eb1eff57874e9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6839f8f1193aa8334485ea69d56aae379a7fb5a0cb99d4adaa2d3ce668f4534a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6839f8f1193aa8334485ea69d56aae379a7fb5a0cb99d4adaa2d3ce668f4534a->enter($__internal_6839f8f1193aa8334485ea69d56aae379a7fb5a0cb99d4adaa2d3ce668f4534a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_767cb54a6f149548253f55d80f63e534fbc0365b0cb05bb5448b7074e3abc3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767cb54a6f149548253f55d80f63e534fbc0365b0cb05bb5448b7074e3abc3fa->enter($__internal_767cb54a6f149548253f55d80f63e534fbc0365b0cb05bb5448b7074e3abc3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_767cb54a6f149548253f55d80f63e534fbc0365b0cb05bb5448b7074e3abc3fa->leave($__internal_767cb54a6f149548253f55d80f63e534fbc0365b0cb05bb5448b7074e3abc3fa_prof);

        
        $__internal_6839f8f1193aa8334485ea69d56aae379a7fb5a0cb99d4adaa2d3ce668f4534a->leave($__internal_6839f8f1193aa8334485ea69d56aae379a7fb5a0cb99d4adaa2d3ce668f4534a_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
