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
        $__internal_2d783115698e19c3fdb91bb71689c6708916101feee90ed5e98b09a462c87cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d783115698e19c3fdb91bb71689c6708916101feee90ed5e98b09a462c87cc0->enter($__internal_2d783115698e19c3fdb91bb71689c6708916101feee90ed5e98b09a462c87cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_805d4dd48429facb790293962f90783df20d48f37769aec506fec20e3fa1a0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d4dd48429facb790293962f90783df20d48f37769aec506fec20e3fa1a0a8->enter($__internal_805d4dd48429facb790293962f90783df20d48f37769aec506fec20e3fa1a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d783115698e19c3fdb91bb71689c6708916101feee90ed5e98b09a462c87cc0->leave($__internal_2d783115698e19c3fdb91bb71689c6708916101feee90ed5e98b09a462c87cc0_prof);

        
        $__internal_805d4dd48429facb790293962f90783df20d48f37769aec506fec20e3fa1a0a8->leave($__internal_805d4dd48429facb790293962f90783df20d48f37769aec506fec20e3fa1a0a8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d72c810fb592223183308f56e444fee7f7268cfde286ae55135b97dc432af8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d72c810fb592223183308f56e444fee7f7268cfde286ae55135b97dc432af8a->enter($__internal_2d72c810fb592223183308f56e444fee7f7268cfde286ae55135b97dc432af8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7403cc5384f555c173d017fd2734a66bb61912bffc57d23e9e8767b86d437f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7403cc5384f555c173d017fd2734a66bb61912bffc57d23e9e8767b86d437f49->enter($__internal_7403cc5384f555c173d017fd2734a66bb61912bffc57d23e9e8767b86d437f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7403cc5384f555c173d017fd2734a66bb61912bffc57d23e9e8767b86d437f49->leave($__internal_7403cc5384f555c173d017fd2734a66bb61912bffc57d23e9e8767b86d437f49_prof);

        
        $__internal_2d72c810fb592223183308f56e444fee7f7268cfde286ae55135b97dc432af8a->leave($__internal_2d72c810fb592223183308f56e444fee7f7268cfde286ae55135b97dc432af8a_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
