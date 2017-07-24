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
        $__internal_f7aa1b5c72b909a15a382d7a88cd7e4d92fcc3530a5e2c305f22592e9d7c843d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7aa1b5c72b909a15a382d7a88cd7e4d92fcc3530a5e2c305f22592e9d7c843d->enter($__internal_f7aa1b5c72b909a15a382d7a88cd7e4d92fcc3530a5e2c305f22592e9d7c843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_c2e56ad104ecb5d47acfa752f9278a7f41526e463c5333e5d7a82dd524113296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e56ad104ecb5d47acfa752f9278a7f41526e463c5333e5d7a82dd524113296->enter($__internal_c2e56ad104ecb5d47acfa752f9278a7f41526e463c5333e5d7a82dd524113296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7aa1b5c72b909a15a382d7a88cd7e4d92fcc3530a5e2c305f22592e9d7c843d->leave($__internal_f7aa1b5c72b909a15a382d7a88cd7e4d92fcc3530a5e2c305f22592e9d7c843d_prof);

        
        $__internal_c2e56ad104ecb5d47acfa752f9278a7f41526e463c5333e5d7a82dd524113296->leave($__internal_c2e56ad104ecb5d47acfa752f9278a7f41526e463c5333e5d7a82dd524113296_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_9bd0e8c42f54f2acd968624219afb63c04fbd66c054db01cb33bc1de1ea8d37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd0e8c42f54f2acd968624219afb63c04fbd66c054db01cb33bc1de1ea8d37b->enter($__internal_9bd0e8c42f54f2acd968624219afb63c04fbd66c054db01cb33bc1de1ea8d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_ac6a77a3a5366664e1e4cc9b74ff25026e6903d9d9e0e53cb86e0cdd544c1c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6a77a3a5366664e1e4cc9b74ff25026e6903d9d9e0e53cb86e0cdd544c1c3d->enter($__internal_ac6a77a3a5366664e1e4cc9b74ff25026e6903d9d9e0e53cb86e0cdd544c1c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

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
        
        $__internal_ac6a77a3a5366664e1e4cc9b74ff25026e6903d9d9e0e53cb86e0cdd544c1c3d->leave($__internal_ac6a77a3a5366664e1e4cc9b74ff25026e6903d9d9e0e53cb86e0cdd544c1c3d_prof);

        
        $__internal_9bd0e8c42f54f2acd968624219afb63c04fbd66c054db01cb33bc1de1ea8d37b->leave($__internal_9bd0e8c42f54f2acd968624219afb63c04fbd66c054db01cb33bc1de1ea8d37b_prof);

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
", "HWIOAuthBundle:Connect:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/login.html.twig");
    }
}
