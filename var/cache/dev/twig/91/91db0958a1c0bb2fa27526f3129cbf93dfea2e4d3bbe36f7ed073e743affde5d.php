<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_919fe88d3fe42d15fabf432e4244ceae0f2076b78b0dd3865229c125913f9a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a675a1ba8d4026090b3c43aa92842c26a6cf65efc414eb6d81fffdc6657c07b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a675a1ba8d4026090b3c43aa92842c26a6cf65efc414eb6d81fffdc6657c07b1->enter($__internal_a675a1ba8d4026090b3c43aa92842c26a6cf65efc414eb6d81fffdc6657c07b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_77ab18489997f50d5b1ec29181799ba4b517804a97260bd2d286014270604029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ab18489997f50d5b1ec29181799ba4b517804a97260bd2d286014270604029->enter($__internal_77ab18489997f50d5b1ec29181799ba4b517804a97260bd2d286014270604029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a675a1ba8d4026090b3c43aa92842c26a6cf65efc414eb6d81fffdc6657c07b1->leave($__internal_a675a1ba8d4026090b3c43aa92842c26a6cf65efc414eb6d81fffdc6657c07b1_prof);

        
        $__internal_77ab18489997f50d5b1ec29181799ba4b517804a97260bd2d286014270604029->leave($__internal_77ab18489997f50d5b1ec29181799ba4b517804a97260bd2d286014270604029_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_74319532ff34fb20e194816c2464cd8940038f415f3136bcb94f873f3e292112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74319532ff34fb20e194816c2464cd8940038f415f3136bcb94f873f3e292112->enter($__internal_74319532ff34fb20e194816c2464cd8940038f415f3136bcb94f873f3e292112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_faf81f8aa7e9f036fd6a805817857150775cd21fa8f7899a45ae79b33520dc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf81f8aa7e9f036fd6a805817857150775cd21fa8f7899a45ae79b33520dc53->enter($__internal_faf81f8aa7e9f036fd6a805817857150775cd21fa8f7899a45ae79b33520dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_faf81f8aa7e9f036fd6a805817857150775cd21fa8f7899a45ae79b33520dc53->leave($__internal_faf81f8aa7e9f036fd6a805817857150775cd21fa8f7899a45ae79b33520dc53_prof);

        
        $__internal_74319532ff34fb20e194816c2464cd8940038f415f3136bcb94f873f3e292112->leave($__internal_74319532ff34fb20e194816c2464cd8940038f415f3136bcb94f873f3e292112_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/login.html.twig");
    }
}
