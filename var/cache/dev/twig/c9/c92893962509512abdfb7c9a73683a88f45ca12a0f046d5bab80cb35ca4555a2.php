<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3732bd5be6d79c1ff5df3f465dbd7137fee4d788b7c479cf808ec9ad3c89864e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3732bd5be6d79c1ff5df3f465dbd7137fee4d788b7c479cf808ec9ad3c89864e->enter($__internal_3732bd5be6d79c1ff5df3f465dbd7137fee4d788b7c479cf808ec9ad3c89864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b38b0c74a1c4a6b758c6b0d0ac4c42ac9dd45ddbefbac1efbfc18a47f20ffee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38b0c74a1c4a6b758c6b0d0ac4c42ac9dd45ddbefbac1efbfc18a47f20ffee9->enter($__internal_b38b0c74a1c4a6b758c6b0d0ac4c42ac9dd45ddbefbac1efbfc18a47f20ffee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3732bd5be6d79c1ff5df3f465dbd7137fee4d788b7c479cf808ec9ad3c89864e->leave($__internal_3732bd5be6d79c1ff5df3f465dbd7137fee4d788b7c479cf808ec9ad3c89864e_prof);

        
        $__internal_b38b0c74a1c4a6b758c6b0d0ac4c42ac9dd45ddbefbac1efbfc18a47f20ffee9->leave($__internal_b38b0c74a1c4a6b758c6b0d0ac4c42ac9dd45ddbefbac1efbfc18a47f20ffee9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1a9f91553ec3410c26c3165aafdcbd5820c2bb68df869fd355f2fabfac2a604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a9f91553ec3410c26c3165aafdcbd5820c2bb68df869fd355f2fabfac2a604->enter($__internal_b1a9f91553ec3410c26c3165aafdcbd5820c2bb68df869fd355f2fabfac2a604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d63f37cc137741576265f3a75b0d8c0b5bf37885b8ea19c3b73ac63524d28b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63f37cc137741576265f3a75b0d8c0b5bf37885b8ea19c3b73ac63524d28b58->enter($__internal_d63f37cc137741576265f3a75b0d8c0b5bf37885b8ea19c3b73ac63524d28b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">S'inscrire</h1>
\t\t</div>
\t</div>
\t";
        // line 9
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 9)->display($context);
        // line 10
        echo "\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
";
        
        $__internal_d63f37cc137741576265f3a75b0d8c0b5bf37885b8ea19c3b73ac63524d28b58->leave($__internal_d63f37cc137741576265f3a75b0d8c0b5bf37885b8ea19c3b73ac63524d28b58_prof);

        
        $__internal_b1a9f91553ec3410c26c3165aafdcbd5820c2bb68df869fd355f2fabfac2a604->leave($__internal_b1a9f91553ec3410c26c3165aafdcbd5820c2bb68df869fd355f2fabfac2a604_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">S'inscrire</h1>
\t\t</div>
\t</div>
\t{% include \"@FOSUser/Registration/register_content.html.twig\" %}
\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
