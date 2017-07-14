<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_820197ff7b83e36ba4d117d81b7b975bd302e0e78e231c2d5c227c9f9bb6ceb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9276306aa4fa117579306cc21c0556b3676040b1f18bf46858aa1785fa27054c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9276306aa4fa117579306cc21c0556b3676040b1f18bf46858aa1785fa27054c->enter($__internal_9276306aa4fa117579306cc21c0556b3676040b1f18bf46858aa1785fa27054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_b8720242f2cbc2cd545475a617ee90d341e8f7981edc2136e16287774bd6fde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8720242f2cbc2cd545475a617ee90d341e8f7981edc2136e16287774bd6fde2->enter($__internal_b8720242f2cbc2cd545475a617ee90d341e8f7981edc2136e16287774bd6fde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9276306aa4fa117579306cc21c0556b3676040b1f18bf46858aa1785fa27054c->leave($__internal_9276306aa4fa117579306cc21c0556b3676040b1f18bf46858aa1785fa27054c_prof);

        
        $__internal_b8720242f2cbc2cd545475a617ee90d341e8f7981edc2136e16287774bd6fde2->leave($__internal_b8720242f2cbc2cd545475a617ee90d341e8f7981edc2136e16287774bd6fde2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
