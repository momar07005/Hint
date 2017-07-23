<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_fde3360136dd48078c4ddd72a839d903db1a83badb7828034803ad440e54eaff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ea1087b74f8ecb43fe039eeaec3169b8a6654588e40c587f5e30b8db23a04866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1087b74f8ecb43fe039eeaec3169b8a6654588e40c587f5e30b8db23a04866->enter($__internal_ea1087b74f8ecb43fe039eeaec3169b8a6654588e40c587f5e30b8db23a04866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_0ff0e47382f8bc4b97c88c075729da3f63bd46d92a2a0a9d65173cf84ed80774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff0e47382f8bc4b97c88c075729da3f63bd46d92a2a0a9d65173cf84ed80774->enter($__internal_0ff0e47382f8bc4b97c88c075729da3f63bd46d92a2a0a9d65173cf84ed80774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1087b74f8ecb43fe039eeaec3169b8a6654588e40c587f5e30b8db23a04866->leave($__internal_ea1087b74f8ecb43fe039eeaec3169b8a6654588e40c587f5e30b8db23a04866_prof);

        
        $__internal_0ff0e47382f8bc4b97c88c075729da3f63bd46d92a2a0a9d65173cf84ed80774->leave($__internal_0ff0e47382f8bc4b97c88c075729da3f63bd46d92a2a0a9d65173cf84ed80774_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84173f9798e9991e446f1878de915cb1ba1cc64179ccc433020e42233beb8f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84173f9798e9991e446f1878de915cb1ba1cc64179ccc433020e42233beb8f80->enter($__internal_84173f9798e9991e446f1878de915cb1ba1cc64179ccc433020e42233beb8f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1474661766bae1e7490145174fc0309179a823974a7c338fd51467dfee37b5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1474661766bae1e7490145174fc0309179a823974a7c338fd51467dfee37b5e3->enter($__internal_1474661766bae1e7490145174fc0309179a823974a7c338fd51467dfee37b5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1474661766bae1e7490145174fc0309179a823974a7c338fd51467dfee37b5e3->leave($__internal_1474661766bae1e7490145174fc0309179a823974a7c338fd51467dfee37b5e3_prof);

        
        $__internal_84173f9798e9991e446f1878de915cb1ba1cc64179ccc433020e42233beb8f80->leave($__internal_84173f9798e9991e446f1878de915cb1ba1cc64179ccc433020e42233beb8f80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
