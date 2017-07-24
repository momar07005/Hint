<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbbdcb08abcafa7517aa825001ba5fc40feb09b1d154676a8e2e61d951b71e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_321de76f5e08b7dd2f35943f066af443548c4c0a6467c5b7a42548675030a5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321de76f5e08b7dd2f35943f066af443548c4c0a6467c5b7a42548675030a5c1->enter($__internal_321de76f5e08b7dd2f35943f066af443548c4c0a6467c5b7a42548675030a5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_627a3b37c9befe0cc558bfc9099c87aef813d728a3ae15c4da01bd68d0815483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627a3b37c9befe0cc558bfc9099c87aef813d728a3ae15c4da01bd68d0815483->enter($__internal_627a3b37c9befe0cc558bfc9099c87aef813d728a3ae15c4da01bd68d0815483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_321de76f5e08b7dd2f35943f066af443548c4c0a6467c5b7a42548675030a5c1->leave($__internal_321de76f5e08b7dd2f35943f066af443548c4c0a6467c5b7a42548675030a5c1_prof);

        
        $__internal_627a3b37c9befe0cc558bfc9099c87aef813d728a3ae15c4da01bd68d0815483->leave($__internal_627a3b37c9befe0cc558bfc9099c87aef813d728a3ae15c4da01bd68d0815483_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a51261a6104e1b2f9a5e9626fb734a90f9aa6c274fd165c1ff1b75e0d8224610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51261a6104e1b2f9a5e9626fb734a90f9aa6c274fd165c1ff1b75e0d8224610->enter($__internal_a51261a6104e1b2f9a5e9626fb734a90f9aa6c274fd165c1ff1b75e0d8224610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e230affee8ea0724881d5537d635fa4478d17277946db82645f978a243488dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e230affee8ea0724881d5537d635fa4478d17277946db82645f978a243488dc8->enter($__internal_e230affee8ea0724881d5537d635fa4478d17277946db82645f978a243488dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    ";
        // line 9
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
";
        
        $__internal_e230affee8ea0724881d5537d635fa4478d17277946db82645f978a243488dc8->leave($__internal_e230affee8ea0724881d5537d635fa4478d17277946db82645f978a243488dc8_prof);

        
        $__internal_a51261a6104e1b2f9a5e9626fb734a90f9aa6c274fd165c1ff1b75e0d8224610->leave($__internal_a51261a6104e1b2f9a5e9626fb734a90f9aa6c274fd165c1ff1b75e0d8224610_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
