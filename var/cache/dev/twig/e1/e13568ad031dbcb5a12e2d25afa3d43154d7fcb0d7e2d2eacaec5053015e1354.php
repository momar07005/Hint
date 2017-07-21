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
        $__internal_d81e7a0617ad6e3434f144e4be5140361ece8c116efc33130e120ae71c886181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81e7a0617ad6e3434f144e4be5140361ece8c116efc33130e120ae71c886181->enter($__internal_d81e7a0617ad6e3434f144e4be5140361ece8c116efc33130e120ae71c886181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8865cbfd88cfb0a2019a24e32cc3493cdbcd0036417702bdf7562342d4c66d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8865cbfd88cfb0a2019a24e32cc3493cdbcd0036417702bdf7562342d4c66d4d->enter($__internal_8865cbfd88cfb0a2019a24e32cc3493cdbcd0036417702bdf7562342d4c66d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81e7a0617ad6e3434f144e4be5140361ece8c116efc33130e120ae71c886181->leave($__internal_d81e7a0617ad6e3434f144e4be5140361ece8c116efc33130e120ae71c886181_prof);

        
        $__internal_8865cbfd88cfb0a2019a24e32cc3493cdbcd0036417702bdf7562342d4c66d4d->leave($__internal_8865cbfd88cfb0a2019a24e32cc3493cdbcd0036417702bdf7562342d4c66d4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd87c52f6124c1e5893399f204fc6e2e159e382b4265cedc3f5e3bcfe9ec06ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd87c52f6124c1e5893399f204fc6e2e159e382b4265cedc3f5e3bcfe9ec06ff->enter($__internal_dd87c52f6124c1e5893399f204fc6e2e159e382b4265cedc3f5e3bcfe9ec06ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0eaabafa39d80fc17ab710a8cb8b51ce5a06cf1b4a69e29341029b6154721b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0eaabafa39d80fc17ab710a8cb8b51ce5a06cf1b4a69e29341029b6154721b1->enter($__internal_d0eaabafa39d80fc17ab710a8cb8b51ce5a06cf1b4a69e29341029b6154721b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d0eaabafa39d80fc17ab710a8cb8b51ce5a06cf1b4a69e29341029b6154721b1->leave($__internal_d0eaabafa39d80fc17ab710a8cb8b51ce5a06cf1b4a69e29341029b6154721b1_prof);

        
        $__internal_dd87c52f6124c1e5893399f204fc6e2e159e382b4265cedc3f5e3bcfe9ec06ff->leave($__internal_dd87c52f6124c1e5893399f204fc6e2e159e382b4265cedc3f5e3bcfe9ec06ff_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
