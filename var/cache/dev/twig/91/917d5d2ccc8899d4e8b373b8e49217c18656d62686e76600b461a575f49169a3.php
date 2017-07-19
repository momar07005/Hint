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
        $__internal_3b3b1aac0583e0c1f142f7a83fb3c03f3b7bf04fa434c3d6ffdb2caca3ca1313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3b1aac0583e0c1f142f7a83fb3c03f3b7bf04fa434c3d6ffdb2caca3ca1313->enter($__internal_3b3b1aac0583e0c1f142f7a83fb3c03f3b7bf04fa434c3d6ffdb2caca3ca1313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_27a0fd181e5e3ba1dae3eec74c1c99e921fc6307810d5276c3789f765be2cd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a0fd181e5e3ba1dae3eec74c1c99e921fc6307810d5276c3789f765be2cd06->enter($__internal_27a0fd181e5e3ba1dae3eec74c1c99e921fc6307810d5276c3789f765be2cd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3b1aac0583e0c1f142f7a83fb3c03f3b7bf04fa434c3d6ffdb2caca3ca1313->leave($__internal_3b3b1aac0583e0c1f142f7a83fb3c03f3b7bf04fa434c3d6ffdb2caca3ca1313_prof);

        
        $__internal_27a0fd181e5e3ba1dae3eec74c1c99e921fc6307810d5276c3789f765be2cd06->leave($__internal_27a0fd181e5e3ba1dae3eec74c1c99e921fc6307810d5276c3789f765be2cd06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a14ffdd8ef36be89bbbd55acfee15beb64880f90117633ad66f66b76f3be5875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14ffdd8ef36be89bbbd55acfee15beb64880f90117633ad66f66b76f3be5875->enter($__internal_a14ffdd8ef36be89bbbd55acfee15beb64880f90117633ad66f66b76f3be5875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a9bb0c59d452be8beb7cb90869b53df2b0478f43160c04667c665a70118660e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9bb0c59d452be8beb7cb90869b53df2b0478f43160c04667c665a70118660e->enter($__internal_0a9bb0c59d452be8beb7cb90869b53df2b0478f43160c04667c665a70118660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0a9bb0c59d452be8beb7cb90869b53df2b0478f43160c04667c665a70118660e->leave($__internal_0a9bb0c59d452be8beb7cb90869b53df2b0478f43160c04667c665a70118660e_prof);

        
        $__internal_a14ffdd8ef36be89bbbd55acfee15beb64880f90117633ad66f66b76f3be5875->leave($__internal_a14ffdd8ef36be89bbbd55acfee15beb64880f90117633ad66f66b76f3be5875_prof);

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
