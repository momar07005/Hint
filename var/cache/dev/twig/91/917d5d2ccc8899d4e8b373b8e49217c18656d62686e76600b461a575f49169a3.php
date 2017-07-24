<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e25fcc805e0568ffee2ef8fba17725a0de432b9115a772f1b7a63be0d2c3678e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_33d4a9cdb7faca2e13fc9d493d5f07bcdefe9e982461d51d8fe96ede03d5ea28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d4a9cdb7faca2e13fc9d493d5f07bcdefe9e982461d51d8fe96ede03d5ea28->enter($__internal_33d4a9cdb7faca2e13fc9d493d5f07bcdefe9e982461d51d8fe96ede03d5ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_06e52c6d0d4c5345f59e779f8ec88d58aec74030b6e4fabd03030c422396512e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e52c6d0d4c5345f59e779f8ec88d58aec74030b6e4fabd03030c422396512e->enter($__internal_06e52c6d0d4c5345f59e779f8ec88d58aec74030b6e4fabd03030c422396512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d4a9cdb7faca2e13fc9d493d5f07bcdefe9e982461d51d8fe96ede03d5ea28->leave($__internal_33d4a9cdb7faca2e13fc9d493d5f07bcdefe9e982461d51d8fe96ede03d5ea28_prof);

        
        $__internal_06e52c6d0d4c5345f59e779f8ec88d58aec74030b6e4fabd03030c422396512e->leave($__internal_06e52c6d0d4c5345f59e779f8ec88d58aec74030b6e4fabd03030c422396512e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b264f8243e716d648881a7075e91d156331081d947db4ef2c953380685419e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b264f8243e716d648881a7075e91d156331081d947db4ef2c953380685419e09->enter($__internal_b264f8243e716d648881a7075e91d156331081d947db4ef2c953380685419e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6febcd73a3627960a5f1f7ee52c7e1e9aa01c0c9d7a0619ada88f21d797edf2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6febcd73a3627960a5f1f7ee52c7e1e9aa01c0c9d7a0619ada88f21d797edf2d->enter($__internal_6febcd73a3627960a5f1f7ee52c7e1e9aa01c0c9d7a0619ada88f21d797edf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6febcd73a3627960a5f1f7ee52c7e1e9aa01c0c9d7a0619ada88f21d797edf2d->leave($__internal_6febcd73a3627960a5f1f7ee52c7e1e9aa01c0c9d7a0619ada88f21d797edf2d_prof);

        
        $__internal_b264f8243e716d648881a7075e91d156331081d947db4ef2c953380685419e09->leave($__internal_b264f8243e716d648881a7075e91d156331081d947db4ef2c953380685419e09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
