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
        $__internal_254b25c5fcecb2dbf067f078d4f2fa4f45d2c61dd117cc1aefd417e00c4ddfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254b25c5fcecb2dbf067f078d4f2fa4f45d2c61dd117cc1aefd417e00c4ddfc2->enter($__internal_254b25c5fcecb2dbf067f078d4f2fa4f45d2c61dd117cc1aefd417e00c4ddfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_460d308b578549c7f522750636d6bd24de3c44b7bfcc0c690849498a02c695b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460d308b578549c7f522750636d6bd24de3c44b7bfcc0c690849498a02c695b7->enter($__internal_460d308b578549c7f522750636d6bd24de3c44b7bfcc0c690849498a02c695b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254b25c5fcecb2dbf067f078d4f2fa4f45d2c61dd117cc1aefd417e00c4ddfc2->leave($__internal_254b25c5fcecb2dbf067f078d4f2fa4f45d2c61dd117cc1aefd417e00c4ddfc2_prof);

        
        $__internal_460d308b578549c7f522750636d6bd24de3c44b7bfcc0c690849498a02c695b7->leave($__internal_460d308b578549c7f522750636d6bd24de3c44b7bfcc0c690849498a02c695b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac028f2754fff30e2ba9c5d6ce27cb550773d0feb0d25836e9559dedd91d0b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac028f2754fff30e2ba9c5d6ce27cb550773d0feb0d25836e9559dedd91d0b94->enter($__internal_ac028f2754fff30e2ba9c5d6ce27cb550773d0feb0d25836e9559dedd91d0b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dfa00586fe04638addfde3b62e60797cde11fc497517583c68d73d72897384f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa00586fe04638addfde3b62e60797cde11fc497517583c68d73d72897384f9->enter($__internal_dfa00586fe04638addfde3b62e60797cde11fc497517583c68d73d72897384f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_dfa00586fe04638addfde3b62e60797cde11fc497517583c68d73d72897384f9->leave($__internal_dfa00586fe04638addfde3b62e60797cde11fc497517583c68d73d72897384f9_prof);

        
        $__internal_ac028f2754fff30e2ba9c5d6ce27cb550773d0feb0d25836e9559dedd91d0b94->leave($__internal_ac028f2754fff30e2ba9c5d6ce27cb550773d0feb0d25836e9559dedd91d0b94_prof);

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
