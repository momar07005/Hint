<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_82882cea376725de34eb85d5e74e8099aa43dda6e9d812461008b5f374b097cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_a0f526cb82e9b56fccab3cc56610104365c9e523e17ef69600252401da66907c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f526cb82e9b56fccab3cc56610104365c9e523e17ef69600252401da66907c->enter($__internal_a0f526cb82e9b56fccab3cc56610104365c9e523e17ef69600252401da66907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_96bd24237ad33d71e0da3ff707769bfeb832b5dddb537663c79b4ed22a3436bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bd24237ad33d71e0da3ff707769bfeb832b5dddb537663c79b4ed22a3436bd->enter($__internal_96bd24237ad33d71e0da3ff707769bfeb832b5dddb537663c79b4ed22a3436bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f526cb82e9b56fccab3cc56610104365c9e523e17ef69600252401da66907c->leave($__internal_a0f526cb82e9b56fccab3cc56610104365c9e523e17ef69600252401da66907c_prof);

        
        $__internal_96bd24237ad33d71e0da3ff707769bfeb832b5dddb537663c79b4ed22a3436bd->leave($__internal_96bd24237ad33d71e0da3ff707769bfeb832b5dddb537663c79b4ed22a3436bd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8a7ae989fcfb947c10f7397dcc51c7d5a1d93a2ca6212a43c20cc03b4ff95cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a7ae989fcfb947c10f7397dcc51c7d5a1d93a2ca6212a43c20cc03b4ff95cc->enter($__internal_f8a7ae989fcfb947c10f7397dcc51c7d5a1d93a2ca6212a43c20cc03b4ff95cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d02227b1196d18816076fb13b32b8cdf4c96926c337aacf66d910e180d6dcab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02227b1196d18816076fb13b32b8cdf4c96926c337aacf66d910e180d6dcab0->enter($__internal_d02227b1196d18816076fb13b32b8cdf4c96926c337aacf66d910e180d6dcab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d02227b1196d18816076fb13b32b8cdf4c96926c337aacf66d910e180d6dcab0->leave($__internal_d02227b1196d18816076fb13b32b8cdf4c96926c337aacf66d910e180d6dcab0_prof);

        
        $__internal_f8a7ae989fcfb947c10f7397dcc51c7d5a1d93a2ca6212a43c20cc03b4ff95cc->leave($__internal_f8a7ae989fcfb947c10f7397dcc51c7d5a1d93a2ca6212a43c20cc03b4ff95cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
