<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_99de65678d3e0e9604278d2b94bc840211fdecc14dc4a30f967cc73b2e6289ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_14711087a5aff3be121cb187490c2a732581aee17506e3cdbfaea1bf7c9b2ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14711087a5aff3be121cb187490c2a732581aee17506e3cdbfaea1bf7c9b2ec5->enter($__internal_14711087a5aff3be121cb187490c2a732581aee17506e3cdbfaea1bf7c9b2ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_fd4dbc34bf86f6cd7b5790c790fc843f15d704bf300f20906cd407b8f4b26e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4dbc34bf86f6cd7b5790c790fc843f15d704bf300f20906cd407b8f4b26e2f->enter($__internal_fd4dbc34bf86f6cd7b5790c790fc843f15d704bf300f20906cd407b8f4b26e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14711087a5aff3be121cb187490c2a732581aee17506e3cdbfaea1bf7c9b2ec5->leave($__internal_14711087a5aff3be121cb187490c2a732581aee17506e3cdbfaea1bf7c9b2ec5_prof);

        
        $__internal_fd4dbc34bf86f6cd7b5790c790fc843f15d704bf300f20906cd407b8f4b26e2f->leave($__internal_fd4dbc34bf86f6cd7b5790c790fc843f15d704bf300f20906cd407b8f4b26e2f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dac3a141a1b6b2453c4cb75a3b0e58c92e621c7cce42fe899e3de5af7c3439b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac3a141a1b6b2453c4cb75a3b0e58c92e621c7cce42fe899e3de5af7c3439b3->enter($__internal_dac3a141a1b6b2453c4cb75a3b0e58c92e621c7cce42fe899e3de5af7c3439b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2dcbaa8039ca2119f81ecf6869170704f7e7db7b82163c8669bad20f6f631d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcbaa8039ca2119f81ecf6869170704f7e7db7b82163c8669bad20f6f631d41->enter($__internal_2dcbaa8039ca2119f81ecf6869170704f7e7db7b82163c8669bad20f6f631d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2dcbaa8039ca2119f81ecf6869170704f7e7db7b82163c8669bad20f6f631d41->leave($__internal_2dcbaa8039ca2119f81ecf6869170704f7e7db7b82163c8669bad20f6f631d41_prof);

        
        $__internal_dac3a141a1b6b2453c4cb75a3b0e58c92e621c7cce42fe899e3de5af7c3439b3->leave($__internal_dac3a141a1b6b2453c4cb75a3b0e58c92e621c7cce42fe899e3de5af7c3439b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
