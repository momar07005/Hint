<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7687bb1c1c6aa511a4d6f4947d6fc43df0e4d28db4aa53199e73850c9ab26c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8f396b4da07937725aece27114531a159cb8c2c292de16f34cfd117f3dd16a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f396b4da07937725aece27114531a159cb8c2c292de16f34cfd117f3dd16a28->enter($__internal_8f396b4da07937725aece27114531a159cb8c2c292de16f34cfd117f3dd16a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1ca32389fc718e4750a3595c85f5e3b1c2b6a2ef41bc3675f4daa3640b48157f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca32389fc718e4750a3595c85f5e3b1c2b6a2ef41bc3675f4daa3640b48157f->enter($__internal_1ca32389fc718e4750a3595c85f5e3b1c2b6a2ef41bc3675f4daa3640b48157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f396b4da07937725aece27114531a159cb8c2c292de16f34cfd117f3dd16a28->leave($__internal_8f396b4da07937725aece27114531a159cb8c2c292de16f34cfd117f3dd16a28_prof);

        
        $__internal_1ca32389fc718e4750a3595c85f5e3b1c2b6a2ef41bc3675f4daa3640b48157f->leave($__internal_1ca32389fc718e4750a3595c85f5e3b1c2b6a2ef41bc3675f4daa3640b48157f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa3a5f2418a09a6992b17345a7496b30c74d9031b05189e78e8c3d0ae622aee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3a5f2418a09a6992b17345a7496b30c74d9031b05189e78e8c3d0ae622aee5->enter($__internal_aa3a5f2418a09a6992b17345a7496b30c74d9031b05189e78e8c3d0ae622aee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c2a615452056643eab4a10fcacf59c55f92cbfd978b6c926791df64b59cae32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2a615452056643eab4a10fcacf59c55f92cbfd978b6c926791df64b59cae32->enter($__internal_0c2a615452056643eab4a10fcacf59c55f92cbfd978b6c926791df64b59cae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0c2a615452056643eab4a10fcacf59c55f92cbfd978b6c926791df64b59cae32->leave($__internal_0c2a615452056643eab4a10fcacf59c55f92cbfd978b6c926791df64b59cae32_prof);

        
        $__internal_aa3a5f2418a09a6992b17345a7496b30c74d9031b05189e78e8c3d0ae622aee5->leave($__internal_aa3a5f2418a09a6992b17345a7496b30c74d9031b05189e78e8c3d0ae622aee5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
