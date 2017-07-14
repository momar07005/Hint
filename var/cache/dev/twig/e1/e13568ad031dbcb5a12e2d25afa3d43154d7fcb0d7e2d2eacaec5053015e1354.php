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
        $__internal_2fb54d3003f10ff8aa822e9ea9d111fc1051f9a6b8eadc8fcc43731c9534c2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb54d3003f10ff8aa822e9ea9d111fc1051f9a6b8eadc8fcc43731c9534c2ee->enter($__internal_2fb54d3003f10ff8aa822e9ea9d111fc1051f9a6b8eadc8fcc43731c9534c2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e999c415e423b7f222d044352e073fdd0060a6e8163082b335330a4dec639e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e999c415e423b7f222d044352e073fdd0060a6e8163082b335330a4dec639e45->enter($__internal_e999c415e423b7f222d044352e073fdd0060a6e8163082b335330a4dec639e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb54d3003f10ff8aa822e9ea9d111fc1051f9a6b8eadc8fcc43731c9534c2ee->leave($__internal_2fb54d3003f10ff8aa822e9ea9d111fc1051f9a6b8eadc8fcc43731c9534c2ee_prof);

        
        $__internal_e999c415e423b7f222d044352e073fdd0060a6e8163082b335330a4dec639e45->leave($__internal_e999c415e423b7f222d044352e073fdd0060a6e8163082b335330a4dec639e45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3eedc4186292b6b8f3677cde323e847b6fddee4b935c220d9aa0adf896cc646a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eedc4186292b6b8f3677cde323e847b6fddee4b935c220d9aa0adf896cc646a->enter($__internal_3eedc4186292b6b8f3677cde323e847b6fddee4b935c220d9aa0adf896cc646a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f56c118a5b9ebdd5ab02020434a201d16ac7ac05bdd86243431b4ab2f96bc613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56c118a5b9ebdd5ab02020434a201d16ac7ac05bdd86243431b4ab2f96bc613->enter($__internal_f56c118a5b9ebdd5ab02020434a201d16ac7ac05bdd86243431b4ab2f96bc613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f56c118a5b9ebdd5ab02020434a201d16ac7ac05bdd86243431b4ab2f96bc613->leave($__internal_f56c118a5b9ebdd5ab02020434a201d16ac7ac05bdd86243431b4ab2f96bc613_prof);

        
        $__internal_3eedc4186292b6b8f3677cde323e847b6fddee4b935c220d9aa0adf896cc646a->leave($__internal_3eedc4186292b6b8f3677cde323e847b6fddee4b935c220d9aa0adf896cc646a_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
