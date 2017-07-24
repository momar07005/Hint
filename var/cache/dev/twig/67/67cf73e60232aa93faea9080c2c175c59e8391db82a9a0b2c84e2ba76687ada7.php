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
        $__internal_ae87d457c3a502ce8d6844412197de8270bf3ecf9f7335deb011c7cabfeb078f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae87d457c3a502ce8d6844412197de8270bf3ecf9f7335deb011c7cabfeb078f->enter($__internal_ae87d457c3a502ce8d6844412197de8270bf3ecf9f7335deb011c7cabfeb078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f693a6279c78641f8d45ffc3c0f0bb2895241b0320fef6084e36d33c64db47f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f693a6279c78641f8d45ffc3c0f0bb2895241b0320fef6084e36d33c64db47f0->enter($__internal_f693a6279c78641f8d45ffc3c0f0bb2895241b0320fef6084e36d33c64db47f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae87d457c3a502ce8d6844412197de8270bf3ecf9f7335deb011c7cabfeb078f->leave($__internal_ae87d457c3a502ce8d6844412197de8270bf3ecf9f7335deb011c7cabfeb078f_prof);

        
        $__internal_f693a6279c78641f8d45ffc3c0f0bb2895241b0320fef6084e36d33c64db47f0->leave($__internal_f693a6279c78641f8d45ffc3c0f0bb2895241b0320fef6084e36d33c64db47f0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d8f495005dc4d5fd4509d361bcc9f5a87ae7109a3b4ddc5c160adbb6dc5df15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8f495005dc4d5fd4509d361bcc9f5a87ae7109a3b4ddc5c160adbb6dc5df15->enter($__internal_0d8f495005dc4d5fd4509d361bcc9f5a87ae7109a3b4ddc5c160adbb6dc5df15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82b6d1e41ec70f2e19b480b2df2b3f82dc76b9da33c538914eb036ce4352c4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b6d1e41ec70f2e19b480b2df2b3f82dc76b9da33c538914eb036ce4352c4c2->enter($__internal_82b6d1e41ec70f2e19b480b2df2b3f82dc76b9da33c538914eb036ce4352c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_82b6d1e41ec70f2e19b480b2df2b3f82dc76b9da33c538914eb036ce4352c4c2->leave($__internal_82b6d1e41ec70f2e19b480b2df2b3f82dc76b9da33c538914eb036ce4352c4c2_prof);

        
        $__internal_0d8f495005dc4d5fd4509d361bcc9f5a87ae7109a3b4ddc5c160adbb6dc5df15->leave($__internal_0d8f495005dc4d5fd4509d361bcc9f5a87ae7109a3b4ddc5c160adbb6dc5df15_prof);

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
